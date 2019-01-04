<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>  
<?php

      require_once("connect.php");
      require_once("addmin.php");
?>
    <div class="container">
      <div class="row">
        <h3 style="color: #ab5555"> Quản lý thành viên</h3>
        <table class="table">
          <caption>Danh sách thành viên đã đăng ký</caption>
          <thead>
            <tr>
              <th style="color: #ab5555">ID</th>
              <th  style="color: #ab5555">Tên đăng nhập</th>
              <th style="color: #ab5555">Địa chỉ email</th>
              <th  style="color: #ab5555">Cấp độ</th>
              <th  style="color: #ab5555">Hành động</td>
            </tr>
          </thead>
          <tbody>
          <?php
            $stt = 1 ;
            $sql = "SELECT * FROM users";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            $query = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $row["user_id"];?></td>
              <td><?php echo $row["username"];?></td>
              <td><?php echo $row["email"];?></td>
              <td>
                <?php
                    if ($row["permission"] == 1) {
                      echo "Quản trị viên";
                    }else{
                      echo "Cộng tác viên";
                    }
                ?>
              </td>
              <td>
                <a href="update.php?user_id=<?php echo $row["user_id"] ?>" style ="color: #ab5555">Sửa</a> 
                <a href="delete.php?user_id=<?php echo $row["user_id"] ?>" style ="color: #ab5555">Xóa</a>
              </td>
            </tr>
          <?php
            }
          ?>
          </tbody>
        </table>
      </div>
</body>
</html>