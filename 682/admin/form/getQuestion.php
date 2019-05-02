<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $fid = $_GET["fid"];
    $bid = $_GET["bid"];
    $fname = $_GET["fname"];
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
input[type="text"]{
padding: 14px;
width: 94%;
    font-size: 1em;
margin: 18px 0px;
border:none;
color: #666666;
cursor: pointer;
background: none;
    float: center;
outline: none;
    font-weight: 700;
    font-family: "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
background: #ffffff;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    border-left: 6px solid #fff;
    border-bottom: none;
    border-right: none;
    border-top: none;
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
    echo "<button type='button' onclick='window.location.href=\"./edit.php?username=".$username."&name=".$fname."&id=".$bid."\"'><font size='5em'>BACK</font></button>";
    echo "<button type='button'><font size='5em'>SUBMIT</font></button>";
    ?>
</div>
<center>
<caption><font color="white" size="10em"><b>QUESTIONS</b></font></caption><br/><br/>
<?php
    $sql = "SELECT* FROM question where fid = $fid";
    $res = $conn->prepare($sql);
    $res->execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);
    for($i = 0; $i < count($result); $i++)
    {
        $oid = $result[$i]["oid"];
        $fid = $result[$i]["fid"];
        $question = $result[$i]["question"];
        $property = $result[$i]["property"];
        
        echo "<tr>";
        echo "<td><font color='white' size='6em'>$question\t</font></td>";
        
        $query = "SELECT* FROM options WHERE oid = $oid";
        $run = $conn->prepare($query);
        $run->execute();
        $end = $run->fetchALL(PDO::FETCH_ASSOC);
        for($j = 0; $j < count($end); $j++){
            $types = $end[$j]["types"];
            $val = $end[$j]["val"];
            
//            $num++;
//            $myObj->abc = "123";
//            $myObj->abc = "456";
//            $myObj->abc = "789";
            $myObj = array("abc" => [123, 456]);
            $myJSON = json_encode($myObj);
            
            
            if($types == "PLAIN TEXT"){
                echo "<td><input type=\"text\" name=\"option1\" style=\"width: 300; height: 10\"></td>";
                echo "\t";
            }elseif($types == "RADIO BUTTON"){
                echo "<td><input type=\"radio\" name=\"option2\" value=".$val."><font color='white' size='5em'>$val\t</font></td>";
                echo "\t";
            }else{
                echo "<td><input type=\"checkbox\" name=\"option3\" value=".$val."><font color='white' size='5em'>$val\t</font></td>";
                echo "\t";
            }
        }
        echo "</tr>";
        echo "<br/>";
    }
    echo $myJSON;
    ?>
</center>
</div>
</body>
</html>



