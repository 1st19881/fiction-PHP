<meta charset="UTF-8">
<?php 

include('condb.php');
  
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit(); 


$o_id =  $_GET["o_id"];


	$sql = "UPDATE order_head SET 
    o_status = 4

	WHERE o_id=$o_id" ;

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");

	mysqli_close($conn);
	
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('ยกเลิกการสั่งซื้อ');";
        echo "window.location = 'order_cancel_detail.php?o_id=$o_id'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('ไม่สำเร็จ');";
        echo "window.location = 'order.php'; ";
        echo "</script>";
      }
?>