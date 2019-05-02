<?php
    require("../login/connection.php");

    $sql = "SELECT * FROM login";
    $res = $conn -> prepare($sql);
    $res -> execute();
    $result = $res -> fetchALL(PDO::FETCH_ASSOC);
    try{
        for($i = 0; $i < count($result); $i++){
            $id = $result[$i]["id"];
            $username = $result[$i]["username"];
            echo "<tr>";
            echo "<td>$id</td>";
            echo "\t";
            echo "<td>$username</td>";
            echo "</tr>";
            echo "<br/>";
        }
    }catch(PDOException $e){
        die("Error!: " . $e -> getMessage() . "<br/>");
    }
    
//    $host="localhost";
//    $username="form_user";
//    $password="pa55word";
//    $conn = new PDO("mysql:host=$host;dbname=formdb", $username, $password);
//    $sql = "SELECT* FROM login";
//    $res = $conn::prepare($sql);
//    $res::execute();
//    $result = $res::fetchALL(PDO::FETCH_ASSOC);
//    for($i = 0; $i < $count($result); $i++)
//    {
//        $id = $result[$i]["id"];
//        $username = $result[$i]["username"];
//        echo "<tr>";
//        echo "<td><font color='white' size='5em'>".$id."</font></td>";
//        echo "<td><font color='white' size='5em'>".$username."</font></td>";
//        echo "</tr>";
//    }

?>
