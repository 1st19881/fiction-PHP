<?php error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;
$name  =  mysqli_real_escape_string($conn,$_POST['name']);
$birthday  =  mysqli_real_escape_string($conn,$_POST['birthday']);
$email =  mysqli_real_escape_string($conn,$_POST['email']);
$username =  mysqli_real_escape_string($conn,$_POST['username']);
$password =  mysqli_real_escape_string($conn,$_POST['password']);
$image2 =  mysqli_real_escape_string($conn,$_POST['image2']);
$id =  mysqli_real_escape_string($conn,$_POST['id']);

$fileupload =(isset($_POST['image']) ? $_POST['image'] :'');
	$upload=$_FILES['image']['name'];
	if($upload !='') { 
		$path="../assets/image/m_img/";
		$path_copy=$path.$upload;
		$path_link="../assets/image/m_img/".$upload;
		move_uploaded_file($_FILES['image']['tmp_name'],$path_copy);  
	}else{
		$upload='$image2';
	}

$sql ="UPDATE member SET 
       name='$name',
       birthday='$birthday',
       email = '$email',
       username='$username',
       password='$password',
       image='$upload'
       WHERE id='$id'";
    
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
          window.location = "profile.php";
        });
      }, 100);
    </script>
    ';
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ไม่สำเร็จ');";
  echo "window.location = 'profile.php'; ";
  echo "</script>";
  }
?>  