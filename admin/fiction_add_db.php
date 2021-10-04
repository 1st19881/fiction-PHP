<?php error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;
$fg_address  =  mysqli_real_escape_string($conn,$_POST['fg_address']);
$fiction_id  =  mysqli_real_escape_string($conn,$_POST['fiction_id']);
$name_fiction =  mysqli_real_escape_string($conn,$_POST['name_fiction']);
$category_id =  mysqli_real_escape_string($conn,$_POST['category_id']);
$price_fiction =  mysqli_real_escape_string($conn,$_POST['price_fiction']);
$synopsis =  mysqli_real_escape_string($conn,$_POST['synopsis']);
$release_date =  mysqli_real_escape_string($conn,$_POST['release_date']);

$fileupload =(isset($_POST['example']) ? $_POST['example'] :'');
	$upload=$_FILES['example']['name'];
	if($upload !='') { 
		$path="../assets/PDF/file/";
		$path_copy=$path.$upload;
		$path_link="../assets/PDF/file/".$upload;
		move_uploaded_file($_FILES['example']['tmp_name'],$path_copy);  
	}else{
		$upload='';
	}

$sql ="INSERT INTO fiction
    
    (fiction_id,category_id,name_fiction, price_fiction, synopsis, release_date, example)VALUES('$fiction_id','$category_id', '$name_fiction','$price_fiction', '$synopsis', '$release_date', '$upload')";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';		
    if($result){
      echo '
      <script>
         setTimeout(function() {
        swal({
          title: "สำเร็จ",
          type: "success"
        }, function() {
          window.location = "fiction.php";
        });
      }, 100);
    </script>
    ';
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ไม่สำเร็จ');";
  echo "window.location = 'fiction.php'; ";
  echo "</script>";
  }
?>  