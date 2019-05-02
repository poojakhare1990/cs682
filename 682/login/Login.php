<?php
    require("connection.php");

    $username=$_POST["Username"];
    $password=$_POST["Password"];

    $sql="SELECT COUNT(*) FROM login WHERE username='$username' AND password='$password'";
    $res = $conn -> prepare($sql);
    $res -> execute();
    $count = $res -> fetchColumn();

    if($count == 1) {
        echo "<script> window.location.href = '../admin/admin.php';</script>";
    } else if($count == 0){
        echo"<script>alert('Wrong Username or Password!');history.back(-1);</script>";
    } else{
        echo"<script>alert('Wrong Input');history.back(-1);</script>";
    }

    $conn = null;
    ?>


