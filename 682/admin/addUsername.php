<?php
    require("../login/connection.php");
    $id = $_GET["id"];
    $name = $_GET["name"];
    $manager = $_POST["manager"];
    $technician = $_POST["technician"];
    
    echo "$id<br/>";
    echo "$name<br/>";
    echo "$technician<br/>";
    echo "$manager";
    
    $sql = "INSERT INTO building(id, name, manager, technician) VALUES (:id, :name, :manager, :technician)";
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":id", $id);
    $stmt -> bindParam(":name", $name);
    $stmt -> bindParam(":manager", $manager);
    $stmt -> bindParam(":technician", $technician);
    $stmt -> execute();
    
    echo "<script>alert('Success!');window.location.href='./get.php?id=".$id."&name=".$name."';</script>";
    ?>
