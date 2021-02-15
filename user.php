<?php
    session_start();
    if(!isset($_SESSION['name']))
    {
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/userStyle.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title><?php echo $_SESSION['name']; ?></title>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo $_SESSION['name']; ?></a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-warning">Logout</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-4 col-sm-12  col-md-12">
                    <img src="images/profile pic.jpg" alt="Profile Picture" class="img-fluid img-thumbnail">
                </div>
                <div class="col-lg-8 col-sm-12  col-md-12">
                    <h1><?php echo $_SESSION['name']; ?></h1>
                    <form action="save.php" method="post">
                        <textarea class="form-control" id="myTextarea" rows="6" name='about'></textarea>
                        <button class="btn btn-success btn-lg savebtn" name='submit' type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="users";

    $con=mysqli_connect($server,$username,$password,$database);
    if($con)
    {
        $id=$_SESSION['id'];
        $about="SELECT about_section from about where user_id=$id";
        $aboutRun=mysqli_query($con,$about);
        $aboutRes=mysqli_fetch_array($aboutRun);
        if(!empty($aboutRes))
        {
            echo "<script>document.getElementById('myTextarea').value ="."'".$aboutRes['about_section']."'".";</script>";
        }
    }
?>
</html>