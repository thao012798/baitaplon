<div class="wrapper">
                 
            <div class="menu">
                <ul>
                    <li> <a href= "indext.php" class="write">Trang chủ</a></li>
                    <li><a href="" class="write">Văn mẫu</a>
                        <ul>
                            <?php
                                require_once "connect.php";
                                $sql="SELECT * FROM category where category_id<=10";
                                $result = mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($result)){             
                            ?>
                                <li><a href="danhsachtin.php?caterory_id=<?php echo $row['category_id']?>" class="write"><?php echo $row['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li><a href="" class="write">Dàn ý</a>
                        <ul>
                            <?php
                                    require_once "connect.php";
                                    $sql="SELECT * FROM category where category_id>10 and category_id<=20";
                                    $result = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($result)){             
                                ?>
                                    <li><a href="indext.php?p=danhsachtin&caterory_id=<?php echo $row['category_id']?>" class="write"><?php echo $row['name']?></a></li>
                                <?php
                                }
                                ?>      
                        </ul>
                    </li>
                    <li><a href="" class="write">Soạn văn</a>
                        <ul>
                            <?php
                                    require_once "connect.php";
                                    $sql="SELECT * FROM category where category_id>20 and category_id<=30";
                                    $result = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($result)){             
                                ?>
                                    <li><a href="indext.php?p=danhsachtin?caterory_id=<?php echo $row['category_id']?>" class="write"><?php echo $row['name']?></a></li>
                                <?php
                                }
                                ?>
                        </ul>
                    </li>
                    <li><a href="" class="write">Thể loại văn</a>
                        <ul>
                            <?php
                                    require_once "connect.php";
                                    $sql="SELECT * FROM category where category_id>30 and category_id<=39";
                                    $result = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($result)){             
                                ?>
                                    <li><a href="indext.php?p=danhsachtin?caterory_id=<?php echo $row['category_id']?>" class="write"><?php echo $row['name']?></a></li>
                                <?php
                                }
                                ?>
                            </ul> 
                    </li>
                    <li><a href="" class="write">Đề thi văn</a>
                        <ul>
                            <?php
                                    require_once "connect.php";
                                    $sql="SELECT * FROM category where category_id>39 and category_id<=46";
                                    $result = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($result)){             
                                ?>
                                    <li><a href="indext.php?p=danhsachtin?caterory_id=<?php echo $row['category_id']?>" class="write"><?php echo $row['name']?></a></li>
                                <?php
                                }
                                ?>
                        </ul>
                    </li>
                    <li><a href="" class="write">Slide bài giảng</a>
                        <ul>
                            <?php
                                    require_once "connect.php";
                                    $sql="SELECT * FROM category where category_id>46 and category_id<=53";
                                    $result = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($result)){             
                                ?>
                                    <li><a href="indext.php?p=danhsachtin?caterory_id=<?php echo $row['category_id']?>" class="write"><?php echo $row['name']?></a></li>
                                <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <form id="search" >
                            <input type="text" placeholder="Tìm Kiếm " class="write">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>