<?php
    require("../login/connection.php");
    $id = $_GET["id"];
    $name = $_GET["name"];
    
    $sql = "DELETE FROM login WHERE id = $id and username = '$name'";
    $res = $conn->prepare($sql);
    $res->execute();
    echo"<script>alert('User has been deleted!'); window.location.href='./employee.php';</script>";
    ?>
