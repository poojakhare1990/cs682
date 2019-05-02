<?php
    require("../../login/connection.php");
//    $id = $_POST["id"];
    $username = $_GET["username"];
    $name = $_POST["building"];
    $manager = $_POST["manager"];
    $technician = $_POST["technician"];
    
    echo "$name<br/>";
    echo "$technician<br/>";
    echo "$manager";
    
//    $sql = "INSERT INTO building(id, name, manager, technician) VALUES (:id, :name, :manager, :technician)";
    $sql = "INSERT INTO building(name, manager_id, technician_id) VALUES (:name, :manager_id, :technician_id)";
    $stmt = $conn -> prepare($sql);
//    $stmt -> bindParam(":id", $id);
    $stmt -> bindParam(":name", $name);
    $stmt -> bindParam(":manager_id", $manager);
    $stmt -> bindParam(":technician_id", $technician);
    $stmt -> execute();
        
    echo"<script>alert('Building has been added!'); window.location.href = '../admin.php?username=".$username."';</script>";
?>
