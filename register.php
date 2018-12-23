<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="windows-1252">
        <title>Đăng ký</title>
        <link rel="stylesheet" type="text/css" href="./css/register.css"/>
    </head>
    <body >
        
        <div class="container">
            <img src="../public_html/img/men.png">
            <form  method="post" action="register.php">
                <div class="form-input">
                    <input type="text" id="username" name="username" placeholder=" Nhập tên người dùng">
                </div>
                <div class="form-input">
                    <input type="text" id="email" name="email" placeholder=" Nhập email">
                </div>
                <div class="form-input">
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                </div>
                <input type="submit" name="btn_submit" id="btn_submit" value="ĐĂNG KÝ" class="btn-dangky">
            </form>
            <a href="./login.php"><p>ĐĂNG NHẬP</p></a>
            <p></p>
        </div>
        <?php
            include('connect.php');
            if (isset($_POST["btn_submit"])) {
                //lấy thông tin từ các form bằng phương thức POST
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                if ($username == "" || $password == "" || $email == "") {
                    echo "<h12>bạn vui lòng nhập đầy đủ thông tin</h12>";
                } else {
                    //Thực hiện việc lưu trữ vào database
                    $sql="select * from users where username='$username'";
                    $kt=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($kt)>0){
                        echo"<h12>Tài khoản đã tồn tại</h12>";
                    }
                    else{
                    $sql = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
                    // thực thi câu $sql với biến conn lấy từ file connect.php
                    if(mysqli_query($conn, $sql)){
                        echo "<h12 >chúc mừng bạn đã đăng ký thành công</h12>";
                    }
            }
        }
            }
        ?>
    </body>
</html>