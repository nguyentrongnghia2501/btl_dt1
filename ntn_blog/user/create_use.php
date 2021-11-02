<?php
  require_once("../db/dbhepler.php");

  
  if (!empty($_POST['add'])) {
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$name = str_replace('"', '\\"', $name);
	}

	if (isset($_FILES['avatar'])) {
        $anh=$_FILES['avatar']['name'];

	}
    if (isset($_POST['pass'])) {
        $pass=$_POST['pass'];
        $pass = str_replace('"', '\\"', $pass);
	}
  
    if (isset($_POST['email'])) {
        $email=$_POST['email'];
        $email = str_replace('"', '\\"', $email);
	}
	if (isset($_POST['id_subject'])) {
		$id_subject = $_POST['id_subject'];
	}
    
	if (!empty($name)) {
        $tmp_name=$_FILES['avatar']['tmp_name'];
        $anh=$_FILES['avatar']['name'];
        move_uploaded_file($tmp_name,"../public/images/".$anh);
        
		$created_at = $updated_at = date('Y-m-d H:s:i');
      
		
            $sql="INSERT INTO `student`(`name_student`, `avatar`, `password`, `email`, `id_subject`, `created_at`, `updated_at`) 
         VALUES ('$name','$anh','$pass','$email','$id_subject','$created_at','$updated_at')";
        

		executex($sql);

		header('Location: index.php');
		die();
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <img src="../public/images/" alt="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Login</title>
    <link rel="stylesheet" href="../public/css/create_acc.css">
</head>

<body>
    <div id="Warper">
        <form action="" method="post" id="from_login" role="form" enctype="multipart/form-data">
            <h1 style="font-size: 25px; color: #fff; text-align: center; margin-bottom: 30px;">Login</h1>
            <div class="from_group">
                <input type="text" placeholder="Họ và Tên" name="name">

            </div>
            
            <div class="from_group">
            <input type="password" value="" name="pass" class="form-control" id="exampleInputEmail1" placeholder="password ...">

            </div>
            <div class="from_group">
                <label for="">Avatar</label>
            <input type="file" name="avatar" id="exampleInputFile">
            </div>
            <div class="from_group">
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="gmail ...">
            </div>
            <div class="from_group">
            <select class="form-select"  name="id_subject" aria-label="Default select example">
  <option selected>Chọn Môn Học</option>
  <?php 
                                $sql="SELECT * FROM subject";
                                $reslut= mysqli_query($con,$sql);
                                while ($rows=mysqli_fetch_array($reslut)) { ?>
                                  <option value="<?php echo $rows['id'];?>"><?php echo $rows['subject_name'];?></option>
                                    


                              <?php  }
                                ?>
</select>
            </div>
            <div class="from-submit">
                <input type="submit" value="Đăng Ký" name="add">
            </div>
            <a href="login_use.php" style="text-decoration: none; color:#FFF;text-align: center;">Đăng Nhập</a>
            <div style=" width: 220px; height:25px;color:  #FFF; margin-left: 70px;margin-top: 20px; ">
                <?php
                       if(isset($_SESSION['error'])){
                           echo $_SESSION['error'];
                       }
                       elseif(isset($_SESSION['warring']))
                       {
                           echo $_SESSION['warring'];
                       }
                     ?>
            </div>
        </form>

    </div>
</body>

</html>