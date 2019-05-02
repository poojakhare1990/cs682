<?php
    include("../../login/connection.php");
    $username = $_GET["username"];
    $id = $_GET["id"];
    $name = $_GET["name"];
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
    echo"<li><a href=\"../technician.php?username=".$username."\"><font color=\"white\">Home</font></a></li>";
    echo"<li><a href=\"../../index.html\"><font color=\"white\">Logout</font></a></li>";
    ?>
                </ul>
            </div>
        <div class="body">
                    <?php
                        
                        echo "<center><table border='1' width='900'>";
                        echo "<caption><font color='white' size='10em'><b>Building</b></font></caption>";

                        echo "<tr>";
                        echo "<th>Manager</th>";
                        echo "<th>Technician</th>";
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
                            echo "<td>".$manager."</td>";
                            echo "<td>".$technician."</td>";
                            
                            echo "<td style='text-align:center'><button type='button' onclick='window.location.href=\"../form/view.php?username=".$username."&id=".$id."&name=".$name."&manager=".$manager."&technician=".$technician."\"'><font size='3em'>CHOOSE FORM</font></button></td>";
                            echo "</tr>";
                        }
                    ?>
                </table></center>
        </div>
    </div>
    </body>
</html>


