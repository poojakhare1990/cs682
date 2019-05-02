<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $oid = $_GET["oid"];
    $fid = $_GET["fid"];
    $bid = $_GET["bid"];
    $fname = $_GET["fname"];
    $question = $_GET["question"];
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
    echo"<li><a href=\"../user/employee.php?username=".$username."\"><font color=\"white\">Employee</font></a></li>";
    echo"<li><a href=\"../../index.html\"><font color=\"white\">Logout</font></a></li>";
    ?>
</ul>
</div>
<div class="body">
<?php
    echo "<button type='button' onclick='window.location.href=\"./getForm.php?username=".$username."&fid=".$fid."&fname=".$fname."&bid=".$bid."\"'><font size='5em'>BACK</font></button>";
    ?>
<center><table border="1" width="900">
<caption><font color="white" size="10em"><b>OPTIONS</b></font></caption>
<tr>

<th><font color="white" size="5em">Type</font></th>
<th><font color="white" size="5em">Value</font></th>
<th></th>
</tr>
<?php
    $sql = "SELECT* FROM options where oid = $oid";
    $res = $conn->prepare($sql);
    $res->execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);
    for($i = 0; $i < count($result); $i++)
    {
        $oid = $result[$i]["oid"];
        $types = $result[$i]["types"];
        $val = $result[$i]["val"];
        $display = $result[$i]["display"];
        
        echo "<tr>";
//        echo "<td><font color='white' size='5em'>".$oid."</font></td>";
        echo "<td><font color='white' size='5em'>".$types."</font></td>";
        echo "<td><font color='white' size='5em'>".$val."</font></td>";
        
        echo "<td><button type='button' onclick='window.location.href=\"./deleteOption.php?username=".$username."&oid=".$oid."&fname=".$fname."&question=".$question."&fid=".$fid."&bid=".$bid."&types=".$types."&val=".$val."\"'><font size='3em'>DELETE OPTION</font></button></td>";
        
//        echo "<td><a href='./deleteOption.php?username=".$username."&oid=".$oid."&fname=".$fname."&question=".$question."&fid=".$fid."&bid=".$bid."&types=".$types."&val=".$val."'>DELETE</a></td>";
        echo "</tr>";
    }
    ?>
</table></center>
</div>
</div>
</body>
</html>



