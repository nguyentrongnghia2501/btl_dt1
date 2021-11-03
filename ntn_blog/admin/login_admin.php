<?php
   session_start();
  require_once("../db/dbhepler.php");
  
   if(isset($_POST['login']))
   {
           if(empty($_POST['email'])|| empty($_POST['password'])){
             $_SESSION['error']="Vui lòng điền tài khoản và mật khẩu";
           }
           else{
             
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sqx= "select *from student where email ='$email' and password='$password'";
            // truy vấn và sét tài khoản mật khẩu có giống databasse
            $re= mysqli_query($con,$sqx);
            // truy vấn vào csdl
            if(mysqli_num_rows($re)>0){
                      header("location:index.php");
            }
            else{
                $_SESSION['warring'] = "Sai tài khoản hoặc mật khẩu";
            }
      
         }
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
        <form action="" method="post" id="from_login" role="form">
            <h1 style="font-size: 25px; color: #fff; text-align: center; margin-bottom: 30px;">Login</h1>
            <div class="from_group">
                <input type="text" placeholder="Tên Đăng Nhập" name="email">

            </div>
            <div class="from_group">
                <input type="password" placeholder="Mật Khẩu" name="password">

            </div>
            <div class="from-submit">
                <input type="submit" value="Đăng Nhập" name="login">
            </div>
            <a href="create_use.php" style="text-decoration: none; color:#FFF;text-align: center;">Create A New Account ?</a>
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