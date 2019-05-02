<?php
    require("../../login/connection.php");
    $username = $_GET["username"];
    $id = $_GET["id"];
    $name = $_GET["name"];
    $manager = $_GET["manager"];
    $technician = $_GET["technician"];
    
    $sql = "DELETE FROM building WHERE id = $id and name = '$name' and manager_id = '$manager' and technician_id = '$technician'";
    $res = $conn->prepare($sql);
    $res->execute();
    echo"<script>alert('Building has been deleted!'); window.location.href = '../admin.php?username=".$username."';</script>";
?>
