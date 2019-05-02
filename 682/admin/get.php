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
                        <th><font color="white" size="5em">Number</font></th>
                        <th><font color="white" size="5em">Name</font></th>
                        <th><font color="white" size="5em">Password</font></th>
                        <th><font color="white" size="5em">Create</font></th>
                        <th><font color="white" size="5em">Edit</font></th>
                        <th><font color="white" size="5em">Change</font></th>
                    </tr>
                    <?php
                        include("../login/connection.php");
                        $id = $_GET["id"];
                        $sql = "SELECT* FROM login WHERE id = $id";
                        $res = $conn->prepare($sql);
                        $res->execute();
                        $result = $res->fetchALL(PDO::FETCH_ASSOC);
                        for($i = 0; $i < count($result); $i++)
                        {
                            $id = $result[$i]["id"];
                            $username = $result[$i]["username"];
                            $password = $result[$i]["password"];
                            $create = $result[$i]["createAccess"];
                            $edit = $result[$i]["editAccess"];
                            $change = $result[$i]["changeAccess"];
                            echo "<tr>";
                            echo "<td><font color='white' size='5em'>".$id."</font></td>";
                            echo "<td><font color='white' size='5em'>".$username."</font></td>";
                            echo "<td><font color='white' size='5em'>".$password."</font></td>";
                            echo "<td><font color='white' size='5em'>".$create."</font></td>";
                            echo "<td><font color='white' size='5em'>".$edit."</font></td>";
                            echo "<td><font color='white' size='5em'>".$change."</font></td>";
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


