<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/style2.css" type="text/css" />
    <script src="../js/check.js"></script>
    <style>
        body{
            background: url(../images/banner.jpg)repeat;
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
                <li><a href="./admin.php"><font color="white">Home</font></a></li>
                <li><a href="./form.php"><font color="white">Form</font></a></li>
                <li><a href="./employee.php"><font color="white">Employee</font></a></li>
            </ul>
        </div>
    <div class="body">
        <center>
            <?php
                echo "<caption><font color=\"white\" size=\"10em\"><b>Add User</b></font></caption>";
                echo "<br/>";
                echo "<form action=\"./addUsernameList.php\" method=\"post\" onsubmit=\"return checkRegisterInput()\">";
                echo "<div class=\"lable-2\">";
                echo "<input type=\"text\" id=\"id\" class=\"text\" name=\"id\" value=\"ID number(Number Only)\" onfocus=\"this.value = ''\" oninput =\"value=value.replace(/[^\d]/g,'')\">";
                echo "<input type=\"text\" id=\"usr\" class=\"text\" name=\"Username\" value=\"Username\" onfocus=\"this.value = ''\"><br/>";
                echo "<input type=\"password\" id=\"pwd1\" class=\"text\" name=\"Password\" placeholder=\"Password\" onfocus=\"this.value = ''\"><br/>";
                echo "<input type=\"password\" id=\"pwd2\" class=\"text\" placeholder=\"Confirm Password\" onfocus=\"this.value = ''\"><br/>";
                echo "<select name=\"Role\" style=\"appearance:none; color:inherit; font-size:1em; margin: 10px 0px;\">";
                echo "<option value=\"Admin\">ADMIN</option>";
                echo "<option value=\"Manager\">MANAGER</option>";
                echo "<option value=\"Technician\">TECHNICIAN</option>";
                echo "</select>";
                echo "</div>";
                echo "<div class=\"submit\">";
                echo "<input type=\"submit\" value=\"Add User\">";
                echo "</div>";
                echo "</form>";
                ?>
        </center>
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




