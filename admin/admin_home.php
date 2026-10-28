<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php 
        session_start(); 
        include("../conn_db.php"); 
        include('../head.php');
        if($_SESSION["utype"]!="ADMIN"){
            header("location: ../restricted.php");
            exit(1);
        }
    ?>
    <meta charset="UTF-8">
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../img/favicon.png" rel="icon">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/main2.css" rel="stylesheet">
    <title>Admin Dashboard | HealthyHearts</title>
</head>

<body class="d-flex flex-column">

    <?php include('nav_header_admin.php')?>

    <div class="d-flex text-center text-white promo-banner-bg py-3">
        <div class="p-lg-2 mx-auto my-3">
            <h1 class="display-5 fw-normal">ADMIN DASHBOARD</h1>
            <p class="lead fw-normal">Vasavi Health Care Organization</p></div>
    </div>

    <div class="container p-5" id="admin-dashboard">
        <h2 class="border-bottom pb-2"><i class="bi bi-graph-up"></i> System Status</h2>

        <!-- ADMIN GRID DASHBOARD -->
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">

            <!-- GRID OF CUSTOMER -->
            <div class="col">
                <a href="admin_customer_list.php" class="text-decoration-none text-dark">
                    <div class="card rounded-5 border-danger p-2">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="bi bi-person-fill"></i>
                                User</h4>
                            <p class="card-text my-2">
                                <span class="h5">
                                    <?php
                                    $cust_query = "SELECT COUNT(*) AS cnt FROM user;";
                                    $cust_arr = $mysqli -> query($cust_query) -> fetch_array();
                                    echo $cust_arr["cnt"];
                                ?>
                                </span>
                                user(s) in the system
                            </p>
                            <div class="text-end">
                                <a href="admin_user_list.php" class="btn btn-sm btn-outline-dark">Go to User List</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END GRID OF CUSTOMER -->

            <!-- GRID OF SHOP -->
            <div class="col">
                <a href="admin_recipient_list.php" class="text-decoration-none text-dark">
                    <div class="card rounded-5 border-success p-2">
                        <div class="card-body">
                            <h4 class="card-title">
                            <i class="bi bi-person-fill"></i>
                                Recipient</h4>
                            <p class="card-text my-2">
                                <span class="h5">
                                    <?php
                                    $cust_query = "SELECT COUNT(*) AS cnt FROM recipient;";
                                    $cust_arr = $mysqli -> query($cust_query) -> fetch_array();
                                    echo $cust_arr["cnt"];
                                ?>
                                </span>
                                recipient(s) in the system
                            </p>
                            <div class="text-end">
                                <a href="admin_recipient_list.php" class="btn btn-sm btn-outline-dark">Go to recipient List</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- END GRID OF SHOP -->
            
            <!-- GRID OF FOOD -->
            <div class="col">
                <a href="admin_funds_list.php" class="text-decoration-none text-dark">
                    <div class="card rounded-5 border-danger p-2">
                        <div class="card-body">
                            <h4 class="card-title">
                            <i class="bi bi-currency-rupee"></i>
                                Payment</h4>
                            <p class="card-text my-2">
                                <span class="h5">
                                    <?php
                                    $cust_query = "SELECT COUNT(*) AS cnt FROM payment;";
                                    $cust_arr = $mysqli -> query($cust_query) -> fetch_array();
                                    echo $cust_arr["cnt"];
                                ?>
                                </span>
                                payment(s) in the system
                            </p>
                            <div class="text-end">
                                <a href="admin_funds_list.php" class="btn btn-sm btn-outline-dark">Go to Payment List</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- END GRID OF FOOD -->

            <!-- GRID OF ORDER -->
            
            <!-- END GRID OF ORDER -->


        </div>
        <!-- END ADMIN GRID DASHBOARD -->

    </div>
    <?php include('admin_footer.php')?>
</body>

</html>