//<!DOCTYPE HTML>
//<html>
//<head>
//    <title>Welcome</title>
//</head>
//<body>
//    <?php
//    echo "Welcome";?>
//</body>
//</html>
<?php
    ob_start();
    $host="localhost"; // Host name
    $username=""; // Mysql username
    $password=""; // Mysql password
    $db_name=""; // Database name
    $tbl_name=""; // Table name

    // Connect to server and select databse.
//    mysql_connect("$host", "$username", "$password") or die(mysql_error());
    try{
//        $conn = mysql_connect("$host", "$username", "$password");
        $conn = new PDO("mysql:host=$host;", $username, $password);
//        echo "Connected to MySQL! <br/>";
    }catch(PDOException $e){
        echo $e -> getMessage();
    }
    if(!$conn){die("Could not connect!");}

    //?????
//    mysql_select_db("$db_name") or die(mysql_error());
//    echo "Connected to Database<br />";
    // Check $username and $password
    /*
     if(empty($_POST['username']))
     {
     echo "UserName/Password is empty!";
     return false;
     }
     if(empty($_POST['password']))
     {
     echo "Password is empty!";
     return false;
     }
     */

    // Define $username and $password
    $username=$_POST["Username"];
    $password=md5($_POST["Password"]);
    
    echo "<br>";
    echo "$username";
    echo "<br>";
    echo "$password";
    

    // To protect MySQL injection (more detail about MySQL injection)
    $username = stripslashes($username);
    $password = stripslashes($password);
//    $username = mysql_real_escape_string($username);
//    $password = mysql_real_escape_string($password);
    $conn -> quote($username);
    $conn -> quote($password);

    $sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
//    $result=mysql_query($sql);
    $result = $conn -> query($sql);
    
    // Mysql_num_row is counting table row
    $res = $conn -> query("SELECT COUNT(*) FROM LoginList");
    $count = $res -> rowCount();
//    $count=mysql_num_rows($result);
    // If result matched $username and $password, table row must be 1 row
    if ($count==1) {
        echo "Success! $count";
    } else {
        echo "Unsuccessful! $count";
    }

    $conn = null;
    ob_end_flush();
    ?>


