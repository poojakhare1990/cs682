<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $id = $_GET["id"];
    $name = $_GET["name"];
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
            }
            th, td{
                color:white;
                font-size:1.5em;
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
    echo"<li><a href=\"../form/form.php?username=".$username."\"><font color=\"white\">Form</font></a></li>";
    echo"<li><a href=\"../user/employee.php?username=".$username."\"><font color=\"white\">Employee</font></a></li>";
    echo"<li><a href=\"../../index.html\"><font color=\"white\">Logout</font></a></li>";
    ?>
                </ul>
            </div>
        <div class="body">
                    <?php
                        echo "<button type='button' style=\"margin-right:20px\" onclick='window.location.href=\"./addBuildingUser.php?username=".$username."&id=".$id."&name=".$name."\"'><font size='5em'>ADD USER</font></button>";
                        echo "<button type='button' onclick='window.location.href=\"../form/buildingForm.php?username=".$username."&id=".$id."&name=".$name."\"'><font size='5em'>FORM ACTIONS</font></button>";
                        echo "<center><table border='1' width='900'>";
                        echo "<caption><font color='white' size='10em'><b>Building</b></font></caption>";

                        echo "<tr>";
                        //echo "<th>ID</th>";
                        echo "<th>Name</th>";
                        echo "<th>Manager</th>";
                        echo "<th>Technician</th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "</tr>";

                        
                        $sql = "SELECT* FROM building WHERE name = '$name'";
                        $res = $conn->prepare($sql);
                        $res->execute();
                        $result = $res->fetchALL(PDO::FETCH_ASSOC);
                        for($i = 0; $i < count($result); $i++)
                        {
                            $id = $result[$i]["id"];
                            $name = $result[$i]["name"];
                            $manager = $result[$i]["manager_id"];
                            $technician = $result[$i]["technician_id"];
                            
                            echo "<tr>";
                            //echo "<td>".$id."</td>";
                            echo "<td>".$name."</td>";
                            echo "<td>".$manager."</td>";
                            echo "<td>".$technician."</td>";
                            
                            echo "<td><button type='button' onclick='window.location.href=\"../form/edit.php?username=".$username."&id=".$id."&name=".$name."&manager=".$manager."&technician=".$technician."\"'><font size='3em'>CHOOSE FORM</font></button></td>";
                            echo "<td><button type='button' onclick='window.location.href=\"./deleteGetBuilding.php?username=".$username."&id=".$id."&name=".$name."&manager=".$manager."&technician=".$technician."\"'><font size='3em'>DELETE USER</font></button></td>";
                            echo "</tr>";
                        }
                    ?>
                </table></center>
        </div>
    </div>
    </body>
</html>


