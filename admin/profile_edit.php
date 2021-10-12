<?php  include('condb.php');

$id = $_SESSION['id'];

$sql="SELECT * FROM member WHERE id='$id' ";
$rs_m = mysqli_query($conn,$sql);
$row_m=mysqli_fetch_array($rs_m);

?>
<div class="col-md-12">
<form  name="register" action="profile_edit_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-md-12" align="center">
      <h4> แก้ไขข้อมูลส่วนตัว </h4><hr>
    </div>
  </div>

 

  <div class="form-group">
    <div class="col-sm-2" align=""> ชื่อ-นามสกุล :</div>
    <div class="col-md-12" align="left">
      <input  name="name" type="text" required class="form-control"  value="<?php echo $row_m['name']; ?>">  
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align=""> วันเดือนปีเกิด :</div>
    <div class="col-md-12" align="left">
      <input  name="birthday" type="date" required class="form-control" id="birthday" value="<?php echo $row_m['birthday']; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align=""> อีเมล :</div>
    <div class="col-md-12" align="left">
      <input  name="email" type="text" required class="form-control" id="email" value="<?php echo $row_m['email']; ?>">
    </div>

  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> ชื่อผู้ใช้งาน :</div>
    <div class="col-md-12" align="left">
      <input  name="username" type="username" required class="form-control" id="username" value="<?php echo $row_m['username']; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align=""> รหัสผ่าน:</div>
    <div class="col-md-12" align="left">
      <input  name="password" type="password" required class="form-control" id="password" placeholder="" value="<?php echo $row_m['password']; ?>">
    </div>
   
    </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> ภาพ :</div>
    <div class="col-md-12" align="left">
      <input  name="image" type="file" required class="form-control" id="image" >
      <img src="../assets/image/m_img/value="<?php echo $row_m['image']; ?>"" alt="">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-md-12" align="right">
      <input type="hidden" name="image2" id="" value="<?php echo $row_m['image']; ?>">
        <input type="hidden" name="id" value="<?php  echo $id;  ?>">
      <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span> บันทึก  
      </button> <a href="profile.php" type="button" class="btn btn-danger btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span> ยกเลิก  </a>
    </div>
    
  </div>
</form>
</div>