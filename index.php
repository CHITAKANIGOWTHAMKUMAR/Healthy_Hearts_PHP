<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); include("conn_db.php"); include("head.php");?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | HealthyHearts </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main2.css">
</head>
<body class="d-flex flex-column h-100">
    <?php include('nav_header.php')?>
    <div class="d-flex text-center text-white position-relative promo-banner-bg py-3">
        <div class="p-lg-2 mx-auto my-5">
            <h1 class="display-5 fw-normal">Welcome to HealthyHearts</h1>
            <p class="lead fw-normal">Vasavi Health Care Organization</p>
            <span class="xsmall-font text-muted"></span>
        </div>
    </div>
    <div class="container p-5" id="recommended-shop">


        <!-- GRID SHOP SELECTION -->
        <?php if(!isset($_SESSION['cid'])){ ?>
          
            <h2 class="border-bottom pb-2"><i class="bi bi- align-top"></i> To Continue Login to your account</h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
            <div class="card rounded-25">
                        <img <?php
                            echo "src=img/donate.png";
                        ?> style="width:100%; height:175px; object-fit:cover;"
                            class="card-img-top rounded-25 img-fluid" alt="<?php echo "Donate"?>">
                        <div class="card-body">

                            <p class="card-subtitle">

                            </p>

                            <div class="text-center">


                            </div>
                        </div>
                    </div>
                    <div class="card rounded-25  ">
                        <img <?php
                            echo "src=img/receive.jpg";
                        ?> style="width:100%; height:175px; object-fit:cover;"
                            class="card-img-top rounded-25 img-fluid" alt="<?php echo "Request"?>">
                        <div class="card-body">

                            <p class="card-subtitle">

                            </p>

                            <div class="text-center">

                            </div>
                        </div>
                    </div>
                    <div class="card rounded-25  ">
                        <img <?php
                            echo "src=img/month.jpg";
                        ?> style="width:100%; height:175px; object-fit:cover;"
                            class="card-img-top rounded-25 img-fluid" alt="<?php echo "Monthly Donation"?>">
                        <div class="card-body">

                            <p class="card-subtitle">

                            </p>

                            <div class="text-center">

                            </div>
                        </div>
                    </div>
            </div>



        <?php }else{ ?>
            <h2 class="border-bottom pb-2"><i class="bi bi- align-top"></i> Choose your Action</h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">


            <!-- GRID EACH SHOP -->


                    <div class="card rounded-25">
                        <img <?php
                            echo "src=img/donate.png";
                        ?> style="width:100%; height:175px; object-fit:cover;"
                            class="card-img-top rounded-25 img-fluid" alt="<?php echo "Donate"?>">
                        <div class="card-body">

                            <p class="card-subtitle">

                            </p>

                            <div class="text-center">

                                <a href="<?php echo "donate.php"?>"
                                    class="btn btn-sm btn-outline-dark">Click to Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-25  ">
                        <img <?php
                            echo "src=img/receive.jpg";
                        ?> style="width:100%; height:175px; object-fit:cover;"
                            class="card-img-top rounded-25 img-fluid" alt="<?php echo "Request"?>">
                        <div class="card-body">

                            <p class="card-subtitle">

                            </p>

                            <div class="text-center">
                                <a href="<?php echo "request.php"?>"
                                    class="btn btn-sm btn-outline-dark">Click to Request</a>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-25  ">
                        <img <?php
                            echo "src=img/month.jpg";
                        ?> style="width:100%; height:175px; object-fit:cover;"
                            class="card-img-top rounded-25 img-fluid" alt="<?php echo "Monthly Donation"?>">
                        <div class="card-body">

                            <p class="card-subtitle">

                            </p>

                            <div class="text-center">
                                <a href="<?php echo "payment.php"?>"
                                    class="btn btn-sm btn-outline-dark">Monthly Donation</a>
                            </div>
                        </div>
                    </div>
                </a>

            <!-- END GRID EACH SHOP -->

        </div>
        <!-- END GRID SHOP SELECTION -->

    </div>
    <?php include('footer.php')?>
        <?php } ?>



</body>
</html>
