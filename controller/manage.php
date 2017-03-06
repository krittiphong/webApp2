<?php
/**
 * Created by PhpStorm.
 * User: tey_k_000
 * Date: 3/6/2017
 * Time: 10:50 AM
 */ include_once ("../model/connect.php");
    include_once ("../model/db_user.inc.php");
    if(isset($_POST["delete"])) {
        $id = $_POST["delete"];
        echo $id;
        $de = delete_user($id,$conn);
    }
    if(isset($_POST["save"])){
        $user_update = array();
        $user_update = $_POST["user"];
        update_user($user_update,$conn);
        //header("location: ../view/manage_user.php");
    }
    echo "5555";
    echo "5555";
echo "5555ddd";
echo "5555";
?>