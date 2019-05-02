<?php
    require("connection.php");
//    // Define $username and $password
    $username=$_POST["Username"];
    $password=md5($_POST["Password"]);
    

    // To protect MySQL injection (more detail about MySQL injection)
    $username = stripslashes($username);
    $password = stripslashes($password);

    $conn -> quote($username);
    $conn -> quote($password);


    $sql="SELECT COUNT(*) FROM login WHERE username='$username'";
    $res = $conn -> prepare($sql);
    $res -> execute();
    $count = $res -> fetchColumn();

    // If result matched $username and $password, table row must be 1 row
    if($count == 1) {
        echo "Success!";
    } else if($count == 0){
        echo "User not exists!";
    } else{
        echo "Error! <br/>COUNT:$count<br/>";
    }

    $conn = null;
    ?>


