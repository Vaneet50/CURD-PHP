<?php
include("connection.php");
$id= $_GET['id'];
$query="SELECT * FROM `form` where id='$id'";
$data=mysqli_query($con,$query);
$total= mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD operation</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
        <div class="title">
Update details        </div>
        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>               
                 <input type="text" value = " <?php echo $result['fname']; ?> " name = "first" id="" class="input">

                 </div>

            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" value = " <?php echo $result['lname']; ?>" name="last" id="" class="input">
            </div>

            <div class="input_field">
                <label for="">Password</label>
                <input type="password"  value = " <?php echo $result['password']; ?> name="password" id="" class="input">
            </div>

            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password"  value = " <?php echo $result['cpassword']; ?> name="conf" id="" class="input">
            </div>

            <div class="input_field">
                <label for="">Gender</label>
                <div class="selectbox">
                    <select name="gender">
                        <option value="not selected">Select</option>
                        <option value="male" 
                        <?php
                        if($result['gender']=='male'){
                            echo "selected";
                        }
                        ?>
                        >Male</option>
                        <option value="female"
                        <?php
                        if($result['gender']=='female'){
                            echo "selected";
                        }
                        ?>
                        >Female</option>


                    </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">E-Mail</label>
                <input type="text" value = " <?php echo $result['email']; ?>" name="mail" id="" class="input">
            </div>
            <div class="input_field">
                <label for="">Phone</label>
                <input type="text" value = " <?php echo $result['phone']; ?>"name="phone" id="" class="input">
            </div>

            <div class="input_field">
                <label for="">Address</label>
                <textarea  name="address"class="textarea">
               <?php echo $result['address']; ?>
</textarea>
            </div>

            <div class="input_field">
                <label class="check" for="">
                    <input type="checkbox" name="" id="">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>

            </div>

            <div class="input_field">
                <input type="submit" name="update" id="" class="btn" value="Update">
            </div>
        </div>
</form>
    </div>

</body>

</html>
<?php
if($_POST['update']){
    $fname=$_POST['first'];
    $lname=$_POST['last'];
    $password=$_POST['password'];
    $conf=$_POST['conf'];
    $gender=$_POST['gender'];

    $email=$_POST['mail'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

  $query="Update `form` set fname='$fname',lname='$lname',password='$password',cpassword='conf',gender='$gender'email='$email',phone='$phone',address='$address'";
  $data=mysqli_query($con,$query);
  if($data){
    echo "data updated";
  }
  else{
    echo "not updated";
  }
}

?>