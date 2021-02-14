<?php
    session_start();
    if(isset($_SESSION['name']))
    {
        header("Location: user.php" );
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/signupStyle.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Sign Up</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Coffee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginform.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

<div class="container">
    <div class="jumbotron">
        <h1>Sign Up</h1>
        <p>Enter your detail bellow to register in to Coffee Lover</p>
    </div>
</div>


<div class="container form">
    <form class="form-horizontal" action="register.php" method="POST">
        <div class="form-group">
            <label for="inputName3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-12">
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-12">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-12">
                <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" class="btn btn-outline-dark">SIGN IN</button>
            </div>
        </div>
    </form>
</div>
<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2021 Copyright
        <a class="nav-link text-dark" href="https://google.com/">coffee.com</a>
    </div>
    <!-- Copyright -->
</footer>

</html>