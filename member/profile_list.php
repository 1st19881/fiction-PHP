<?php 
    require_once('condb.php');
    if(!isset($_SESSION['id'])){
        header('location:index.php');
    }

    $sql = "SELECT * FROM `member` WHERE `id` = '".$_SESSION['id']."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$result->num_rows){
        header('location:index.php');
    } 
?>
<style>
        .img-profile{
            width: 150px;
            height: 150px;
            text-align: center;
            margin: 0 auto;
            display: block;
        }
        .profile-top{
            margin-top: -100px;
        }

    </style>
    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container my-5 my-sm-1">
            <h1 class="">ประวัติส่วนตัว</h1>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-12 profile-top">
                <img src="../assets/image/<?php echo $row['image']; ?>" class="my-3 img-profile rounded-circle img-thumbnail" alt="image Profile">

                <div class="card">
                    <div class="card-body">
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="username">ชื่อผู้ใช้งาน</label>
                                <input type="text" class="form-control" id="username" value="<?php echo $row['username']; ?>" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">ชื่อ - นามสกุล </label>
                                <input type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">อีเมลล์ </label>
                                <input type="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">วันเดือนปีเกิด</label>
                                <input type="date" class="form-control" id="date" value="0<?php echo $row['birthday']; ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">รหัสผ่าน</label>
                                <input type="password" class="form-control" id="password" value="0<?php echo $row['password']; ?>" disabled>
                            </div>
                        </div>
                            <a href="profile_edit.php" class="btn btn-warning float-right">แก้ไขข้อมูล</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   