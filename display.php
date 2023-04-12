<html>
    <head>
        <title>Display
</title>
<style>
    body{
        background:#d071f9;
    }
table{
    background-color:white;
}
</style>
    </head>

    </html>
<?php
include("connection.php");
$query="SELECT * FROM `form`";
$data=mysqli_query($con,$query);
$total= mysqli_num_rows($data);

echo $total;



if($total !=0){
    ?>
<h2 align="center"><mark>Displaying All Records</mark></h2>
<center><table border="1" cellspacing="7" width="100%">
    <tr>
    <th width="5%">ID</th>
    <th width="8%">First Name</th>
    <th width="8%">Last Name</th>
    <th width="10%">Gender</th>
    <th width="20%">Email</th>
    <th width="10%">Phone</th>
    <th width="24%">Address</th>
    <th width="15%">Operations</th>


</tr>


<?php
  while($result=mysqli_fetch_assoc($data))
  {
    echo "<tr>
    <td>".$result['id']."</td>
    <td>".$result['fname']."</td>
    <td>".$result['lname']."</td>
    <td>".$result['gender']."</td>
    <td>".$result['email']."</td>
    <td>".$result['phone']."</td>
    <td>".$result['address']."</td>
    <td><a href='update_design.php?id=$result[id]'>Update</a></td>

</tr>";

  }
}
else{
    echo "no records found";
}
?>

</table></center>
