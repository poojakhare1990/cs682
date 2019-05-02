<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $fid = $_GET["fid"];
    $bid = $_GET["bid"];
    $fname = $_GET["fname"];
    $manager = $_GET["manager"];
    $technician = $_GET["technician"];
    
    $data = array("username" => $username, "fid" => $fid, "bid" => $bid, "fname" => $fname, "manager" => $manager, "technician" => $technician);
    $json = json_encode($data);
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
    echo "<button type='button' onclick='window.location.href=\"./edit.php?username=".$username."&name=".$fname."&id=".$bid."&manager=".$manager."&technician=".$technician."\"'><font size='5em'>BACK</font></button>";
    ?>
</div>
<center>
<caption><font color="white" size="10em"><b>QUESTIONS</b></font></caption><br/><br/>
<?php
    $sql = "SELECT* FROM question where fid = $fid";
    $res = $conn->prepare($sql);
    $res->execute();
    $result = $res->fetchALL(PDO::FETCH_ASSOC);
    
    echo "<table border=\"1\" width=\"900\">";

    echo "<form id=\"form1\" name=\"form\" method=\"post\">";
    
    for($i = 0; $i < count($result); $i++)
    {
        $oid = $result[$i]["oid"];
        $fid = $result[$i]["fid"];
        $question = $result[$i]["question"];
        $property = $result[$i]["property"];
        
        echo "<tr>";
        echo "<td><font color='white' size='6em'>$question\t</font></td>";
        
        echo "<td>";
        $query = "SELECT* FROM options WHERE oid = $oid";
        $run = $conn->prepare($query);
        $run->execute();
        $end = $run->fetchALL(PDO::FETCH_ASSOC);
        for($j = 0; $j < count($end); $j++){
            $types = $end[$j]["types"];
            $val = $end[$j]["val"];
            
            if($types == "PLAIN TEXT"){
                echo "<input type=\"text\" name=\"plaintext".$oid."\" style=\"width: 300; height: 10\">";
                echo "\t";
            }elseif($types == "RADIO BUTTON"){
                echo "<input type=\"radio\" name=\"radiobutton".$oid."\" value=".$val."><font color='white' size='5em'>$val\t</font>";
                echo "\t";
            }else{
                echo "<input type=\"checkbox\" name=\"checkbox".$oid."\" value=".$val."><font color='white' size='5em'>$val\t</font>";
                echo "\t";
            }
        }
        echo "</td>";
        echo "</tr>";
    }
        echo "<input type=\"button\" id=\"submit\" onclick=\"onClick();\" value=\"SUBMIT QUESTION\">";
        echo "</form>";
    ?>
</center>
</div>
</body>
<script>
(function(){
 var result;
 var jsonData = <?php echo $json;?>;
 $('#submit').on('click', function(){
                var data = $('form').serializeArray();
                result = JSON.stringify(data);
//                alert(result);
//                 window.location.href = "./submitResult.php?fid=" +<?php echo $fid; ?> + "&result=" + escape(result);
                 window.location.href = "./submitResult.php?jsonData=" + escape(JSON.stringify(jsonData)) + "&result=" + escape(result);
                });
 })();
</script>

</html>



