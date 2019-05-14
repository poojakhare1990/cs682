<?php
    $username = $_GET["username"];
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manager Page</title>
    <link rel="stylesheet" href="../../css/style2.css" type="text/css" />
    <script src="../../js/check.js"></script>
    <style>
        body{
            background: url(../../images/banner.jpg)repeat;
            padding:10px 0px 30px 0px;
        }
        .lable-2 input[type="text"],input[type="Password"] {
            padding: 14px;
            width: 94%;
            font-size: 1em;
            margin: 18px 0px;
            border:none;
            color: #666666;
            cursor: pointer;
            background: none;
            float: left;
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
        .submit{
            padding:5px 4px;
            text-align: center;
        }
        input[type=submit] {
            padding: 17px 30px;
            color: #fff;
            float: right;
            font-family: "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
            background: #40A46F;
            border: 1px solid #40A46F;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.5s ease-out;
            -webkit-transition: all 0.5s ease-out;
            -moz-transition: all 0.5s ease-out;
            -ms-transition: all 0.5s ease-out;
            -o-transition: all 0.5s ease-out;
            outline:none;
            width: 100%;
        }
        .submit input[type=submit]:hover {
            background:#07793D;
            border:1px solid #07793D;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="header">
            <ul>
<?php
    echo"<li><a href=\"../manager.php?username=".$username."\"><font color=\"white\">Home</font></a></li>";
    
    
    echo"<li><a href=\"../../index.html\"><font color=\"white\">Logout</font></a></li>";
    ?>
            </ul>
        </div>
    <div class="body">
        <center>
            <?php
                $id = $_GET["id"];
                $name = $_GET["name"];
                echo "<caption><font color=\"white\" size=\"10em\"><b>USER</b></font></caption>";
                echo "<br/>";
                echo "<form action=\"./addBuildingUsername.php?username=".$username."&id=".$id."&name=".$name."\" method=\"post\" onsubmit=\"return checkBuildingUserInput()\">";
                echo "<div class=\"lable-2\">";
                echo "<input type=\"text\" id=\"manager\" class=\"text\" name=\"manager\" value=\"manager\" onfocus=\"this.value = ''\"><br/>";
                echo "<input type=\"text\" id=\"technician\" class=\"text\" name=\"technician\" value=\"technician\" onfocus=\"this.value = ''\"><br/>";
                echo "</div>";
                echo "<div class=\"submit\">";
                echo "<input type=\"submit\" value=\"Add User\">";
                echo "</div>";
                echo "</form>";
                ?>
        </center>
    </div>
    </div>
</div>
</body>
</html>




