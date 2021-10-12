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
            <img src="../assets/image/<?php echo $row['image']; ?>" class=" img-profile rounded-circle img-thumbnail" alt="image Profile">
            <!-- Button trigger modal **mx-auto d-block=เอาวัตถุไปอยู่ตรงกลาง-->
            <button type="button" class="btn mx-auto d-block my-3 btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            เปลี่ยนรูปภาพ
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">อัปโหลดรูปภาพ</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="profile_image.php" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="customFile" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <figure class="figure text-center d-none mt-2">
                                    <img id="imgUpload" class="figure-img img-fluid rounded " alt=""> 
                                    </figure>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
             <!-- /Modal -->

            <div class="card">
                <div class="card-body">
                    <form id="formUpdate" method="POST" action="profile_edit_db.php">
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="username">ชื่อผู้ใช้งาน</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?> " >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">ชื่อ - นามสกุล </label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">อีเมลล์ </label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">วันเดือนปีเกิด</label>
                                <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['birthday']; ?>" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">รหัสผ่าน</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>" >
                            </div>
                            
                            
                            
                        </div>
                        <a href="profile.php" class="btn btn-warning float-left">
                            ย้อนกลับ
                        </a>
                        
                            <input type="submit" name="submit" class="btn btn-primary float-right" value="บันทึกข้อมูล">
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="http://code.jquery.com/jquery-latest.js"></script>

<script>
    $('.custom-file-input').on('change', function(){
                var fileName = $(this).val().split('\\').pop()
                $(this).siblings('.custom-file-label').html(fileName)

                if (this.files[0]){
                    var reader = new FileReader()
                    $('.figure').addClass('d-block')
                    reader.onload = function (e){
                        $('#imgUpload').attr('src', e.target.result).width(240)

                        
                    }
                    reader.readAsDataURL(this.files[0])
                }
    })
</script>
