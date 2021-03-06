<?php 
require_once("../../db/dbhepler.php");

?>
<!-- ccsas -->
<!DOCTYPE html>
<head>
<title>admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() 
{ setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="../../public/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="../../public/css/style.css" rel='stylesheet' type='text/css' />
<link href="../../public/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="../../public/css/font.css" type="text/css"/>
<link href="../../public/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="../../public/css/morris.css" type="text/css"/>
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
                <img alt="" src="../../public/images/2.png">
                <span class="username">Nguy???n Tr???ng Ngh??a</span>
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
                    <a class="active" href="../subject/index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>B???ng ??i???u Ki???n</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>M??n H???c</span>
                    </a>
                    <ul class="sub">
						<li><a href="../subject/list_subject.php">Danh s??ch M??n H???c </a></li>
						<li><a href="../subject/add_subject.php">Th??m M??n H???c M???i </a></li>
                        
                    </ul>
                </li>
               
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Qu???n L?? Sinh Vi??n</span>
                    </a>
                    <ul class="sub">
                        <li><a href="index.php">Danh s??ch Sinh Vi??n</a></li>
                        <li><a href="add_student.php">Th??m Sinh Vi??n</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>T??i Li???u M??n H???c </span>
                    </a>
                    <ul class="sub">
                        <li><a href="../document/index.php">T??i Li???u</a></li>
                        <li><a href="../document/add_document.php">Th??m t??i li???u</a></li>
					
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
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	  

	   <!-- trang ch??nh -->
       <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh s??ch sinh vi??n
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
                                        <th>H??? V?? T??n</th>
                                        <th>???nh ?????i Di???n</th>
                                        <th>??i???m</th>
                                        <th>password</th>
                                        <th>M??n ??ang Theo H???c H???c</th>
                                        <th>Gmail</th>
                                        

                                   
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                   
                                 $sql="Select student.id,student.name_student,student.avatar,student.point,student.password,student.email,student.created_at,
                                 student.updated_at, subject.subject_name subject_subject_name
                                 from student left join subject on student.id_subject=subject.id";
                                $rs= mysqli_query($con,$sql);
                                $index=1;
                                while ($row=mysqli_fetch_array($rs)) { ?>
                                    <tr>
                                        <td><?php echo $index++ ?></td>
                                        <td><?php echo $row['name_student'];?></td>
                                        <img src="" alt="">
                                        <td><img style="width: 100px;" src="../../public/images<?php echo $row['avatar'];?>" alt=""></td>
                                        <td><?php echo $row['point'];?></td>
                                        <td><?php echo $row['password'];?></td>
                                        <td><?php echo $row['subject_subject_name'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                      <th data-breakpoints="xs"><a href="delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash-o"></i></a>
                                       <a href="add_student.php?id=<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o"></i></a>
                                      <a href=""><i class="fa fa-info-circle"></i></a>
                                    </th>  
                                       
                                    </tr>
                                    <?php } ?>
         
         



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
		
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p> Master NTN | Design by <a href="https://www.facebook.com/profile.php?id=100019319836961">NTN</a></p>
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
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
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
		$(window).load( function() {

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

		switch(window.location.protocol) {
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
