<?php
    require("../login/connection.php");
    $id = $_POST["Id"];
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $role = $_POST["Role"];
    $createAccess = false;
    $editAccess = false;
    $changeAccess = false;
    
    if($role == "Admin"){
        global $createAccess, $editAccess, $changeAccess;
        $createAccess = true;
        $editAccess = true;
        $changeAccess = true;
    }elseif($role == "Manager"){
        global $createAccess, $editAccess, $changeAccess;
        $createAccess = false;
        $editAccess = true;
        $changeAccess = true;
    }else{
        global $createAccess, $editAccess, $changeAccess;
        $createAccess = false;
        $editAccess = false;
        $changeAccess = true;
    }
    
    
//    echo "Register<br/>";
//    echo "$id<br/>";
//    echo "$username<br/>";
//    echo "$password<br/>";
//    echo "$role<br/>";
    
    try{
        $sql = "INSERT INTO login (id, username, password, createAccess, editAccess, changeAccess)VALUES (:id, :username, :password, :createAccess, :editAccess, :changeAccess)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bindParam(":id", $id);
        $stmt -> bindParam(":username", $username);
        $stmt -> bindParam(":password", $password);
        $stmt -> bindParam(":createAccess", $createAccess);
        $stmt -> bindParam("editAccess", $editAccess);
        $stmt -> bindParam("changeAccess", $changeAccess);
        $stmt -> execute();
        
//        echo "Insert Success!<br/>";
        echo "<script>alert('Success!');window.location.href='../index.html';</script>";
    }catch(PDOException $e){
        echo "<script>alert('Error!');window.location.href='../employee.php';</script>";
    }

?>
