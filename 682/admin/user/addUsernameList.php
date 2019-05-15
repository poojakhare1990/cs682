<?php
    require("../../login/connection.php");

    $username = $_GET["username"];
    $Username = $_POST["Username"];
    $password = $_POST["Password"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $role = $_POST["Role"];
    $createAccess = false;
    $editAccess = false;
    $changeAccess = false;
    
    $password = sha1($password);
    
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
    
    try{
        $sql = "INSERT INTO employees (username, password, createAccess, editAccess, changeAccess, firstName, lastName, email, phoneNumber)VALUES (:username, :password, :createAccess, :editAccess, :changeAccess, :firstName, :lastName, :email, :phoneNumber)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bindParam(":username", $Username);
        $stmt -> bindParam(":password", $password);
        $stmt -> bindParam(":createAccess", $createAccess);
        $stmt -> bindParam("editAccess", $editAccess);
        $stmt -> bindParam("changeAccess", $changeAccess);
        $stmt -> bindParam("firstName", $firstName);
        $stmt -> bindParam("lastName", $lastName);
        $stmt -> bindParam("email", $email);
        $stmt -> bindParam("phoneNumber", $phoneNumber);
        $stmt -> execute();

        echo "<script>alert('Success!');window.location.href='./employee.php?username=".$username."';</script>";
    }catch(PDOException $e){
        echo "<script>alert('Error!');window.location.href='./employee.php?username=".$username."';</script>";
    }

?>
