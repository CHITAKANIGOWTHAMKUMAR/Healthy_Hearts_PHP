<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); include('head.php');?>
    <meta charset="UTF-8">
       
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
    

    <title>Donation Request | HealthyHearts</title>
</head>

<body class="d-flex flex-column">
    <header class="navbar navbar-light fixed-top bg-light shadow-sm mb-auto">
        <div class="container-fluid mx-4">
            <a href="index.php">
            <img src="img/Black logo - no background.png" width="125" class="me-2" alt="HealthyHearts Logo">
            </a>
        </div>
    </header>
    <div class="container mt-4"></div>
    <div class="container form-signin mt-auto">
        <a class="nav nav-item text-decoration-none text-muted" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <form method="POST" action="add_request.php" class="form-floating">
            <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-person-fill text-success me-2"></i>Patient Details</h2>
            
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname"
                    required>
                <label for="firstname">Patient Name</label>
            </div>
            <div class="form-floating">
                <select class="form-select mb-2" id="gender" name="gender">
                    <option selected value="-">---</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
                <label for="gender"> Gender</label>
            </div>
            <div class="form-floating">
                <select class="form-select mb-2" id="c_type" name="c_type">
                    <option selected value="-">---</option>
                    <option value="STD">Student</option>
                    <option value="STF">Faculty Staff</option>
                    <option value="GUE">Visitor</option>
                    <option value="OTH">Other</option>
                </select>
                <label for="gender">Your role</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="healthissue" placeholder="Health Issue" name="healthissue"
                    required>
                <label for="healthissue">Health Issue</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="amount_r" placeholder="amount_r" name="amount_r"
                    required>
                <label for="amount_r">Donation Amount to be requested</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="mobileno" placeholder="mobileno" name="mobileno"
                    required>
                <label for="mobileno"> Your Mobile Number</label>
            </div>
            <div class="form-floating mb-2 ">
                <input type="text" class="form-control" id="hospitalname" placeholder="hospitalname" name="hospitalname"
                    required>
                <label for="hospitalname" class="text-dark">Hospital Name</label>
            </div>
            <div class="form-floating mb-2 ">
                <input type="text" class="form-control" id="hospitalno" placeholder="hospitalno" name="hospitalno"
                    required>
                <label for="hospitalno" class="text-dark">Hospital Contact Number</label>
            </div>
            <div class="form-floating mb-2 ">
                <input type="text" class="form-control" id="hospitaladdress" placeholder="hospitaladdress" name="hospitaladdress"
                    required>
                <label for="hospitaladdress" class="text-dark">Hospital Address</label>
            </div>
            
            
           
            
            <div class="form-floating">
                <div class="mb-2 form-check">
                    <input type="checkbox" class="form-check-input " id="tandc" name="tandc" required>
                    <label class="form-check-label small" for="tandc">I agree to the terms and conditions and the
                        privacy policy</label>
                </div>
            </div>
            <button class="w-100 btn btn-success mb-3" type="submit">Submit</button>
        </form>
    </div>
    <div class="container mt-4"></div>
    <?php include('footer.php')?>
</body>

</html>
