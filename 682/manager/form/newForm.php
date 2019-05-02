<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $bid = $_GET["bid"];
    $bname = $_GET["bname"];
    $fname = $_POST["formName"];
    
    $sql = "INSERT INTO form (fname, bid)VALUES (:fname, :bid)";
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":fname", $fname);
    $stmt -> bindParam(":bid", $bid);
    $stmt -> execute();

    echo "<script>alert('New Form has been added!');</script>";
    echo "<script>window.location.href = './buildingForm.php?username=".$username."&id=".$bid."&name=".$fname."';</script>";
?>
