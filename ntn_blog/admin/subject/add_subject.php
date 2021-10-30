<?php 
require_once("../../db/dbhepler.php");
      
 ?>
 <?php  
 $id=$name=$img=$conten='';
  if(!empty($_POST))
  {
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
     
      $subject_name=$_POST['name'];
      $conten=$_POST['conten'];
      $anh=$_FILES['img']['name'];
      if(!empty($anh)){
          $tmp_name=$_FILES['img']['tmp_name'];
          $anh=$_FILES['img']['name'];
          $created_at=$updated_at=date('Y-m-d h:s:i');
          move_uploaded_file($tmp_name,"../../public/images".$anh);
          if($id){
            $sql ="UPDATE `subject` SET `subject_name`='$subject_name',
            `conten`='$conten',`image`='$anh',`created_at`='$created_at',`updated_at`='$updated_at'
             WHERE id=$id";

              
          }
          else{
              $sql="INSERT INTO `subject`(`subject_name`, `conten`, `image`, `created_at`, `updated_at`) 
          VALUES ('$subject_name','$conten','$anh','$created_at','$updated_at')";
          }
         
              executex($sql);
              header("location:list_subject.php");
              die();
            
              
          
 
      }
    } 
  if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sqx= "SELECT * FROM subject WHERE id=$id";
    $subject=executeSingleResult($sqx);
    if ($subject != null) {
       $name=$subject['subject_name'];
       $img=$subject['image'];
       $conten=$subject['conten'];

    }
}
?>
<!DOCTYPE html>

<head>
    <title>Add_Subject</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="../../public/css/style.css" rel='stylesheet' type='text/css' />
    <link href="../../public/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="../../public/css/font.css" type="text/css" />
    <link href="../../public/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="../../public/css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="../../public/js/jquery2.0.3.min.js"></script>
    <script src="../../public/js/raphael-min.js"></script>
    <script src="../../public/js/morris.js"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    tNt Coder
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">


                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="images/2.png">
                            <span class="username">Nguyễn Trọng Nghĩa</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="index.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Bảng Điều Kiển</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Môn Học</span>
                            </a>
                            <ul class="sub">
                                <li><a href="list_subject.php">Danh sách Môn Học </a></li>
                                <li><a href="glyphicon.html">Thêm Môn Học Mới </a></li>
                                <li><a href="grids.html">Tài Liệu</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Quản Lý Sinh Viên</span>
                            </a>
                            <ul class="sub">
                                <li><a href="basic_table.html">Danh sách Sinh Viên</a></li>
                                <li><a href="responsive_table.html">Responsive Table</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Tài Liệu Môn Học</span>
                            </a>
                            <ul class="sub">
                                <li><a href="form_component.html">Môn Học</a></li>
                                <li><a href="form_validation.html">Thêm tài liệu</a></li>
                                <li><a href="dropzone.html">Dropzone</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span>Mail </span>
                            </a>
                            <ul class="sub">
                                <li><a href="mail.html">Inbox</a></li>
                                <li><a href="mail_compose.html">Compose Mail</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="sub">
                                <li><a href="google_map.html">Google Map</a></li>
                                <li><a href="vector_map.html">Vector Map</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="login.html">
                                <i class="fa fa-user"></i>
                                <span>Login Page</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
               <!-- trang chính -->
               <div class="form-w3layouts">
        <!-- page áuodf-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Subject
                        </header>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subject Name</label>
                                    <input type="text" value="<?=$name?>" name="name" class="form-control" id="exampleInputEmail1" placeholder="Tên Môn Học ...">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputFile">Subject Avatarr :</label>
                                   
                                    <input type="file" name="img" id="exampleInputFile">
                                    <img style="width: 150px;" src="../../public/images<?=$img?>" alt="">
                                    
                                </div>
                                <div>
                                     <label for="exampleInputFile">Subject Conten :</label>
                                    <textarea name="conten" id="" cols="100" rows="10"><?=$conten?></textarea>
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
           </div>
            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p> Master NTN | Design by <a href="https://www.facebook.com/profile.php?id=100019319836961">NTN</a>
                    </p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <script src="../../public/js/bootstrap.js"></script>
    <script src="../../public/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../public/js/scripts.js"></script>
    <script src="../../public/js/jquery.slimscroll.js"></script>
    <script src="../../public/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="../../public/js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->
    <script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth: true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity: 0.85,
            data: [{
                    period: '2015 Q1',
                    iphone: 2668,
                    ipad: null,
                    itouch: 2649
                },
                {
                    period: '2015 Q2',
                    iphone: 15780,
                    ipad: 13799,
                    itouch: 12051
                },
                {
                    period: '2015 Q3',
                    iphone: 12920,
                    ipad: 10975,
                    itouch: 9910
                },
                {
                    period: '2015 Q4',
                    iphone: 8770,
                    ipad: 6600,
                    itouch: 6695
                },
                {
                    period: '2016 Q1',
                    iphone: 10820,
                    ipad: 10924,
                    itouch: 12300
                },
                {
                    period: '2016 Q2',
                    iphone: 9680,
                    ipad: 9010,
                    itouch: 7891
                },
                {
                    period: '2016 Q3',
                    iphone: 4830,
                    ipad: 3805,
                    itouch: 1598
                },
                {
                    period: '2016 Q4',
                    iphone: 15083,
                    ipad: 8977,
                    itouch: 5185
                },
                {
                    period: '2017 Q1',
                    iphone: 10697,
                    ipad: 4470,
                    itouch: 2038
                },

            ],
            lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
    </script>
    <!-- calendar -->
    <script type="text/javascript" src="../../public/js/monthly.js"></script>
    <script type="text/javascript">
    $(window).load(function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch (window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }

    });
    </script>
    <!-- //calendar -->
</body>

</html>