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

    <link rel="stylesheet" href="CSS/indexStyle.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Coffee</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Coffee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="jumbotron">
            <h1>Humanity runs on coffee.</h1>
            <p>Coffee can help people feel less tired and increase energy levels. That’s because it contains a stimulant called caffeine — the most commonly consumed psychoactive substance in the world. After you drink coffee, the caffeine is absorbed into
                your bloodstream. From there, it travels to your brain. In the brain, caffeine blocks the inhibitory neurotransmitter adenosine. When this happens, the amount of other neurotransmitters like norepinephrine and dopamine increases, leading
                to enhanced firing of neurons. Many controlled studies in humans show that coffee improves various aspects of brain function — including memory, mood, vigilance, energy levels, reaction times and general mental function.</p>
            <p>
                <p>Caffeine stimulates your nervous system, signaling fat cells to break down body fat. But it also increases epinephrine (adrenaline) levels in your blood. This is the fight-or-flight hormone, which prepares your body for intense physical
                    exertion. Caffeine breaks down body fat, making free fatty acids available as fuel. Given these effects, it’s unsurprising that caffeine can improve physical performance by 11–12%, on average. Therefore, it makes sense to have a strong
                    cup of coffee about half an hour before you head to the gym.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    <div class="container">
        <h1>Coffee </h1>
        <div class="row">
            <div class="col-lg-4 col-sm-12  col-md-12">
                <img src="images/coffee-1.jpg" alt="coffee cup image" class="img-fluid img-thumbnail h-20">
            </div>
            <div class="col-lg-4 col-sm-12  col-md-12">
                <img src="images/coffee-2.jpg" alt="coffee cup image" class="img-fluid img-thumbnail h-20">
            </div>
            <div class="col-lg-4 col-sm-12  col-md-12">
                <img src="images/coffee-3.jpg" alt="coffee cup image" class="img-fluid img-thumbnail h-20">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-12  col-md-12">
                <img src="images/coffee-4.jpg" alt="coffee cup image" class="img-fluid img-thumbnail h-20">
            </div>
            <div class="col-lg-4 col-sm-12  col-md-12">
                <img src="images/coffee-5.jpg" alt="coffee cup image" class="img-fluid img-thumbnail h-20">
            </div>
            <div class="col-lg-4 col-sm-12  col-md-12">
                <img src="images/coffee-6.jpg" alt="coffee cup image" class="img-fluid img-thumbnail h-20">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-12  col-md-12">
                <img src="images/coffee-7.jpg" alt="coffee cup image" class="img-fluid img-thumbnail h-20">
            </div>
            <div class="col-lg-4 col-sm-12  col-md-12">
                <img src="images/coffee-8.jpg" alt="coffee cup image" class="img-fluid img-thumbnail h-20">
            </div>
            <div class="col-lg-4 col-sm-12  col-md-12">
                <img src="images/coffee-9.jpg" alt="coffee cup image" class="img-fluid img-thumbnail h-20">
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright
            <a class="nav-link text-dark" href="https://google.com/">coffee.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>