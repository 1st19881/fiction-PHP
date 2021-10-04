<?php error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;
$id_file  =  mysqli_real_escape_string($conn,$_POST['id_file']);
$fiction_id  =  mysqli_real_escape_string($conn,$_POST['fiction_id']);


$fileupload =(isset($_POST['file_pdf']) ? $_POST['file_pdf'] :'');
	$upload=$_FILES['file_pdf']['name'];
	if($upload !='') { 
		$path="../assets/PDF/pfd_file/";
		$path_copy=$path.$upload;
		$path_link="../assets/PDF/pfd_file/".$upload;
		move_uploaded_file($_FILES['file_pdf']['tmp_name'],$path_copy);  
	}else{
		$upload='';
	}

$sql ="INSERT INTO file_fiction(id_file,fiction_id,file_pdf)VALUES('$id_file','$fiction_id','$upload')";
    
$result = mysqli_query($conn, $sql);

$sql2 ="UPDATE fiction SET id_file='$id_file' WHERE fiction_id='$fiction_id'";
$result2 = mysqli_query($conn, $sql2);

    if($result){
      echo "<script type='text/javascript'>";
      echo "alert('สำเร็จ');";
      echo "window.location = 'upload.php?act=file&fiction_id=$fiction_id' ";
      echo "</script>";
      }
      else{
      echo "<script type='text/javascript'>";
      echo "alert('Error back to delete again');";
      echo "window.location = 'upload.php?act=file&fiction_id=$fiction_id'; ";
      echo "</script>";
    }
?>  