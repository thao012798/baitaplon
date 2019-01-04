<?php
    $id=$_GET["user_id"];
    require("connect.php");
    $sql="delete from users where user_id=$id";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:list_user.php");
    exit();

?>