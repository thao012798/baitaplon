<?php
require("addmin.php");

require('connect.php');
if(isset($_POST['ok']))
    {
       
            $title=$_POST["txttd"];
            $content=$_POST["txtnd"];
        $sql="update post title='$title', connect='$content',mota='$mota' where post_id=$id";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        header("location:list_ND.php");
        exit();
    }
            $id = "";
            $title = "";
            $content = "";
            if (isset($_GET["post_id"])) {
                //thực hiện việc lấy thông tin user
                $id = $_GET["post_id"];
                $sql = "select * from post where post_id = $id";
                $query = mysqli_query($conn, $sql);
                while ( $data = mysqli_fetch_array($query) ) {
                    $title = $data["title"];
                    $content = $data["content"];
                }
            }
?>
    <div id="wapper2">
        <fieldset style="width:30px; margin=20px auto 10px;">
            <legend>Chỉnh sửa Nội dung</legend>
            <form acction="edit_ND.php?post_id=<?php echo $id ;?>" method="post">
                <table>
                    <tr>
                        <td style="width:100px;">Tiêu đề</td>
                        <td><textarea cols="105" rows="2" name="txttd" value ="<?php echo $title;?>">
                        </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px;">Nội dung</td>
                        <td><textarea cols="105" rows="5" name="txtnd" value ="<?php echo $content;?>">
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Update"name="ok"/></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>