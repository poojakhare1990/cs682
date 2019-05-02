<?php
    require("../../login/connection.php");
    $username = $_GET["username"];
    $oid = $_GET["oid"];
    $bid = $_GET["bid"];
    $fid = $_GET["fid"];
    $fname = $_GET["fname"];
    $question = $_GET["question"];
    $types = $_GET["types"];
    $val = $_GET["val"];
    
    $sql = "DELETE FROM options WHERE oid = $oid and types = '$types' and val = '$val'";
    $res = $conn->prepare($sql);
    $res->execute();
    
    
    echo "<script>alert('Option has been deleted!'); window.location.href = './getOptions.php?username=".$username."&fid=".$fid."&bid=".$bid."&fname=".$fname."&oid=".$oid."&question=".$question."';</script>";
?>
