<?php
    include("../../login/connection.php");
    $result = $_GET["result"];
    $jsonData = $_GET["jsonData"];
    
    $obj = json_decode($jsonData);
    $username =  $obj -> username;
    $fid = $obj -> fid;
    $fname = $obj -> fname;
    $bid = $obj -> bid;
    $manager = $obj -> manager;
    $technician = $obj -> technician;
    
    $submitData = json_decode($result, true);
    foreach($submitData as $v){
        $str = "$v[name]";
        $value = "$v[value]";
        $oid = "";
        for($i = 0; $i < strlen($str); $i++){
            if(is_numeric($str[$i])){
                $oid .= $str[$i];
            }
        }
        
        $type = str_replace($oid, "", $str);
        
        $sql = "INSERT INTO records (oid, types, fid, val, manager, technician, submit)VALUES (:oid, :types, :fid, :val, :manager, :technician, :submit)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bindParam(":oid", $oid);
        $stmt -> bindParam(":fid", $fid);
        $stmt -> bindParam(":val", $value);
        $stmt -> bindParam(":manager", $manager);
        $stmt -> bindParam(":technician", $technician);
        $stmt -> bindParam(":submit", $manager);
        
        if($type == "plaintext"){
            $tmp = "PLAIN TEXT";
            $stmt -> bindParam(":types", $tmp);
        }elseif($type == "radiobutton"){
            $tmp = "RADIO BUTTON";
            $stmt -> bindParam(":types", $tmp);
        }else{
            $tmp = "CHECK BOX";
            $stmt -> bindParam(":types", $tmp);
        }
        
        $stmt -> execute();
    }
    
    
    echo "<script>window.location.href = './showResult.php?username=".$username."&fid=".$fid."&bid=".$bid."&fname=".$fname."&manager=".$manager."&technician=".$technician."';</script>";
    
    ?>
