<?php
    require("connection.php");

    $username=$_POST["Username"];
    $InputPassword=$_POST["Password"];

    $sql="SELECT * FROM employees WHERE username='$username'";
    $res = $conn -> prepare($sql);
    $res -> execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);

    if(count($result) == 0){
        echo"<script>alert('Wrong Username or Password!');history.back(-1);</script>";
    }
    else if(sha1($InputPassword) != $result[0]["password"]){
        echo"<script>alert('Wrong Password');history.back(-1);</script>";
    }
    else if(count($result) == 1 ){
        $username = $result[0]["username"];
        $createAccess = $result[0]["createAccess"];
        $editAccess = $result[0]["editAccess"];
        $changeAccess = $result[0]["changeAccess"];
        
        if($createAccess == 1 && $editAccess == 1 && $changeAccess == 1){
            echo "<script> window.location.href = '../admin/admin.php?username=".$username."';</script>";
        }else if($createAccess == 0 && $editAccess == 1 && $changeAccess == 1){
            echo "<script> window.location.href = '../manager/manager.php?username=".$username."';</script>";
        }
        else{
            echo "<script> window.location.href = '../technician/technician.php?username=".$username."';</script>";
        }
    }else{
        echo"<script>alert('Wrong Input');history.back(-1);</script>";
    }
    
    $conn = null;
    ?>


