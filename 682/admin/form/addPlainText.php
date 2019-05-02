<?php
    $id = $_GET["id"];
    $name = $_GET["name"];
    $question = $_GET["question"];
    $type = $_GET["type"];

    echo "<script>alert('New Plain text has been added!'');</script>";
    echo "<script>window.location.href='./addForm.php?id=$id&name=$name';</script>";
?>
