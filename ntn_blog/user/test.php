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

    <title>Tr???n Ngh??a BLog</title>

</head>

<body>


    <div id="warper">
        <header>
            <div class="inner-heder container">
                <a href="" id="logo"> tnt Coder</a>

                <nav>
                    <ul id="main_menu">
                        <li><a href="#">Trang Ch??? <i class="fas fa-home"></i></a></li>
                        
                          <!-- Th??ng B??o  -->
<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Th??ng B??o <i class="far fa-bell"> <span class="badge bg-danger"><?php echo $cout; ?></span></i>
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
                          
                        <li><a href="#">Xem ??i???m</a></li>
                        <li><a href="#">M??n H???c <i class="fas fa-code"></i></a></li>
                       
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../public/images/g2.jpg" alt="Avatar Logo" style="width:40px;"
                                        class="rounded-pill">
                            </a>
                            <ul class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown" >

                                <li><a class="dropdown-item" href="#">?????i M???t Kh???u</a></li>
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
    <!-- x -->
    
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