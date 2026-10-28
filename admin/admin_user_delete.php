<?php
    session_start();
    if($_SESSION["utype"]!="ADMIN"){
        header("location: ../restricted.php");
        exit(1);
    }
    include('../conn_db.php');
    $c_id = $_GET["c_id"];

    $delete_query = "DELETE FROM user WHERE c_id = '{$c_id}';";
    $delete_result = $mysqli -> query($delete_query);

    if($delete_result){
        header("location: admin_user_list.php?del_usr=1");
    }else{
        header("location: admin_user_list.php?del_usr=0");
    }

?>