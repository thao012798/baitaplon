<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/user.css">
    <script language="javascript">
    function show_confirm (){
        if(confirm("Bạn chắc chắn muốn xóa? "))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    </script>
    <script src="../ckeditor/ckeditor/ckeditor.js"></script>
    <title>Quản lý trang</title>
</head>
<body>
    <div id="top">
        <H3 style="color:#ab5555">Welcome <a href="indext.php" style="color:#ab5555">(Trang Chủ)</a></H3>
    </div>
    <div id="menu">
        <ul id="submenu">
            <li><a href="list_user.php" style="color: #ab5555"><b>Quản lý thành viên</b></a></li>
            <li><a href="list_dethi.php" style="color: #ab5555"><b>Quản lý đề thi</b></a></li>
            <li><a href="list_ND.php" style="color: #ab5555"><b>Quản lý bài viết</b></a></li>
            <li><a href="list_comment.php" style="color: #ab5555"><b>Quản lý bình luận</b></a></li>
            
        </ul>
    </div>
    <div style="clear:left;"></div>
</body>
</html>