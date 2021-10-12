<meta charset="UTF-8">
<?php 

include('condb.php');
  
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit(); 



$o_slip_total =  $_POST["o_slip_total"];
$o_slip_date =  $_POST["o_slip_date"];
$o_id =  $_POST["o_id"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$o_slip = (isset($_REQUEST['o_slip']) ? $_REQUEST['o_slip'] : '');
	$upload=$_FILES['o_slip']['name'];
	if($upload !='') { 

		$path="../assets/image/slip/";
		$type = strrchr($_FILES['o_slip']['name'],".");
		$newname ='slip'.$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../assets/image/slip/".$newname;
		move_uploaded_file($_FILES['o_slip']['tmp_name'],$path_copy);  
	}else{
		$newname='';
	}



	$sql = "UPDATE order_head SET 
	o_slip_total='$o_slip_total',
    o_slip_date = '$o_slip_date',
    o_status = 2,
    o_slip='$newname'
	WHERE o_id=$o_id" ;

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");

	mysqli_close($conn);
	
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('แจ้งชำระเงินสำเร็จ');";
        echo "window.location = 'payment_detail.php?o_id=$o_id'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('แจ้งชำระเงินไม่สำเร็จ');";
        echo "window.location = 'order.php'; ";
        echo "</script>";
      }
?>