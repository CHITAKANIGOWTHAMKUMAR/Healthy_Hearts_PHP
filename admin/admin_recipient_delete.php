<?php
    session_start();
    if($_SESSION["utype"]!="ADMIN"){
        header("location: ../restricted.php");
        exit(1);
    }
    include('../conn_db.php');
    $r_id = $_GET["r_id"];

    $delete_query = "DELETE FROM recipient WHERE r_id = '{$r_id}';";
    $delete_result = $mysqli -> query($delete_query);

    if($delete_result){
        header("location: admin_recipient_list.php?del_rcp=1");
    }else{
        header("location: admin_recipient_list.php?del_rcp=0");
    }

?>