<?php  include('condb.php');

$id = $_SESSION['id'];

$sql="SELECT * FROM member WHERE id='$id' ";
$rs_m = mysqli_query($conn,$sql);
$row_m=mysqli_fetch_array($rs_m);

?>
<div class="col-md-12">
<form  name="register" action="profile.php?act=edit" method="POST" enctype="multipart/form-data" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-md-12" align="center">
      <h4> ข้อมูลส่วนตัว </h4><hr>
    </div>
  </div>

<center> <img src="../assets/image/m_img/<?php echo $row_m['image']; ?>" class="img-circle" width="100px" alt=""></center>

  <div class="form-group">
    <div class="col-sm-2" align=""> ชื่อ-นามสกุล :</div>
    <div class="col-md-12" align="left">
      <input  name="name" type="text" required class="form-control"  value="<?php echo $row_m['name']; ?>" readonly>  
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align=""> วันเดือนปีเกิด :</div>
    <div class="col-md-12" align="left">
      <input  name="birthday" type="date" required class="form-control" id="birthday" value="<?php echo $row_m['birthday']; ?>" readonly>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align=""> อีเมล :</div>
    <div class="col-md-12" align="left">
      <input  name="email" type="text" required class="form-control" id="email" value="<?php echo $row_m['email']; ?>" readonly>
    </div>

  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> ชื่อผู้ใช้งาน :</div>
    <div class="col-md-12" align="left">
      <input  name="username" type="username" required class="form-control" id="username" value="<?php echo $row_m['username']; ?>" readonly>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align=""> รหัสผ่าน:</div>
    <div class="col-md-12" align="left">
      <input  name="password" type="text" required class="form-control" id="password" placeholder="" value="<?php echo $row_m['password']; ?>" readonly>
    </div>
   


  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-md-12" align="right">
      <br>
      <button type="submit" class="btn btn-success btn-flat col-2" id="btn"><span class="glyphicon glyphicon-saved"></span> แก้ไข 
    </div>
    
  </div>
</form>
</div>