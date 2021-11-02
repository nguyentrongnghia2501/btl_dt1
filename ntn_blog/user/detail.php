<?php 
require_once("../db/dbhepler.php");

?>
<?php
             if(isset($_GET['id']))
             {
                 $id=$_GET['id'];
                 $sql= "SELECT * FROM subject WHERE id=$id";
                $subject= executeSingleResult($sql);
                if($subject != null){
                    $subject_name =$subject['subject_name'];
                }
            }
           
           ?>  

<?php 
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

                       
                        <li><a href="#">Môn Học <i class="fas fa-code"></i></a></li>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../public/images/g2.jpg" alt="Avatar Logo" style="width:40px;"
                                    class="rounded-pill">
                            </a>
                            <ul class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="#">Đổi Mật Khẩu</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>

                                <li><a class="dropdown-item" href="#">Something else here</a></li>
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
    <section id="main-content">
	<section id="main" class="wrapper">
    <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
                        </div>
                        
                        <div>
                            <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                                <thead>
                                    <tr>
                                        <th data-breakpoints="xs">STT</th>
                                        <th>Họ Và Tên</th>
                                        <th>Ảnh Đại Diện</th>
                                        <th>Điểm</th>
                                       
                                        <th>Môn Đang Theo Học Học</th>
                                        <th>Gmail</th>
                                        

                                   
                                    </tr>
                                </thead>
                                <tbody>
	   <!-- trang chính -->  
       <?php 
         $sql="Select student.id,student.name_student,student.avatar,student.point,student.password,student.email,student.created_at,
         student.updated_at, subject.subject_name subject_subject_name
         from student left join subject on student.id_subject=subject.id where subject.id=".$id;
        //  $sql ='select  product.id,product.title, product.price , product.thumbnail,product.updated_at,
        //  category.name category_name from product left join category on product.id_category=category.id
        //  where category.id='.$id;
        $rs= mysqli_query($con,$sql);
                                $index=1;
                                while ($row=mysqli_fetch_array($rs)) { ?>
                                    <tr>
                                        <td><?php echo $index++ ?></td>
                                        <td><?php echo $row['name_student'];?></td>
                                        <img src="" alt="">
                                        <td><img style="width: 100px;" src="../public/images<?php echo $row['avatar'];?>" alt=""></td>
                                        <td><?php echo $row['point'];?></td>
                                       
                                        <td><?php echo $row['subject_subject_name'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                     
                                  
                                       
                                    </tr>
                                    <?php } ?>
     
      
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
		
    



		
</section>
<section>

<div class="container-fulid">
        <div id="warperx">
          <h1 style="text-align: center;">Tài Liệu Môn Học</h1>
            <ul class="products">
                <?php 
            
              
           $sql="Select document.id,document.title,document.filewd,document.created_at,document.updated_at, subject.subject_name subject_subject_name
           from document left join subject on document.id_subject=subject.id where subject.id=$id ";
              $rx=mysqli_query($con,$sql);
            
          
              while($row=mysqli_fetch_array($rx)){ ?>

                <li>
                    <div class="product-item">
                        <div class="product_top">
                            <a href="" class="thumbnail">
                                <img style="height: 250px;width: 400px;" src="../public/images/word.png" alt="">
                            </a>
                            <a href="../admin/document/download.php?file=<?php echo $row['filewd']?>" class="buy_now">Download</a>
                            <!-- mua ngay -->
                        </div>
                        <div class="product-info">  <a href=""></a>
                         <p style="text-align: center;color: #ca777f;"><?php echo $row['title'];?>  
                        
                        </div>
                    </div>
                </li>

                <?php  }
          ?>
          </ul>

        </div>
       
    </div>

</section>
<div class="container">
    <?php 
       if(isset($_POST['submit']))
       {
           
       }
    
    ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Comment!</h3>
            <form action="post">
                <section>
            <textarea name="coment" style="width: 100%;" id="" cols="30" rows="10" placeholder="Viết vào đây ..."></textarea>
        </section>
        <section><input type="submit" value="Bình luận" name="submit"></section>
            </form>
        
        </div>
        <div class="col-md-4"></div>
    </div>
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