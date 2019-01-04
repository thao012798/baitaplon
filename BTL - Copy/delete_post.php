<?php
    $id=$_GET["post_id"];
    require("connect.php");
    $sql="delete from post where post_id=$id";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:list_ND.php");
    exit();

?>