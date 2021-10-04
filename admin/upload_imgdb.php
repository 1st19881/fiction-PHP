<?php error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;
$figure_id  =  mysqli_real_escape_string($conn,$_POST['figure_id']);
$fiction_id  =  mysqli_real_escape_string($conn,$_POST['fiction_id']);
$name =  mysqli_real_escape_string($conn,$_POST['name']);

$fileupload =(isset($_POST['fg_address']) ? $_POST['fg_address'] :'');
	$upload=$_FILES['fg_address']['name'];
	if($upload !='') { 
		$path="../assets/image/figure_fiction/";
		$path_copy=$path.$upload;
		$path_link="../assets/image/figure_fiction/".$upload;
		move_uploaded_file($_FILES['fg_address']['tmp_name'],$path_copy);  
	}else{
		$upload='';
	}

$sql ="INSERT INTO figure_fiction(figure_id,name,fiction_id,fg_address)VALUES('$figure_id','$name','$fiction_id','$upload')";
    
$result = mysqli_query($conn, $sql);

$sql2 ="UPDATE fiction SET figure_id='$figure_id' WHERE fiction_id='$fiction_id'";
$result2 = mysqli_query($conn, $sql2);

    if($result){
      echo "<script type='text/javascript'>";
      echo "alert('สำเร็จ');";
      echo "window.location = 'upload.php?fiction_id=$fiction_id' ";
      echo "</script>";
      }
      else{
      echo "<script type='text/javascript'>";
      echo "alert('Error back to delete again');";
      echo "window.location = 'upload.php?fiction_id=$fiction_id'; ";
      echo "</script>";
    }
?>  