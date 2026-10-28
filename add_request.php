<?php
     session_start();
    //For inserting new customer to database
    include('conn_db.php');
    
   
    
    
        
        $firstname = $_POST["firstname"];
        
        $gender = $_POST["gender"];
        
        $c_type = $_POST["c_type"];
        $healthissue = $_POST["healthissue"];
        $amount_r = $_POST["amount_r"];
        $mobileno = $_POST["mobileno"];
        $hospitalname = $_POST["hospitalname"];
        $hospitalno = $_POST["hospitalno"];
        $hospitaladdress = $_POST["hospitaladdress"];

        

        if($gender == "-" || $type == "-"){
            ?>
            <script>
                alert('You didn\'t select your gender or role yet.\nPlease select again!');
                history.back();
            </script>
            <?php
            exit(1);
        }

        //Check for duplicating username
        
        
        //Check for duplicating email
        


        $query = "INSERT INTO recipient (firstname,gender,c_type,healthissue,amount_r,mobileno,hospitalname,hospitalno,hospitaladdress)
        VALUES ('$firstname','$gender','$c_type','$healthissue','$amount_r','$mobileno','$hospitalname','$hospitalno','$hospitaladdress');";

        $result = $mysqli -> query($query);

        if($result){
            header("location: recipient_success.php");
        }else{
            header("location: recipient_fail.php?err={$mysqli -> errno}");
        }
    
?>