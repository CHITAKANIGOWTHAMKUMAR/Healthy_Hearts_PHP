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
    <title>Payment List | HealthyHearts</title>
</head>

<body class="d-flex flex-column h-100">

    <?php include('nav_header_admin.php')?>

    <div class="container p-2 pb-0" id="admin-dashboard">
        <div class="mt-4 border-bottom">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="#" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>


            <h2 class="pt-3 display-6">Payment List</h2>
            <form class="form-floating mb-3" method="GET" action="admin_funds_list.php">
                <div class="row g-2">
                    <div class="col">
                        <input type="text" class="form-control" id="p_id" name="p_id" placeholder="Payment ID"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["p_id"];?>" <?php } ?>>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="t_id" name="t_id" placeholder="Transaction ID"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["t_id"];?>" <?php } ?>>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Name"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["p_name"];?>" <?php } ?>>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="p_amount" name="p_amount" placeholder="Amount"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["p_amount"];?>" <?php } ?>>
                    </div>
                    
                    <div class="col-auto">
                        <button type="submit" name="search" value="1" class="btn btn-success">Search</button>
                        <button type="reset" class="btn btn-danger"
                            onclick="javascript: window.location='admin_funds_list.php'">Clear</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container pt-2" id="cust-table">

        <?php
            if(!isset($_GET["search"])){
                $search_query = "SELECT p_id,t_id,p_name,p_amount FROM payment;";
            }else{
                $search_un=$_GET["p_id"];
                $search_hi=$_GET["t_id"];
                $search_hn=$_GET["p_name"];
                $search_hn=$_GET["p_amount"];
                
            }
            $search_result = $mysqli -> query($search_query);
            $search_numrow = $search_result -> num_rows;
            if($search_numrow == 0){
        ?>
        <div class="row">
            <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start">
                <i class="bi bi-x-circle ms-2"></i><span class="ms-2 mt-2">No Payment found!</span>
                <a href="admin_funds_list.php" class="text-white">Clear Search Result</a>
            </div>
        </div>
        <?php } else{ ?>
        <div class="table-responsive">
        <table class="table rounded-5 table-light table-striped table-hover align-middle caption-top mb-5">
            <caption><?php echo $search_numrow;?> user(s) <?php if(isset($_GET["search"])){?><br /><a
                    href="admin_recipient_list.php" class="text-decoration-none text-danger">Clear Search
                    Result</a><?php } ?></caption>
            <thead class="bg-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Amount</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php $i=1; while($row = $search_result -> fetch_array()){ ?>
                <tr>
                    <th><?php echo $i++;?></th>
                    <td><?php echo $row["p_id"];?></td>
                    <td><?php echo $row["t_id"];?></td>
                    
                    
                    <td><?php echo $row["p_name"];?></td>
                    <td><?php echo $row["p_amount"];?></td>
                    
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        <?php }
            $search_result -> free_result();
        ?>
    </div>

    <?php include('admin_footer.php')?>
</body>
</html>