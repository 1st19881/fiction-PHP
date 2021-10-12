<?php session_start();
    require_once('condb.php');
    if(isset($_POST['submit']) && $_SESSION['id']){
        $sql = "UPDATE `member` SET 
        `email` = '".$_POST['email']."',
        `name` = '".$_POST['name']."', 
        `birthday` = '".$_POST['birthday']."', 
        `username` = '".$_POST['username']."', 
        `password` = '".$_POST['password']."'
         WHERE `id` = '".$_SESSION['id']."' ";

         $result = $conn->query($sql) or die($conn->error);

         if($result){
            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มข้อมูลเรียบร้อย');";
            echo "window.location = 'profile.php'; ";
            echo "</script>";
            }else{
            echo "<script type='text/javascript'>";
            echo "window.location = 'profile.php'; ";
            echo "</script>";
        }
    }
    

?>