<div class="content">
            <div id="left">
                <div>
                <?php
                    require_once "connect.php";
                    
                    $sql="SELECT * FROM post  order by post_id desc LIMIT 0,5";
                    $result = mysqli_query($conn, $sql);
                     while($row=mysqli_fetch_array($result)){
                    
                ?>  <a href="chitiet.php?id=<?php echo$row['post_id'] ; ?>">
                        <h4> <?php echo $row['title']?></h4>                     
                        <img src="img\<?php echo $row['ing']?>" alt="">
                    </a> 
                        <div class="tomtat"><p><?php echo $row['mota']?></p></div>
                    <?php 
                    echo"<br/>";
                    echo "<hr>";                  
                    }
                    ?>
                    
            </div>
