<?php 
  require_once("../../db/dbhepler.php");
  if(isset($_GET['id'])){
      $id=$_GET['id'];
     
  }

?>
<?php 
    $sql="DELETE FROM `student` WHERE id=$id";
    executex($sql);
    header('location:index.php');
    die();

?>