<?php
    require("../login/connection.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM building WHERE id = $id";
    $res = $conn->prepare($sql);
    $res->execute();
    echo"<script>alert('Building has been deleted!'); window.location.href = './admin.php';</script>";
?>
