<?php 
  require_once("../../db/dbhepler.php");
  if(isset($_GET['id'])){
      $id=$_GET['id'];
     
  }

?>
<?php 
    $sql="DELETE FROM `subject` WHERE id=$id";
    executex($sql);
    header('location:list_subject.php');
    die();

?>