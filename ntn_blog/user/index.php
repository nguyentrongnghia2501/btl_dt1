<?php 
session_start();
if(!isset($_SESSION['name'])){
     header('location:login_use.php');
   
}
$emailx=$_SESSION['name'];
require_once("../db/dbhepler.php");
$sql= "SELECT * FROM notification WHERE statust=0";
$rs= mysqli_query($con,$sql);
$cout= mysqli_num_rows($rs);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!--link font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;600&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Orbitron:wght@500;600&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link href="../public/css/css_es/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/css_es/css/font-awesome.min.css" rel="stylesheet">
    <link href="../public/css/css_es/css/prettyPhoto.css" rel="stylesheet">
    <link href="../public/css/css_es/css/price-range.css" rel="stylesheet">
    <link href="../public/css/css_es/css/animate.css" rel="stylesheet">
    <link href="../public/css/css_es/css/main.css" rel="stylesheet">
    <link href="../public/css/css_es/css/responsive.css" rel="stylesheet">

    <title>Trọn Nghĩa BLog</title>
    <style>
    #warperx {
        max-width: 1170px;
        margin: 0px auto;
        
    }

    ul.products {
        display: flex;
        flex-wrap: wrap;
        /* dùng để xuống hàng */
        justify-content: space-between;
        /* dàn đều */
        list-style: none;
    }

    ul.products li .product_top .thumbnail {
        display: block;
    }

    ul.products li .product_top {
        position: relative;
        overflow: hidden;
    }

    ul.products li:hover .product_top .thumbnail {
        transform: scale(1.5);
        transition: 6s;
    }

    ul.products li .product_top .thumbnail img {
        display: block;
    }

    ul.products li .product_top a.buy_now {
        text-transform: uppercase;
        text-decoration: none;
        text-align: center;
        display: block;
        background-color: cornflowerblue;
        color: #fff;
        padding: 10px 0px;
        position: absolute;
        width: 100%;
        bottom: -45px;
        transition: 0.25s ease-in-out;
        opacity: 0.85;
    }

    ul.products li :hover a.buy_now {
        bottom: 0px;

    }

    ul.products li {
        flex-basis: 25%;
        padding-left: 15px;
        padding-right: 15px;
        box-sizing: border-box;
        margin-bottom: 20px;
    }

    ul.products li img {
        max-width: 100%;
        height: auto;
    }
    </style>

</head>

<body>


    <div id="warper">
        <header>
            <div class="inner-heder container">
                <a href="" id="logo"> tnt Coder</a>

                <nav>
                    <ul id="main_menu">
                        <li><a href="index.php">Trang Chủ <i class="fas fa-home"></i></a></li>

                        <!-- Thông Báo  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Thông Báo <i class="far fa-bell"> <span
                                        class="badge bg-danger"><?php echo $cout; ?></span></i>
                            </a>
                            <ul class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
                                <?php 
                                
                                $sqx="SELECT * FROM notification WHERE statust=0";
                                $nt= mysqli_query($con,$sqx);
                                while($rows=mysqli_fetch_array($nt))
                                {  ?>
                                <li><a class="dropdown-item" href="#"><?php echo $rows['noti_name'];?></a></li>
                                <?php }
                                ?>


                            </ul>
                        </li>

                      
                        <li><a href="#warperx">Môn Học <i class="fas fa-code"></i></a></li>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                               
                                
                            </a>
                            <ul class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="#">Đổi Mật Khẩu</a></li>
                                <li><a class="dropdown-item" href="logout_use.php">Đăng Xuất</a></li>

                                
                            </ul>
                        </li>
                        <li style="padding-top: 5px;">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </li>

                    </ul>

                </nav>

        </header>
        <div class="container-fulid banner">

            <div id="More" style="margin-left:45%;padding-top: 12rem; color: azure;">
                <p style="margin-left: -2rem;">Studeon Innovative & Succesfull</p>
                <h1 style="margin-left: -17rem;text-transform: uppercase;font-family: 'Anton', sans-serif;">If you don't
                    start working, nothing is possible. </h1>
                <button style="color: #fff;background-color: #26b15b;width: 10rem;height: 3.5rem;" type="button"
                    class="btn btn">More Courses</button>
            </div>

        </div>

    </div>
    </div>
    <!--  giới thiệu -->
    <div class="container">
         <div class="row" style="padding: 35px;">
           <div class="col-md-6">
          <p style="font-size: 50px; color: cyan;"> Về tnt coder</p>
                 <p> tnt coder là nơi chia sẻ kinh nghiệm giúp có những ai muốn phát triển sự nghiệp theo nghề lập trình web có một lộ trình cụ thể để có công việc thu nhập từ 8-30tr/tháng. Bắt đầu hoạt động 10/2021 đến nay đã có trên 2.500 học viên tin tưởng theo học và đã đi làm tốt. Bây giờ đến lượt bạn!</p>
                  
           </div>
           <div class="col-md-6">
              <img style="width: 600px;height: 300px;" src="../public/images/gioithieunt.jpg" alt="">
           </div>
         </div>
         <hr style="text-shadow: 1px 1px 2px black, 0px 0px 30px #c4ef26;">
     
    </div>
    <!-- x -->
    <div class="container-fulid">
        <div id="warperx">
          <h1 style="text-align: center;">Các Môn Học</h1>
            <ul class="products">
                <?php 
              $limit=8; // số sản phẩm trong 1 trang
              $page =1;// trang bắt đầu =1 
              if(isset($_GET['page'])){
                  $page=$_GET['page'];
              }
              $fristIndex=($page-1)*$limit;
              // xác định trang cần lấy sản phẩm
              $sql ="SELECT * FROM subject WHERE 1 LIMIT ".$fristIndex." ,".$limit;
              $rx=mysqli_query($con,$sql);
              $sql="SELECT count(id) as total FROM subject "; // dùng để đếnm
              $countResult = executeSingleResult($sql);
              $count = $countResult['total'];
              $number= ceil($count/$limit) ; //ceil là hàm làm tròn trên
          
              while($row=mysqli_fetch_array($rx)){ ?>

                <li>
                    <div class="product-item">
                        <div class="product_top">
                            <a href="" class="thumbnail">
                                <img style="height: 250px;width: 400px;" src="../public/images<?php echo $row['image'];?>" alt="">
                            </a>
                            <a href="detail.php?id=<?php echo $row['id'];?>" class="buy_now">Chi Tiết</a>
                            <!-- mua ngay -->
                        </div>
                        <div class="product-info">
                         <p style="text-align: center;color: #ca777f;"><?php echo $row['subject_name'];?></p> 
                        
                        </div>
                    </div>
                </li>

                <?php  }
          ?>
          </ul>

        </div>
        <ul class="pagination" style="padding-left: 45%;">
                    <?php
                      if($page>1){
                          echo'
                          <li class="page-item"><a class="page-link" href="?page='.($page-1).'"><i class="fas fa-angle-double-left"></i></a></li>
                          ';
                      }
                     
                    ?>

                    <?php
                    for ($i=0; $i <$number; $i++) { 
                        if($page==$i+1){
                            echo '
                            <li class="page-item active" ><a style="background-color: #000;color: #fff;"" class="page-link" href="#">'.($i+1).'</a></li>
                           ';
                        }
                        else{
                              echo '
                         <li class="page-item" ><a style="background-color: #000;color: #fff;"" class="page-link" href="?page='.($i+1).'">'.($i+1).'</a></li>
                        ';
                        }
                     
                       
                    }
                    ?>
                    <!-- sử lý next -->
                    <a href="" style="color: #fff;"></a>
                    <?php
                      if($page<($number)){
                          echo'
                          <li class="page-item" ><a  style="background-color: #000;color: #fff;"" class="page-link" href="?page='.($page+1).'"><i class="fas fa-angle-double-right"></i></a></li>
                          ';
                      }
                     
                    ?>

                </ul>
    </div>
    <!-- scrip -->
    <script src="https://code.jquery.com/jquery-3.6.0.js">
    </script>
    <script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('header').addClass('sticky');
            } else {
                $('header').removeClass('sticky');
            }
        });
    });
    </script>
</body>

</html>