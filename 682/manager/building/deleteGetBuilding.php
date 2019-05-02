<?php
    require("../../login/connection.php");
    $id = $_GET["id"];
    $name = $_GET["name"];
    $manager = $_GET["manager"];
    $technician = $_GET["technician"];
    $username = $_GET["username"];
    
    $sql = "SELECT * FROM building WHERE id = $id and name = '$name' and manager = '$username' and technician = '$technician'";
    $res = $conn->prepare($sql);
    $res->execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);
    if(count($result) == 0){
        echo"<script>alert('Please delete your own table!');window.location.href='./getBuilding.php?username=".$username."&id=".$id."&name=".$name."';</script>";
    }else{
        $sql = "DELETE FROM building WHERE id = $id and name = '$name' and manager = '$username' and technician = '$technician'";
        $res = $conn->prepare($sql);
        $res->execute();
        echo"<script>alert('Table has been deleted!'); window.location.href='./getBuilding.php?username=".$username."&id=".$id."&name=".$name."';</script>";
    }
    ?>
