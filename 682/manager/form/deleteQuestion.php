<?php
    require("../../login/connection.php");
    $username = $_GET["username"];
    $oid = $_GET["oid"];
    $bid = $_GET["bid"];
    $fid = $_GET["fid"];
    $fname = $_GET["fname"];
    $question = $_GET["question"];
    
    $sql = "DELETE FROM question WHERE oid = $oid and question = '$question'";
    $res = $conn->prepare($sql);
    $res->execute();
    
    $sql = "DELETE FROM options WHERE oid = $oid";
    $res = $conn->prepare($sql);
    $res->execute();
    
    
    echo "<script>alert('Question has been deleted!'); window.location.href = './getForm.php?username=".$username."&fid=".$fid."&bid=".$bid."&fname=".$fname."';</script>";
?>
