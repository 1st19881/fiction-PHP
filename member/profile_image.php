<?php
    session_start();
   include('condb.php');

    if(isset($_POST['submit'])){
        $temp = explode('.',$_FILES['file']['name']);
        $new_name = round(microtime(true)*9999).'.'. end($temp);
        $url = '../assets/image/'. $new_name;
        
        if(move_uploaded_file($_FILES['file']['tmp_name'], $url) ){
            $sql = "UPDATE `member` SET `image` = '".$new_name."' WHERE id = '".$_SESSION['id']."' ";
            $result = $conn->query($sql) or die($con->error);
            if($result){
                $_SESSION['image'] = $new_name;
                echo '<script> alert("อัพเดทรูปภาพสำเร็จแล้ว") </script>';
                header('Refresh:0; url=profile.php');
            }
        }


    }else{
        header('location:../index.php');
    }
    

?>