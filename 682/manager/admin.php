<?php
    include("../login/connection.php");
    $username = $_GET["username"];
    ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Manager Page</title>
        <link rel="stylesheet" href="../css/style2.css" type="text/css" />
        <style>
            body{
                background: url(../images/banner.jpg)repeat;
                padding:10px 0px 30px 0px;
                overflow-x:hidden;
                overflow-y:auto;
            }
        </style>
        <script src="../js/add.js"></script>
    </head>
    <body>
        <div class="page">
            <div class="header">
                <ul>
                    <li class="selected"><font color="#f78117">Home</font></li>
                    <li><a href="./form/form.php"><font color="white">Form</font></a></li>
                    <li><a href="./user/employee.php"><font color="white">Employee</font></a></li>
                    <li><a href="../index.html"><font color="white">Logout</font></a></li>
                </ul>
            </div>
            <div class="body">
                <div id="featured">
                    <center><table border="1" width="900">
                        <caption><font color="white" size="10em"><b>Building</b></font></caption>
                        <tr>
                            <th><font color="white" size="5em">ID</font></th>
                            <th><font color="white" size="5em">Name</font></th>
                            <th><font color="white" size="5em">Manager</font></th>
                            <th><font color="white" size="5em">Technician</font></th>
                            <th></th>
                        </tr>
                        <?php

                            $sql = "SELECT* FROM building";
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
                                echo "<td><a href='./building/getBuilding.php?username=".$username."&id=".$id."&name=".$name."'>ENTER</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </table></center>
                </div>
            </div>
        </div>
    </body>
</html>


