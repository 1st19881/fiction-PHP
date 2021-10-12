<?php include('../config/connect.php');

$author_id  = $_REQUEST['ID']; //$_REQUEST อ่านค่าได้ทั้ง post and get

$sql ="DELETE FROM author WHERE author_id='$author_id'";
$result_del = mysqli_query($conn,$sql); 


 mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล

if($result_del){
    echo "<script type='text/javascript'>";
    echo "alert('ลบสำเร็จ');";
    echo "window.location = 'actor.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('ลบไม่สำเร็จ');";
    echo "window.location = 'actor.php?act=delete'; ";
    echo "</script>";
  }
?>