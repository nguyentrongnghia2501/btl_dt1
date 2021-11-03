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
