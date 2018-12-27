<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title>Đăng nhập</title>
        <link rel="stylesheet" type="text/css" href="./css/login.css"/>
    </head>
    <body >
        <div class="container">
            <img src="../public_html/img/men.png">
            <form method="post" action="login.php">
                <div class="form-input">
                    <input type="text" name="username" placeholder=" Tên đăng nhập">
                </div>
                <div class="form-input">
                    <a href="../public_html/index.html">
                      <input type="password" name="password" placeholder="Mật khẩu">
                    </a>
                </div>
                
                <input type="submit" name="btn_submit" value="ĐĂNG NHẬP" class="btn-login" >
            </form>
            <p>Lưu mật khẩu?</p>
            <a href="register.php"><p>ĐĂNG KÝ</p></a>     
        </div>
         <?php
	//Gọi file connect.php 
	require_once("connect.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "<h12>Tên dăng nhập hoặc mật khẩu bạn không được để trống! </h12>";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "<h12>tên đăng nhập hoặc mật khẩu không đúng !</h12>";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
			}
		}
	}
?>
    </body>
</html>

