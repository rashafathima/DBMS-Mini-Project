<?php
    include("server.php");
    session_start();
    if(isset($_POST['signup'])) {
        extract($_POST);
        mysqli_select_db($con, 'location');

        $Email =$_POST['Email'];
        $password =$_POST['password'];
        $cpassword =$_POST['cpassword'];
        $errors = array();
        
        if (empty($username)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password = $cpassword) {
       
        $sql="SELECT * FROM user WHERE Email = '$Email' AND password = '$password'";
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_assoc($result);  
        if (mysqli_num_rows($result)>0) { 
            $_SESSION['message'] = "Email already exists";
            header("Location: Login.php"); 
                exit(0);
            }
            else{
                $query = "INSERT INTO user (`Email`, `password`) VALUES ('$Email','$password')";
                $result = mysqli_query($con, $query);  
                 mysqli_select_db($con, 'location');
                   if($result){
                    $_SESSION['message'] = "Sign Up successful";
                    header("Location: home.php"); 
                        exit(0); 
                   }
                   else{
                    header("Location: Login.php"); 
                    exit(0);   
                   }
            }
        }
    else{
        array_push($errors, "The passwords do not match");
        }
    }

    else{
        header("Location: Login.php");  
    }
?>

    