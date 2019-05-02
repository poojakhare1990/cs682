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
                <center>
                <caption><font color="white" size="10em"><b>Building</b></font></caption>
                <br/>
                <form action="./addBuilding.php" method="post" onsubmit="return checkCreateBuildingInput()">
                <div class="lable-2">
                    <input type="text" id="id"class="text" name="id" value="ID number(Number Only)"
                        onfocus="this.value = ''" oninput ="value=value.replace(/[^\d]/g,'')"><br/>
                    <input type="text" id="name" class="text" name="building" value="Building name" onfocus="this.value = ''"><br/>
                    <input type="text" id="manager" class="text" name="manager" value="manager" onfocus="this.value = ''"><br/>
                    <input type="text" id="technician" class="text" name="technician" value="technician" onfocus="this.value = ''"><br/>
                </div>
                <div class="submit">
                    <input type="submit" value="Create Building">
                </div>
                </form>
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



