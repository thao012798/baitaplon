<?php
require('connect.php');

?>
<div id="top" style="text-align: center">
        <H3 style="color:#ab5555">Welcome  <a href="indext.php" style="color:#ab5555">(Trang Chủ)</a></H3>
</div> 
<div id="wapper2">
<fieldset style="width:795px; margin=20px auto 10px;">
            <h3 style="color: #ab5555">Gửi Bài </h3>
            <form acction="add_ND.php?id=<?php echo$id ;?>" method="post">
                <table>
                    <tr>
                        <td style="width:90px;color: #ab5555">Tiêu đề</td>
                        <td><textarea cols="55" rows="5" name="txtname"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width:90px;color: #ab5555">Nội dung</td>
                        <td><textarea cols="55" rows="5" name="txtnd"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 90px;color: #ab5555">Ảnh</td>
                        <td><textarea cols="55" rows="5" name="txtanh"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width: 90px;color: #ab5555">Mô Tả</td>
                        <td><textarea cols="55" rows="5" name="txtanh"></textarea></td>
                    </tr>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'txtnd' );
                    </script>
                    <tr>
                        <td></td>
                        <td ><input type="submit" value="Gửi"name="ok"/></td>
                    </tr>
                </table>
                <div style="width:290px; margin:10px; text-align:center;color:red;">
                  
                </div>
            </form>
        </fieldset>
</div>