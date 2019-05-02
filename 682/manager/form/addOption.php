<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $bid = $_GET["bid"];
    $fid = $_GET["fid"];
    $oid = $_GET["oid"];
    $fname = $_GET["fname"];
    $type = $_GET["type"];
    $option = $_POST["option"];
    
//    echo "$username<br/>$bid<br/>$fid</br>$oid</br>$fname<br/>$type</br>$option</br>";
    
    $display = true;
    $sql = "INSERT INTO options (fid, oid, types, val, display)VALUES (:fid, :oid, :types, :val, :display)";
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":fid", $fid);
    $stmt -> bindParam(":oid", $oid);
    $stmt -> bindParam(":types", $type);
    $stmt -> bindParam(":val", $option);
    $stmt -> bindParam(":display", $display);
    $stmt -> execute();
    
    echo "<script>alert('Options has been added!'); window.location.href = './addRadioButton.php?username=".$username."&fid=".$fid."&bid=".$bid."&fname=".$fname."&oid=".$oid."&type=".$type."';</script>";
?>
