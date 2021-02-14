<?php
    if(isset($_POST['submit']))
    {
        $server="localhost";
        $username="root";
        $password="";
        $database="users";

        $con=mysqli_connect($server,$username,$password,$database);

        if($con)
        {
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $password=mysqli_real_escape_string($con,$_POST['password']);

            $check="SELECT *from register where email='$email' and password='$password'";
            $checkRes=mysqli_query($con,$check);
            $data=mysqli_fetch_array($checkRes);

            if(empty($data))
            {
                header('location: loginform.php');
            }
            else
            {
                session_start();
                $_SESSION['name']=$data['name'];
                header("location:user.php");
            }
        }
        else
        {
            echo "Error: Database Connectivity Error.<br>";
        }
    }
    else
    {
        header("location:index.php");
    }
?>