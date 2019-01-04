<?php
    require('addmin.php');
?>
   <h3 style="color: #ab5555">QUẢN LÝ BÀI VIẾT </h3>
    <div id="wrapper">
        <table>
            <tr>
                <td colspan="3"></td>
                <td colspan="2"><a href="add_ND.php" style="color: #ab5555"><b>Thêm Bài Viết</b></a></td>
            </tr>
            <tr style="background:wheat; color:#ab5555;">
                <th style="width:50px;">STT</th>
                <th style="width:150px;">Tiêu đề</th>
                <th>Nội Dung</th>
                <th style="width:50px;">Edit</th>
                <th style="width:50px;">Delete</th>
            </tr>
            <tr>
            <?php
                require('connect.php');
                $stt=0;
                $sql="select title,content,post_id from post";
                $result=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td><b>$data[title]</b></td>";
                echo"<td><textarea cols='68' rows='7' name='txtnd'>$data[content]</textarea></td>";
                echo"<td><a href='edit_ND.php?post_id=$data[post_id]' style='color:#ab5555'>Edit</a></td>";
                echo"<td><a href='delete_post.php?post_id=$data[post_id]' onclick='return show_confirm()' style='color:#ab5555'>Delete</a></td>";
                echo"</tr>";
                $stt++;
                }
            ?>
        </table>
    </div>