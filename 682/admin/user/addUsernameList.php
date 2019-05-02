<?php
    require("../../login/connection.php");
//    $id = $_POST["id"];
    $username = $_GET["username"];
    $Username = $_POST["Username"];
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
    
//    echo "$id<br/>";
//    echo "$name<br/>";
//    echo "$technician<br/>";
//    echo "$manager";
    
    try{
//        $sql = "INSERT INTO empolyees (id, username, password, createAccess, editAccess, changeAccess)VALUES (:id, :username, :password, :createAccess, :editAccess, :changeAccess)";
           $sql = "INSERT INTO employees (username, password, createAccess, editAccess, changeAccess)VALUES (:username, :password, :createAccess, :editAccess, :changeAccess)";
        $stmt = $conn -> prepare($sql);
//        $stmt -> bindParam(":id", $id);
        $stmt -> bindParam(":username", $Username);
        $stmt -> bindParam(":password", $password);
        $stmt -> bindParam(":createAccess", $createAccess);
        $stmt -> bindParam("editAccess", $editAccess);
        $stmt -> bindParam("changeAccess", $changeAccess);
        $stmt -> execute();

        echo "<script>alert('Success!');window.location.href='./employee.php?username=".$username."';</script>";
    }catch(PDOException $e){
        echo "<script>alert('Error!');window.location.href='./employee.php?username=".$username."';</script>";
    }

?>
