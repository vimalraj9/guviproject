<?php
require "dbcon.php";

function fetchUser($email){
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    $sql = "SELECT * FROM `signup` WHERE `email` = $email";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        //$contactno=$row["contactno"];
        return $row;
    }

    return false;
}