<?php
/**
 * Created by PhpStorm.
 * User: tey_k_000
 * Date: 3/6/2017
 * Time: 10:46 AM
 */ include_once ("../model/connect.php");
    function get_users($conn)
    {
        global $conn;
        $users = array();
        $sql= "SELECT * FROM members";
        $res = $conn->query($sql);
        $i=0;
        while ($row = $res->fetch(PDO::FETCH_ASSOC))
        {
            $users[$i] = array($row['name'],$row['surname'],$row['username'],$row['passwd'],$row['typeUser'],$row['id']);
            $i++;
        }
        return $users;
    }
    function get_user($id,$conn){
        global $id;
        $user = array();
        $sql= "SELECT * FROM members WHERE id =".$id;
        $res = $conn->query($sql);
        $i=0;
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $user = array($row['name'],$row['surname'],$row['username'],$row['passwd'],$row['typeUser'],$row['id']);
            $i++;
        }
        return $user;
    }
    function delete_user($id,$conn){
        $sql = "DELETE FROM members WHERE id=".$id;
        $res = $conn -> prepare($sql);
        $res -> execute();
        header("location: ../view/manage_user.php");
    }
    function update_user($u,$conn){
        print_r($u);
        $sql = "UPDATE members SET name = '$u[0]',surname ='$u[1]',username='$u[2]',passwd = '$u[3]' where id='$u[5]'" ;
        $res = $conn -> prepare($sql);
        $res -> execute();
        header("location: ../view/manage_user.php");
    }
show_source("../controller/db_user.inc.php");
?>