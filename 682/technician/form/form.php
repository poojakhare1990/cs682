<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
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
<center><table border="1" width="900">
<caption><font color="white" size="10em"><b>FORM</b></font></caption>
<tr>

<th><font color="white" size="5em">Name</font></th>

<th></th>
<th></th>
</tr>
<?php
    $sql = "SELECT* FROM form f, building b WHERE f.bid = b.id";
    $res = $conn->prepare($sql);
    $res->execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);
    for($i = 0; $i < count($result); $i++)
    {
        $id = $result[$i]["fid"];
        $fname = $result[$i]["fname"];
        $bid = $result[$i]["bid"];
        $manager = $result[$i]["manager_id"];
        $technician = $result[$i]["technician_id"];
        
        echo "<tr>";
//        echo "<td><font color='white' size='5em'>".$id."</font></td>";
        echo "<td><font color='white' size='5em'>".$fname."</font></td>";
//        echo "<td><font color='white' size='5em'>".$bid."</font></td>";
        
        echo "<td><button type='button' onclick='window.location.href=\"./edit.php?username=".$username."&name=".$fname."&id=".$bid."&manager=".$manager."&technician=".$technician."\"'><font size='3em'>SELECT</font></button></td>";
        echo "<td><button type='button' onclick='window.location.href=\"./deleteInForm.php?username=".$username."&fid=".$id."&fname=".$fname."&bid=".$bid."\"'><font size='3em'>DELETE FORM</font></button></td>";
        
//        echo "<td><a href='./edit.php?username=".$username."&name=".$fname."&id=".$bid."&manager=".$manager."&technician=".$technician."'>ENTER</a></td>";
//        echo "<td><a href='./deleteForm.php?username=".$username."&id=".$id."&fname=".$fname."&bid=".$bid."'>DELETE</a></td>";
        echo "</tr>";
    }
    ?>
</table></center>
</div>
</div>
</body>
</html>


