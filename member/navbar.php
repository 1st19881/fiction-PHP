<?php session_start();
include('condb.php') ;

$id= $_SESSION['id'];

$sql="SELECT * FROM member WHERE id='$id' ";
$rs= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($rs);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-warning  fixed-top">
  <a class="navbar-brand" href="index.php">NovelBook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="#">หมวดหมู่</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#">มาใหม่</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ยอดนิยม</a>
      </li>
      <li class="nav-item ">
        <a href="cart.php" class="nav-link ">
        <i class="fas fa-shopping-cart"></i> ตะกร้าสั่งซื้อ ( <?php 
                    echo (isset($_SESSION['cart']) && count($_SESSION['cart'])) > 0 ? count($_SESSION['cart']):'0';
                ?> )
        </a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="s" placeholder="Search" aria-label="ค้นหา">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
    </form>
    <ul class="nav justify-content-center">
    <li class="nav-item">
    <!-- <a class="nav-link" href=""><php echo $_SESSION['name'];?>
    <img src="../assets/image/<php echo $row['image'];?>" class="rounded-circle"  width="30px" alt="">
    </a> -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php echo $_SESSION['name'];?>
    <img src="../assets/image/<?php echo $row['image'];?>" class="rounded-circle"  width="35px" height="35px" alt="">
    
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php">ประวัติส่วนตัว</a>
          <a class="dropdown-item" href="order.php">ประวัติการสั่งซื้อ</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php?act=login">ออกจากระบบ</a>
        </div>
      </li>
    </ul>
  </div>
</nav>