<?php
    session_start();
    date_default_timezone_set('Asia/Kolkata');
    include('conn_db.php');
    
    
    
    
            $t_id = $_POST["t_id"];
            $cftid = $_POST["cftid"];
            $p_amount = $_POST["p_amount"];
            $p_name=$_POST["p_name"];

            if($t_id!=$cftid){
                ?>
                <script>
                    alert('Your transaction id  is not match.\nPlease enter it again.');
                    history.back();
                </script>
                <?php
                exit(1);
            }
    
    
    
    
    
            $payment_query = "INSERT INTO payment (p_name,t_id,p_amount) VALUES ('$p_name','$t_id','$p_amount');";
            $result = $mysqli -> query($payment_query);
            
            if($result){
                header("location: donate_success.php");
            }else{
                header("location: donate_fail.php?err={$mysqli -> errno}");
            }
            
            
               
    
    
?>