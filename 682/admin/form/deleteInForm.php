<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $fid = $_GET["fid"];
    $fname = $_GET["fname"];
    $bid = $_GET["bid"];
    
    $sql = "DELETE FROM form WHERE fid = $fid and fname = '$fname' and bid = $bid";
    $res = $conn->prepare($sql);
    $res->execute();
    
    $sql = "DELETE FROM question WHERE fid = $fid";
    $res = $conn->prepare($sql);
    $res->execute();
    
    $sql = "DELETE FROM options WHERE fid = $fid";
    $res = $conn->prepare($sql);
    $res->execute();
    
    echo "<script>alert(\"Form has been deleted!\"); window.location.href = './form.php?username=".$username."&id=".$bid."&name=".$fname."';</script>";
//    echo "<script>alert(\"Form has been deleted!\"); window.location.href = './buildingForm.php?username=".$username."&id=".$bid."&name=".$bname."';</script>";
    
    ?>
