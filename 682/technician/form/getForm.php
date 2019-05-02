<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $fid = $_GET["fid"];
    $fname = $_GET["fname"];
    $bid = $_GET["bid"];
    ?>
<!DOCTYPE html>

<html>
<head>
<title>Technician Page</title>
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
    echo "<button type='button' onclick='window.location.href=\"./buildingForm.php?username=".$username."&name=".$fname."&id=".$bid."\"'><font size='5em'>BACK</font></button>";
    echo "<button type='button' onclick='window.location.href=\"./addQuestion.php?username=".$username."&fid=".$fid."&fname=".$fname."&bid=".$bid."\"'><font size='5em'>ADD QUESTION</font></button>";
    ?>
<center><table border="1" width="900">
<caption><font color="white" size="10em"><b>QUESTION</b></font></caption>
<tr>

<th><font color="white" size="5em">Question</font></th>
<th></th>
<th></th>
</tr>
<?php
    $sql = "SELECT* FROM question where fid = $fid";
    $res = $conn->prepare($sql);
    $res->execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);
    for($i = 0; $i < count($result); $i++)
    {
        $oid = $result[$i]["oid"];
        $question = $result[$i]["question"];
        
        echo "<tr>";
//        echo "<td><font color='white' size='5em'>".$oid."</font></td>";
        echo "<td><font color='white' size='5em'>".$question."</font></td>";
        
        echo "<td><button type='button' onclick='window.location.href=\"./getOptions.php?username=".$username."&oid=".$oid."&fname=".$fname."&question=".$question."&fid=".$fid."&bid=".$bid."\"'><font size='3em'>VIEW OPTIONS</font></button></td>";
        echo "<td><button type='button' onclick='window.location.href=\"./deleteQuestion.php?username=".$username."&oid=".$oid."&fname=".$fname."&question=".$question."&fid=".$fid."&bid=".$bid."\"'><font size='3em'>DELETE QUESTION</font></button></td>";
        
        
//        echo "<td><a href='./getOptions.php?username=".$username."&oid=".$oid."&fname=".$fname."&question=".$question."&fid=".$fid."&bid=".$bid."'>ENTER</a></td>";
//        echo "<td><a href='./deleteQuestion.php?username=".$username."&oid=".$oid."&fname=".$fname."&question=".$question."&fid=".$fid."&bid=".$bid."'>DELETE</a></td>";
        echo "</tr>";
    }
    ?>
</table></center>
</div>
</div>
</body>
</html>



