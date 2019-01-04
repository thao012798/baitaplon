<?php
require("addmin.php");
$data=array();
$data["title"]= $data["content"]=$data["mota"]=$data["ing"]=null;
$title= $content=$ing=$mota=null;
if(isset($_POST['ok']))
    {
        if(empty($_POST["txtname"])){
            $data["title"]="*Vui lòng nhập tiêu đề<br/>";
        }else
        {
            $title=$_POST["txtname"];
        }
        if(empty($_POST["txtnd"])){
            $data["content"]="*Vui lòng nhập nội dung";
        }else
        {
            $content=$_POST["txtnd"];
        }
        if (empty($_POST["txtanh"]))
        {
            $data["ing"]=" Vui lòng nhập ảnh ";
        }
        else
        {
            $ing=$_POST["txtanh"];
        }
         if (empty($_POST["txtmt"]))
        {
            $data["mota"]=" Vui lòng nhập mô tả";
        }
        else
        {
            $mota=$_POST["txtmt"];
        }
            require('connect.php');
            $sql="insert into post (title,content,ing)  values ('$title','$content','$ing')";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("location:list_ND.php");
            exit();
    }
?>
<div id="wapper2">
<fieldset style="width:795px; margin=20px auto 10px;">
            <legend  style="width:120px;color: #ab5555">Thêm Bài Viết</legend>
            <form acction="add_ND.php?id=<?php echo$id ;?>" method="post">
                <table>
                    <tr>
                        <td style="width:90px;color: #ab5555">Tiêu đề</td>
                        <td><textarea cols="55" rows="5" name="txtname"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width:90px;color: #ab5555">Nội dung</td>
                        <td><textarea cols="55" rows="10" name="txtnd"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 90px;color: #ab5555">Ảnh</td>
                        <td><textarea cols="55" rows="7" name="txtanh"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 90px;color: #ab5555">Mô Tả</td>
                        <td><textarea cols="55" rows="7" name="txtmt"></textarea></td>
                    </tr>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'txtnd' );
                    </script>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="ADD"name="ok"/></td>
                    </tr>
                </table>
                <div style="width:290px; margin:10px; text-align:center;color:red;">
                    <?php 
                        echo $data["title"];
                        echo $data["content"];
                    ?>
                </div>
            </form>
        </fieldset>
</div>