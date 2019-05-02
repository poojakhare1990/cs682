<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $bid = $_GET["bid"];
    $fid = $_GET["fid"];
    $fname = $_GET["fname"];
    $question = $_POST["question"];
    $type = $_POST["Type"];
    
    
//    echo "$username<br/>$bid<br/>$fid</br>$fname<br/>$question</br>$type<br/>";
    
    $sql = "INSERT INTO question (fid, question, property)VALUES (:fid, :question, :property)";
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":fid", $fid);
    $stmt -> bindParam(":question", $question);
    $stmt -> bindParam(":property", $type);
    $stmt -> execute();
    
    $sql = "SELECT * FROM question WHERE fid = $fid and question = '$question'";
    $res = $conn -> prepare($sql);
    $res->execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);
    $oid = $result[0]["oid"];
    
    if($type == "PLAIN TEXT"){
        $tmp = "plain text";
        $display = true;
        $sql = "INSERT INTO options (oid, types, val, display)VALUES (:oid, :types, :val, :display)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bindParam(":oid", $oid);
        $stmt -> bindParam(":types", $type);
        $stmt -> bindParam(":val", $tmp);
        $stmt -> bindParam(":display", $display);
        $stmt -> execute();

        echo "<script>alert('New Plain text has been added!');</script>";
        echo "<script>window.location.href = './getForm.php?username=".$username."&fid=".$fid."&bid=".$bid."&fname=".$fname."';</script>";
    }elseif($type == "RADIO BUTTON"){
        echo "<script>window.location.href = './addRadioButton.php?username=".$username."&fid=".$fid."&bid=".$bid."&fname=".$fname."&oid=".$oid."&type=".$type."';</script>";
    }else{
        echo "<script>window.location.href = './addCheckBox.php?username=".$username."&fid=".$fid."&bid=".$bid."&fname=".$fname."&oid=".$oid."&type=".$type."';</script>";
    }
    
//    echo "$id<br/>$name</br>$question</br>$type</br>";
?>
