<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		abc
	</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="vanmau.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
</head> 
  <style>
  
  </style>
<body>
	<header>
		<img src="anhmau.png">
	</header>
	<nav class="nav">
		<div class=" container nav1">
			<div class="row justify-content-md-center">
				<div class="col" style="cursor: pointer;">
                    <a href="index.php"><i style='font-size:24px' class='fas'>&#xf015;</i></a>

				</div>
			    <div class="col-auto" style="cursor: pointer;">
				    <select name="Soạn Văn">
					   <option value="soanvanmau">Soạn Văn</option>
					   <option value="soanvanmau12" ><a href="soanvanmaulop12.php">Soạn Văn Mẫu Lớp 12</a></option>
					   <option value="soanvanmau11">Soạn Văn Mẫu Lớp 11</option>
					   <option value="soanvanmau10"> Soạn Văn Mẫu Lớp 10</option>
					   <option value="soanvanmau10"> Soạn Văn Mẫu Lớp 9</option>
                       <option value="soanvanmau8"> Soạn Văn Mẫu Lớp 8</option>
					   <option value="soanvanmau7"> Soạn Văn Mẫu Lớp 7</option>
					   <option value="soanvanmau6"> Soạn Văn Mẫu Lớp 6</option>
					   <option value="soanvanmau5"> Soạn Văn Mẫu Lớp 5</option>
					   <option value="soanvanmau4"> Soạn Văn Mẫu Lớp 4</option>
					   <option value="soanvanmau3"> Soạn Văn Mẫu Lớp 3</option>
				    </select>
			    </div>
			    <div class="col-auto">
				    <select name="Dàn Ý">
					   <option value="Danylop 12">Dàn Ý</option>
					   <option value="D lop 12"> Dàn Ý Lớp 12</option>
					   <option value="D lop 11">  Dàn Ý Lớp 11</option>
					   <option value="D lop 10"> Dàn Ý Lớp 10</option>
					   <option value="D lop 9">  Dàn Ý Lớp 9</option>
					   <option value="D lop 8"> Dàn Ý  Lớp 8</option>
					   <option value="D lop 7">  Dàn Ý Lớp 7</option>
					   <option value="D lop 6">  Dàn Ý Lớp 6</option>
					   <option value="D lop 5">  Dàn Ý Lớp 5</option>
					   <option value="D lop 4"> Dàn Ý  Lớp 4</option>
					   <option value="D lop 3">  Dàn Ý Lớp 3</option>
				    </select>
			    </div>
		        <div class="col-auto">
				    <select name="Văn Mẫu">
					   <option value="Mlop 12">Văn Mẫu</option>
					   <option value="M lop 12">Văn Mẫu Lớp 12</option>
					   <option value="M lop 11">Văn Mẫu Lớp 11</option>
					   <option value="M lop 10">Văn Mẫu Lớp 10</option>
					   <option value="M lop 9">Văn Mẫu Lớp 9</option>
					   <option value="M lop 8">Văn Mẫu Lớp 8</option>
					   <option value="M lop 7">Văn Mẫu Lớp 7</option>
					   <option value="M lop 6">Văn Mẫu Lớp 6</option>
					   <option value="M lop 5">Văn Mẫu Lớp 5</option>
					   <option value="M lop 4">Văn Mẫu Lớp 4</option>
					   <option value="M lop 3">Văn Mẫu Lớp 3</option>
				    </select>
			    </div>
		        <div class="col-auto">
				    <select name="Thể Loại Văn">
					   <option value="lop 12">Thể Loại Văn</option>
					   <option value="nghiluan"> Văn Nghị Luận</option>
					   <option value="phantich"> Văn Phân Tich</option>
					   <option value="bieucam"> Văn Biểu Cảm</option>
					   <option value="binhgiang">Văn Bình Giảng</option>
					   <option value="chungminh">Văn Chứng Minh</option>
					   <option value="giaithic"> Văn Giải Thích</option>
					   <option value="kechuyen">Văn Kể Truyện</option>
					   <option value="tomtat">Văn Tóm Tắt</option>
					   <option value="vietthu">Viết Thư</option>
				    </select>
			    </div>
			    <div class="col-auto">
				    <select name="Đề Thi Văn">
					   <option value="đtlop 12">Đề Thi Văn</option>
					   <option value="ĐT lop 12"> Đề Thi Ngữ Văn Lớp 12</option>
					   <option value="ĐT lop 11"> Đề Thi Ngữ Văn Lớp 11</option>
					   <option value="ĐT lop 10"> Đề Thi Ngữ Văn Lớp 10</option>
					   <option value="ĐT lop 9"> Đề Thi Ngữ Văn Lớp 9</option>
					   <option value="ĐT lop 8"> Đề Thi Ngữ Văn Lớp 8</option>
					   <option value="ĐT lop 7"> Đề Thi Ngữ Văn Lớp 7</option>
					   <option value="ĐT lop 6"> Đề Thi Ngữ Văn Lớp 6</option>
				    </select>
			    </div>
			    <div class="col-md-1.7" style="cursor: pointer;">
				      <h6>Bài Văn Hay</h6>
                </div>
            </div>		
		</div>

	</nav>
	<section class="section" style="cursor: pointer;">
		    <div class="left">
		   
		    </div>
		    <div class="main">
		    	<div>
		    		<h2>Tả Con Búp Bê </h2>
		    	</div>
		    	
		    </div>

		    <div id="right">Quảng Cáo</div>
	</section>
	<footer class = "footer">
	     <div class="container">
	 	     <div class="row justify-content-md-center">
                <div class="col">
                 <h10>Liên Kết Tài Trợ</h10>
                 <div style="cursor: pointer;">
                  <ul class="b">
                    <li> Sổ tay ngữ văn</li>
                    <li> Truyện cười</li>
                    <li>Văn mẫu</li>
                    <li>Kênh bài tập</li>
                    <li>Văn học nhân học</li>
                  </ul>
              </div>
                </div>
                <div class="col">Tìm Kiếm Từ Khóa
                 <div style="cursor: pointer;">
                 <ul class="c">
                  <li> Kể về kỷ niệm thời học trò</li>
                  <li> Nghị luận về im lặng và lên tiếng</li>
                  <li>Lập dàn ý tả về mẹ</li>
                  <li>Thuyết  minh về cuốn sách ngữ văn lớp 8 tập 1</li>
                  <li>Lập dàn ý tả về người hàng xóm</li>
                  <li>Đề thi thử vợ chồng a phủ và chí phèo</li>
                 </ul>
                </div>
               </div>
            <div class="col">Nhiều Người Quan Tâm 
              <div style="cursor: pointer;">
               <ul class="d">
                 <li>Viết bài văn 200 chữa về nghề nghiệp tương lai</li>
                 <li> Tả cơn mưa mùa hạ lớp 5</li>
                 <li>Kể lại câu chuyện e đã chứng kiến</li>
                 <li>Dàn bài ước mơ của e lớp 10</li>
                 <li>Lập dàn ý bài thơ bài ca ngất ngưởng</li>
                </ul>
               </div>

            </div>
            <div class="col">Liên kết Nhanh
       	      <div style="cursor: pointer;">
               <ul class="e">
                 <li>Văn mẫu lớp 7</li>
                 <li>Văn mẫu lớp 8</li>
                 <li>Văn mẫu lớp 9</li>
                 <li>Văn mẫu lớp 10</li>
                 <li>Văn mẫu lớp 11</li>
                 <li>Văn mẫu lớp 12</li>
               </ul>
             </div>
            </div>
            </div>
        </div>
       </div>
        </div>
	</footer>


</body>

</html>