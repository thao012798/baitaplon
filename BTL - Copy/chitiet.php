<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tailieuvan.edu.vn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>   
</head>
<body>
<div>
    <?php
        include "top.php";
        include "menu.php";
    ?>
</div>   
<div class="content">
    <div id="left">
        <div>
            <?php
                require_once "connect.php";
                $id=$_GET['id'];
                $sql="SELECT * FROM post where post_id=$id order by post_id desc";
                $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)){    
            ?>  
                    <h4> <?php echo $row['title']?></h4>                     
                    <img src="img\<?php echo $row['ing']?>" alt="">
                    
                    <div class="content_ct"><p><?php echo $row['content']?></p></div>
                    <?php 
                    echo"<br/>";
                    echo "<hr>";                  
                    }
                    ?>
        </div>
    </div>
</div>
        </body>
</html>
