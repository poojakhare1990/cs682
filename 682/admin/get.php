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
                <button type="button" onclick="addUser()"><font size="5em">ADD USER</font></button>
                <button type="button" onclick="deleteUser()"><font size="5em">DELETE USER</font></button>
                <center><table border="1" width="900">
                <caption><font color="white" size="10em"><b>Building</b></font></caption>
                    <tr>
                        <th><font color="white" size="5em">ID</font></th>
                        <th><font color="white" size="5em">Name</font></th>
                        <th><font color="white" size="5em">Manager</font></th>
                        <th><font color="white" size="5em">Technician</font></th>
                        <th><font color="white" size="5em">Edit</font></th>
                    </tr>
                    <?php
                        include("../login/connection.php");
                        $id = $_GET["id"];
                        $sql = "SELECT* FROM building WHERE id = $id";
                        $res = $conn->prepare($sql);
                        $res->execute();
                        $result = $res->fetchALL(PDO::FETCH_ASSOC);
                        for($i = 0; $i < count($result); $i++)
                        {
                            $id = $result[$i]["id"];
                            $name = $result[$i]["name"];
                            $manager = $result[$i]["manager"];
                            $technician = $result[$i]["technician"];
                            
                            echo "<tr>";
                            echo "<td><font color='white' size='5em'>".$id."</font></td>";
                            echo "<td><font color='white' size='5em'>".$name."</font></td>";
                            echo "<td><font color='white' size='5em'>".$manager."</font></td>";
                            echo "<td><font color='white' size='5em'>".$technician."</font></td>";
                            echo "<td><a href='edit.php?id=".$id."'>ENTER</a></td>";
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


