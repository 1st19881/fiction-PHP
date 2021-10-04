<?php error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');



$figure_id  =  $_GET['figure_id'];

$sql ="DELETE FROM figure_fiction WHERE figure_id='$figure_id' ";
    
$result = mysqli_query($conn, $sql);


    if($result){
      echo "<script type='text/javascript'>";
      echo "alert('สำเร็จ');";
      echo "window.location = 'fiction.php' ";
      echo "</script>";
      }
      else{
      echo "<script type='text/javascript'>";
      echo "alert('Error back to delete again');";
      echo "window.location = 'fiction.php'; ";
      echo "</script>";
    }
?>  