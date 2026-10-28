<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <title>Donation List | HealthyHearts</title>
</head>

<body class="d-flex flex-column h-100">
    <?php include('nav_header.php')?>

    <div class="container p-5" id="recommended-shop">
        <a class="nav nav-item text-decoration-none text-muted mb-3" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <h3 class="border-bottom pb-2"><i class="bi bi-shop align-top"></i> Currently Needed Donations</h3>

        <!-- GRID SHOP SELECTION -->
        <div class="row row-cols-1 row-cols-lg-2 align-items-stretch g-4 py-3">

        <?php
            $query = "SELECT r_id,firstname,healthissue,amount_r,mobileno,hospitalname FROM recipient";
            $result = $mysqli -> query($query);
            if($result -> num_rows > 0){
            while($row = $result -> fetch_array()){
        ?>
            <!-- GRID EACH SHOP -->
            <div class="col">
                <a href="<?php echo "payment.php"?>" class="text-decoration-none text-dark">
                    <div class="card rounded-25">
                    <img src="img/donatedefault.jpg"
                        style="width:100%; height:175px; object-fit:cover;"
                        class="card-img-top rounded-25 img-fluid" alt="...">
                        <div class="card-body">
                            
                            <h4 name="HealthIssue" class="card-title text-center fw-bold"><?php echo $row["healthissue"]?></h4>
                            <h6 name="patient-name" class="card-title fw-normal">Patient Name: <?php echo $row["firstname"]?></h6>
                            <h6 name="amount" class="card-title fw-normal">Amount in need: <?php echo $row["amount_r"]?></h6>
                            
                            <h6 name="Hospitalname" class="card-title fw-normal">Hospital Name: <?php echo $row["hospitalname"]?></h6>
                            

                            <div class="text-center">
                                <a href="<?php echo "payment.php"?>" class="btn btn-sm btn-outline-dark">Donate</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END GRID EACH SHOP -->
        <?php }
        }else{
            ?>
            </div>
            <div class="row row-cols-1">
                    <div class="col pt-3 px-3 bg-danger text-white rounded text-center">
                        <i class="bi bi-x-circle-fill"></i>
                        <p class="ms-2 mt-2">No donations currently requesting!</p>
                    </div>
            </div>
            <?php
        }
            $result -> free_result();
        ?>
        </div>
        <!-- END GRID SHOP SELECTION -->

    </div>

    <?php include('footer.php')?>
</body>

</html>
