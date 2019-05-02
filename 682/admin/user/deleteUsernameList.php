<?php
    require("../../login/connection.php");
    $username = $_GET["username"];
    $id = $_GET["id"];
    $name = $_GET["name"];
    
    $sql = "DELETE FROM employees WHERE id = $id and username = '$name'";
    $res = $conn->prepare($sql);
    $res->execute();
    echo"<script>alert('User has been deleted!'); window.location.href='./employee.php?username=".$username."';</script>";
    ?>
