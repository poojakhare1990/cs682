<?php
    require("../../login/connection.php");
    $username = $_GET["username"];
    $id = $_GET["id"];
    $name = $_GET["name"];
    $manager = $_POST["manager"];
    $technician = $_POST["technician"];
    
    echo "$id<br/>";
    echo "$name<br/>";
    echo "$technician<br/>";
    echo "$manager";
    
//    $sql = "INSERT INTO building(id, name, manager_id, technician_id) VALUES (:id, :name, :manager_id, :technician_id)";
    $sql = "INSERT INTO building(name, manager_id, technician_id) VALUES (:name, :manager_id, :technician_id)";
    $stmt = $conn -> prepare($sql);
//    $stmt -> bindParam(":id", $id);
    $stmt -> bindParam(":name", $name);
    $stmt -> bindParam(":manager_id", $manager);
    $stmt -> bindParam(":technician_id", $technician);
    $stmt -> execute();
    
    echo "<script>alert('Success!');window.location.href='./getBuilding.php?username=".$username."&id=".$id."&name=".$name."';</script>";
    ?>
