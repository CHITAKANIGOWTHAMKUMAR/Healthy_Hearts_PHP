<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("../conn_db.php"); include('../head.php');?>
    <meta charset="UTF-8">
    <link href="../img/favicon.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/login.css" rel="stylesheet">


    <title>Send Mail | HealthyHearts</title>
</head>

<body class="d-flex flex-column">
    <header class="navbar navbar-light fixed-top bg-light shadow-sm mb-auto">
        <div class="container-fluid mx-4">
            <a href="admin_home.php">
            <img src="../img/Black logo - no background.png" width="125" class="me-2" alt="SVHT Logo">
            </a>
        </div>
    </header>
    <div class="container mt-4"></div>
    <div class="container form-signin mt-auto">
        <a class="nav nav-item text-decoration-none text-muted" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <form method="POST" action="sender.php" class="form-floating">
            <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-envelope me-2"></i>Send Mail</h2>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="subject" placeholder="subject" name="subject"
                    minlength="5" maxlength="100000" required>
                <label for="subject">Subject</label>
            </div>
            <div class="form-floating mb-2">
                <textarea type="text" class="form-control" id="body" placeholder="body" name="body" minlength="8"
                    maxlength="1000000" required>
                </textarea>
                <label for="body">Body</label>
            </div>


            <button class="w-100 btn btn-success mb-3" type="submit" name="send" onclick="javascript: window.location='admin_funds_list.php'">Send</button>
        </form>
    </div>
    <div class="container mt-4"></div>
    <?php include('admin_footer.php')?>
</body>

</html>
