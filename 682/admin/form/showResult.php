<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $bid = $_GET["bid"];
    $fid = $_GET["fid"];
    $fname = $_GET["fname"];
    $manager = $_GET["manager"];
    $technician = $_GET["technician"];
    ?>
<!DOCTYPE html>

<html>
<head>
<title>Admin Page</title>
<link rel="stylesheet" href="../../css/style2.css" type="text/css" />
<style>
body{
background: url(../../images/banner.jpg)repeat;
padding:10px 0px 30px 0px;
    overflow-x:hidden;
    overflow-y:auto;
}
</style>
<script src="../../js/add.js"></script>
</head>
<body>
<div class="page">
<div class="header">
<ul>
<?php
    echo"<li><a href=\"../admin.php?username=".$username."\"><font color=\"white\">Home</font></a></li>";
    echo"<li><a href=\"./form.php?username=".$username."\"><font color=\"white\">Form</font></a></li>";
    echo"<li><a href=\"../../user/employee.php?username=".$username."\"><font color=\"white\">Employee</font></a></li>";
    echo"<li><a href=\"../../index.html\"><font color=\"white\">Logout</font></a></li>";
    ?>
</ul>
</div>
<div class="body">
<?php
    echo "<button type='button' onclick='window.location.href=\"./edit.php?username=".$username."&name=".$fname."&id=".$bid."&manager=".$manager."&technician=".$technician."\"'><font size='5em'>BACK</font></button>";
    ?>
<center>
<caption><font color="white" size="10em"><b>RESULT</b></font></caption><br/>
<?php
    echo "<table border=\"1\" width=\"900\">";
    
    $sql = "SELECT distinct(q.question), q.oid FROM question q, records r  WHERE q.oid = r.oid and q.fid = $fid";
    $res = $conn->prepare($sql);
    $res->execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);
    for($i = 0; $i < count($result); $i++)
    {
        $question = $result[$i]["question"];
        $oid = $result[$i]["oid"];
        echo "<tr>";
        echo "<td><font color='white' size='5em'>$question</font></td>";
        
        echo "<td>";
        $query = "SELECT* FROM records WHERE oid = $oid and fid = $fid and manager = '$manager' and technician = '$technician'";
        $run = $conn->prepare($query);
        $run->execute();
        $end = $run->fetchALL(PDO::FETCH_ASSOC);
        for($j = 0; $j < count($end); $j++){
            $value = $end[$j]["val"];
            echo "<font color='white' size='5em'>$value\t</font>";
        }
        echo "</td>";
        echo "</tr>";
    }
    ?>
</center>
</div>
</div>
</body>
</html>



