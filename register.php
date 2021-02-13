<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $server="localhost";
        $username="root";
        $password="";
        $database="users";

        $con=mysqli_connect($server,$username,$password,$database);

        if($con)
        {
            $name=mysqli_real_escape_string($con,$_POST['name']);
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $password=mysqli_real_escape_string($con,$_POST['password']);

            $sql_query="INSERT into register (name,password,email) values ('$name','$password','$email')";
            $inserted=mysqli_query($con,$sql_query);

            if($inserted)
            {
                $_SESSION['name']=$name;
                header("location:user.php");
            }
            else
            {
                header("location:index.php");
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