<?php
include "config.php"; // Config file

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    mysqli_select_db($link , $dbname);
    $delete = "DELETE FROM user WHERE user_id = $user_id";

    $result = mysqli_query($link , $delete);
    header("location: table.php");
} 

?>