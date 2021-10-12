<?php 

error_reporting( error_reporting() & ~E_NOTICE );

include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;

$author_id   =  mysqli_real_escape_string($conn,$_POST['author_id']);
//echo $author_id;
$fiction_id =  mysqli_real_escape_string($conn,$_POST['fiction_id']);
$name =  mysqli_real_escape_string($conn,$_POST['name']);


$sql ="UPDATE  author SET
author_id='$author_id',
fiction_id='$fiction_id',
name='$name'
WHERE author_id='$author_id'";
    
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
          window.location = "actor.php";
        });
      }, 100);
    </script>
    ';
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ไม่สำเร็จ');";
  echo "window.location = 'actor.php?act=edit'; ";
  echo "</script>";
  }
?>  