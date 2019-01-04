<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>   
</head>
<body>
<div class="container">
<h3> Chỉnh sửa thông tin thành viên</h3>
      <div class="row">
      	<?php
		    require_once("connect.php");
 
		    if (isset($_POST["save"])) 
		    {

		    	$user_id = $_POST["user_id"];
		    	$name = $_POST["name"];
		    	$email = $_POST["email"];
		    	$permission = $_POST["permission"];
		    	$sql = "update users set username = '$name', email = '$email', permission = '$permission' where user_id = $user_id";
		    	mysqli_query($conn, $sql);
		    	header("location:addmin.php");
		    	exit();
		    }
 
		    $id = "";
		    $name = "";
		    $email = "";
		    $permission = "";
		    if (isset($_GET["user_id"])) {
		    	//thực hiện việc lấy thông tin user
		    	$id = $_GET["user_id"];
		    	$sql = "select * from users where user_id = $id";
		    	$query = mysqli_query($conn, $sql);
		    	while ( $data = mysqli_fetch_array($query) ) {
		    		$name = $data["username"];
		    		$email = $data["email"];
		    		$permission = $data["permission"];
		    	}
		    }
		?>
        
        <form method="POST" name="fr_update">
	        <table class="table">
	          <caption>Danh sách thành viên đã đăng ký</caption>
	          	<input type="hidden" name="user_id" value="<?php echo $id; ?>">
	          	<tr><td>Họ tên : </td><td><input type="text" name="name" value="<?php echo $name; ?>" /></td></tr>
	          	<tr><td>Địa chỉ email : </td><td><input type="text" name="email" value="<?php echo $email; ?>"/></td></tr>
	          	<tr>
	          		<td>Cấp độ : </td>
	          		<td>
	          			<select name="permission">
	          				<option value="1" <?php echo ($permission == 1)?"selected":""; ?>>Quản trị viên</option>
	          				<option value="2" <?php echo ($permission == 0)?"selected":""; ?>>Cộng tác viên</option>
	          			</select>
	          		</td>
	          	</tr>
	          	<tr><td colspan="2"><input type="submit" name="save" value="Lưu thông tin"></td></tr>
	        </table>
        </form>
      </div>
</body>
</html>