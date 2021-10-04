<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha">
            <a class="navbar-brand" href="index.php">NovelBook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarKey">
              <ul class="navbar-nav ml-auto text-center">

                <?php if(isset($_SESSION['id'])){ ?>

                <li class="nav-item  ">
                    <a class="nav-link" href="">หมวดหมู่ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="new-arrival-blog.php">มาใหม่</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="popular.php">ยอดนิยม</a>
                </li>

                <li class="nav-item dropdown ml-auto ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['name']; ?>
                    <img src="assets/image/<?php echo $_SESSION['image']; ?>" class="rounded-circle"  width="30px" alt="">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">ประวัติส่วนตัว</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="php/logout.php">ออกจากระบบ</a>
                  </div>
                </li>
                <?php } else{ ?>
                
                <li class="nav-item active ">
                    <a class="nav-link" href="">หมวดหมู่ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="new-arrival-blog.php">มาใหม่</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="popular.php">ยอดนิยม</a>
                </li>

                <li class="nav-item ml-auto">
                  <a class="btn btn-success mt-1 m-md-1 px-4 " href="index.php?act=login">เข้าสู่ระบบ</a>
                </li>
                <li class="nav-item ml-auto">
                  <a class="btn btn-warning mt-1 m-md-1 px-3 " href="index.php?act=register">สมัครสมาชิก</a>
                </li>
            
                <?php  } ?>
              </ul>
            </div>
    </nav>


