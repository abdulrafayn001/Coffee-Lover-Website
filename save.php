<?php
    session_start();
    if(isset($_SESSION['name']) && isset($_POST['submit']))
    {
        $server="localhost";
        $username="root";
        $password="";
        $database="users";

        $con=mysqli_connect($server,$username,$password,$database);
        if($con)
        {
            $id=$_SESSION['id'];
            $aboutSection=$_POST['about'];

            $about="SELECT about_section from about where user_id=$id";
            $aboutRun=mysqli_query($con,$about);
            $aboutRes=mysqli_fetch_array($aboutRun);
            
            if(empty($aboutRes))
            {
                if($aboutSection!="")
                {
                    $insertQuery="INSERT INTO about (user_id,about_section) VALUES ($id,"."'".$aboutSection."'".")";
                    mysqli_query($con,$insertQuery);
                }
                header("location:user.php");
            }
            else {
                $updateQuery="UPDATE about SET about_section="."'".$aboutSection."'"." WHERE user_id=$id";
                mysqli_query($con,$updateQuery);
                echo $updateQuery;
                header("location:user.php");
            }
        }
        else
        {
            header("location:user.php");
        }
    }
    else
    {
        header("location:user.php");
    }
?>