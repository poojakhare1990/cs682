<?php
    require("../../login/connection.php");
    $id = $_GET["id"];
    $name = $_GET["name"];
    $manager = $_GET["username"];
    $technician = $_POST["technician"];
    

    $sql = "INSERT INTO building(id, name, manager, technician) VALUES (:id, :name, :manager, :technician)";
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":id", $id);
    $stmt -> bindParam(":name", $name);
    $stmt -> bindParam(":manager", $manager);
    $stmt -> bindParam(":technician", $technician);
    $stmt -> execute();

    echo "<script>alert('Success!');window.location.href='./getBuilding.php?username=".$manager."&id=".$id."&name=".$name."';</script>";
    ?>
