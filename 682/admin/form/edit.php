<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $bid = $_GET["id"];
    $bname = $_GET["name"];
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
<div id="featured">
<?php
    echo "<button type='button' onclick='window.location.href=\"../building/getBuilding.php?username=".$username."&name=".$bname."&id=".$bid."\"'><font size='5em'>BACK</font></button>";
    ?>
<center><table border="1" width="900">
<caption><font color="white" size="10em"><b>FORM LIST</b></font></caption>
<tr>
<th><font color="white" size="5em">ID</font></th>
<th><font color="white" size="5em">Name</font></th>
<th><font color="white" size="5em">Building ID</font></th>
<th></th>
</tr>
<?php
    $sql = "SELECT* FROM form WHERE bid = '$bid'";
    $res = $conn->prepare($sql);
    $res->execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);
    for($i = 0; $i < count($result); $i++)
    {
        $fid = $result[$i]["fid"];
        $fname = $result[$i]["fname"];
        $bid = $result[$i]["bid"];
        
        echo "<tr>";
        echo "<td><font color='white' size='5em'>".$fid."</font></td>";
        echo "<td><font color='white' size='5em'>".$fname."</font></td>";
        echo "<td><font color='white' size='5em'>".$bid."</font></td>";
        echo "<td><a href='./getQuestion.php?username=".$username."&fid=".$fid."&fname=".$fname."&bid=".$bid."'>ENTER</a></td>";
        echo "</tr>";
    }
    ?>
</table></center>
</div>
</div>
</div>
</body>
</html>



