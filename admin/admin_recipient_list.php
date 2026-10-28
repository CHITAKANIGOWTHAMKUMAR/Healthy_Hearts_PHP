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
    <title>Recipient List | HealthyHearts</title>
</head>

<body class="d-flex flex-column h-100">

    <?php include('nav_header_admin.php')?>

    <div class="container p-2 pb-0" id="admin-dashboard">
        <div class="mt-4 border-bottom">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="#" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>


            <h2 class="pt-3 display-6">Recipient List</h2>
            <form class="form-floating mb-3" method="GET" action="admin_recipient_list.php">
                <div class="row g-2">
                    <div class="col">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["firstname"];?>" <?php } ?>>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="healthissue" name="healthissue" placeholder="Healthissue"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["healthissue"];?>" <?php } ?>>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="hospitalname" name="hospitalname" placeholder="Hospitalname"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["hospitalname"];?>" <?php } ?>>
                    </div>
                    <div class="col">
                        <select class="form-select" id="utype" name="ut">
                            <?php if(isset($_GET["search"])){?>
                            <option selected value="">User Type</option>
                            <option value="STD" <?php if($_GET["ut"]=="STD"){ echo "selected";}?>>Student</option>
                            <option value="STF" <?php if($_GET["ut"]=="STF"){ echo "selected";}?>>Faculty Staff</option>
                            <option value="GUE" <?php if($_GET["ut"]=="GUE"){ echo "selected";}?>>Visitor</option>
                            <option value="ADM" <?php if($_GET["ut"]=="ADM"){ echo "selected";}?>>Admin</option>
                            <option value="OTH" <?php if($_GET["ut"]=="OTH"){ echo "selected";}?>>Other</option>
                            <?php }else{ ?>
                            <option selected value="">User Type</option>
                            <option value="STD">Student</option>
                            <option value="STF">Faculty Staff</option>
                            <option value="GUE">Visitor</option>
                            <option value="ADM">Admin</option>
                            <option value="OTH">Other</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="search" value="1" class="btn btn-success">Search</button>
                        <button type="reset" class="btn btn-danger"
                            onclick="javascript: window.location='admin_recipient_list.php'">Clear</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container pt-2" id="cust-table">

        <?php
            if(!isset($_GET["search"])){
                $search_query = "SELECT r_id,firstname,gender,c_type,healthissue,amount_r,mobileno,hospitalname,hospitalno,hospitaladdress FROM recipient;";
            }else{
                $search_un=$_GET["firstname"];
                $search_hi=$_GET["healthissue"];
                $search_hn=$_GET["hospitalname"];
                $search_ut=$_GET["ut"];
                $search_query = "SELECT r_id,firstname,gender,c_type,healthissue,amount_r,mobileno,hospitalname,hospitalno,hospitaladdress FROM recipient
                WHERE firstname LIKE '%{$search_un}%' AND healthissue LIKE '%{$search_hi}%' AND hospitalname LIKE '%{$search_hn}%' AND c_type LIKE '%{$search_ut}%';";
            }
            $search_result = $mysqli -> query($search_query);
            $search_numrow = $search_result -> num_rows;
            if($search_numrow == 0){
        ?>
        <div class="row">
            <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start">
                <i class="bi bi-x-circle ms-2"></i><span class="ms-2 mt-2">No recipient found!</span>
                <a href="admin_user_list.php" class="text-white">Clear Search Result</a>
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
                    <th scope="col">Patient Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Type</th>
                    <th scope="col">Health Issue</th>
                    <th scope="col">Amount in need</th>
                    
                    <th scope="col">Hospital Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; while($row = $search_result -> fetch_array()){ ?>
                <tr>
                    <th><?php echo $i++;?></th>
                    <td><?php echo $row["firstname"];?></td>
                    <td><?php echo $row["gender"];?></td>
                    
                    <td><?php 
                        switch($row["c_type"]){
                            case "STD": echo "Student"; break;
                            case "STF": echo "Faculty Staff"; break;
                            case "GUE": echo "Visitor"; break;
                            case "ADM": echo "Admin"; break;
                            default: echo "Other";
                        }
                    ?>
                    </td>
                    <td><?php echo $row["healthissue"];?></td>
                    <td><?php echo $row["amount_r"];?></td>
                    
                    <td><?php echo $row["hospitalname"];?></td>
                    <td>
                        
                        <a href="admin_recipient_delete.php?r_id=<?php echo $row["r_id"]?>"
                            class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
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