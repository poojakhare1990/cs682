<?php
    $host="localhost"; // Host name
    $username="form_user"; // Mysql username
    $password="pa55word"; // Mysql password
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    // Connect to server and select databse.
    try{
        $conn = new PDO("mysql:host=$host;dbname=formdb", $username, $password, $options);
        echo "Connected to MySQL! <br/>";
    }catch(PDOException $e){
        echo $e -> getMessage();
    }
    if(!$conn){die("Could not connect!");}
    
    echo "<br/>";
//    echo "welkhfasdf";
    echo "<br/>";
    

?>
