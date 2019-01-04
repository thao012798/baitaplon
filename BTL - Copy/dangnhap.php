<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <title>Đăng nhập</title>
        <link rel="stylesheet" type="text/css" href="css/login.css"/>
    </head>
    <body >
        <div class="container">
            <img src="./img/men.jpg">
            <form method="post" action="dangnhap.php">
                <div class="form-input">
                    <input type="text" name="username" placeholder=" Tên đăng nhập">
                </div>
                <div class="form-input">
                      <input type="password" name="password" placeholder="Mật khẩu">
                </div>
                <input type="submit" name="btn_submit" value="ĐĂNG NHẬP" class="btn-login" >
            </form>
            <p>Lưu mật khẩu?</p>    
        </div>
         <?php
	//Gọi file connect.php 
	     require_once("connect.php");
             if (isset($_POST["btn_submit"])) 
            {
                        // lấy thông tin người dùng
                        $username = $_POST["username"];
                        $password = $_POST["password"];
                        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
                        $username = strip_tags($username);
                        $username = addslashes($username);
                        $password = strip_tags($password);
                        $password = addslashes($password);
        
                        if ($username == "" || $password =="")
                        {
                            echo "<h12>Tên dăng nhập hoặc mật khẩu bạn không được để trống! </h12>";
                        }
                        else
                        {
                                  mysqli_set_charset($conn,"utf8");
                              $sql = "select * from users where username = '$username' and password = '$password' ";
                                $result = mysqli_query($conn,$sql);
                                $check=mysqli_num_rows($result);
                            if($check==1)
                                {
                                    $data=mysqli_fetch_assoc($result);
                                    $permission=$data["permission"];
                                    if($permission==1)
                                    {
                                        header("location:addmin.php");
                                        exit();
                                    }
                                    else
                                    {
                                        header("location:ctacvien.php");
                                    }
                                }
                            else
                            {
                                    echo "Sai email hoặc mật khẩu";
                            }
                        }        
                        mysqli_close($conn);
            }
                        ?>
</body>
</html>
        