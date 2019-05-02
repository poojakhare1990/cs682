<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/style2.css" type="text/css" />
    <style>
    body{
        background: url(../images/banner.jpg)repeat;
        padding:10px 0px 30px 0px;
    }
    th, td{
        color:white;
        font-size:1.5em;
    }
    </style>
    <script src="../js/add.js"></script>
</head>
<body>
    <div class="page">
        <div class="header">
        <ul>
            <li><a href="./admin.php"><font color="white">Home</font></a></li>
            <li><a href="./form.php"><font color="white">Form</font></a></li>
            <li><a href="./employee.php"><font color="white">Employee</font></a></li>
        </ul>
        </div>
    <div class="body">
        <div id="featured">
        <?php
            include("../login/connection.php");
        
            echo "<button type='button' onclick='window.location.href=\"./addNamelist.php\"'><font size='5em'>ADD USER</font></button>";
            echo "<center><table border='1' width='900'>";
            echo "<caption><font color='white' size='10em'><b>Username</b></font></caption>";
    
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Role</th>";
            echo "<th></th>";
            echo "</tr>";
    
    
            $sql = "SELECT* FROM login";
            $res = $conn->prepare($sql);
            $res->execute();
            $result = $res->fetchALL(PDO::FETCH_ASSOC);
            for($i = 0; $i < count($result); $i++)
            {
                $id = $result[$i]["id"];
                $name = $result[$i]["username"];
                $create = $result[$i]["createAccess"];
                $edit = $result[$i]["editAccess"];
                $change = $result[$i]["changeAccess"];
                $role = "Technician";
                
                if($create == true && $edit == true && $change == true){
                    global $role;
                    $role = "Admin";
                }elseif($create == false && $edit == true && $change == true){
                    global $role;
                    $role = "Manager";
                }
        
                echo "<tr>";
                echo "<td>".$id."</td>";
                echo "<td>".$name."</td>";
                echo "<td>".$role."</td>";
                echo "<td><a href='deleteUsernameList.php?id=".$id."&name=".$name."'>DELETE</a></td>";
                echo "</tr>";
            }
            ?>
        </table></center>
    </div>
    </div>
    <div class="footer">
        <ul style="height:300px;">
            <li><a href="./admin.php">Home</a></li>
            <li><a href="./form.php">Form</a></li>
            <li><a href="./employee.php">Employee</a></li>
        </ul>
        <p>&#169; Copyright &#169; 2019. Company name all rights reserved. collect from <a href="http://www.umb.edu/" title="UMB">UMB</a></p>
    </div>
    </div>
</body>
</html>



