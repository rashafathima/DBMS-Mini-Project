<?php
session_start();
include("server.php");
mysqli_select_db($con, 'dummy');

if(isset($_POST['login']))
{
    $Email =$_POST['Email'];
    $password =$_POST['password'];

    if(empty($_POST['Email']) || empty($_POST['password']))
    {
        { array_push($errors, "Email and password is required"); }
    }
    else
    {
    $sql="SELECT * FROM user WHERE Email = '$Email' AND password = '$password' LIMIT 1";
   $result = mysqli_query($con, $sql);
   if (mysqli_num_rows($result) == 1)
   {
       header('Location: \second\index.php');
   }
   else
   {
    $_SESSION['mesage']="Invalid Email or password ";
    header('location: Login.php');
    exit(0);
   }
}
}
?>
