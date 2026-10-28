<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">

    <title>Successfully Received | HealthyHearts</title>
</head>

<body class="d-flex flex-column h-100">
    <header class="navbar navbar-light fixed-top bg-light shadow-sm mb-auto">
        <div class="container-fluid mx-4">
            <a href="index.php">
                <img src="img/Black logo - no background.png" width="125" class="me-2" alt="HealthyHearts Logo">
            </a>
        </div>
    </header>
    <div class="mt-5"></div>
    <div class="container form-signin text-center reg-success mt-auto">
            <i class="mt-4 bi bi-balloon-heart text-success h1 display-2"></i>
            <h3 class="mt-2 mb-3 fw-normal text-bold">Your request has received!</h3>
            <p class="mb-3 fw-normal text-bold">We have always held to the hope, the belief, the conviction that there is a better life, a better world, beyond the horizon.</p>
            <a class="btn btn-success btn-sm w-50" href="index.php">Return to Home</a>
    </div>

    <?php include('footer.php')?>
</body>

</html>