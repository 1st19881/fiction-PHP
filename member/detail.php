<?php  include('condb.php');

$fiction_id =$_GET['fiction_id'];

$sql5="SELECT fc.*,c.*,ff.file_pdf,ft.fg_address,at.name,at.phone FROM fiction as fc
LEFT JOIN category as c ON fc.category_id=c.category_id
LEFT JOIN  file_fiction as ff ON fc.fiction_id=ff.fiction_id
LEFT JOIN figure_fiction as ft ON fc.fiction_id=ft.fiction_id
LEFT JOIN author as at ON fc.fiction_id=at.fiction_id

WHERE fc.fiction_id='$fiction_id'
ORDER BY fc.fiction_id ASC";
$result5 = mysqli_query($conn, $sql5);
$rows = mysqli_fetch_array($result5);

?>
<?php  include("header.php");   ?>
<?php  include("navbar.php"); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-3 mb-5">
                <img src="../assets/image/figure_fiction/<?php echo $rows['fg_address'];  ?>" width="100%" height="400px" alt="">
            </div>
            <div class="col-md-8  mt-3 mb-5">
                <p>
                <h5>เรื่อง: <?php echo $rows['name_fiction']; ?></h5>
                </p>
                <p>
                <h5>ชื่อผู้แต่ง: <?php echo $rows['name'];  ?></h5>
                </p>
                <p>
                <h5>หมวดหมู่: <?php echo $rows['name_category'] ;?></h5>
                </p>
                <br>
                <br>
                <div class=" col-3 p-2" style="background-color:#FFD54C;border-radius:20px">
                <h5><i class="fas fa-shopping-basket"></i> ราคา : <?php echo $rows['price_fiction'];  ?> ฿</h5>
                </div>
                <br>
               <a href="cart.php?fiction_id=<?php echo $rows['fiction_id'];  ?>&act=add" class="btn btn-success btn-flat">เพิ่มลงตะกร้า</a>
                <br>
                <br>
                <a target="_blank" class="btn btn-flat btn-warning p-2" href="assets/PDF/file/<?php echo $rows['example'];?>"><?php echo $rows['example'];  ?></a>
                <br>
                <br>
            </div>
        </div>
        <br>
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
        เขียนบทวิจารณ์
        </button>
        </div>
        <br>
        <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เขียนบทวิจารณ์</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form action="" method="post">
               <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-success">บันทึก</button>
               </form>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <div class="card-title">
                    เรื่องย่อ
                    </div>
                </div>
                <div class="card-body">
                    <p><?php echo $rows['synopsis'];  ?></p>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12">
        <div class="card">
                <div class="card-header bg-dark">
                    <div class="card-title">
                    ข้อมูลผู้แต่ง : 
                    </div>
                </div>
                <div class="card-body">
            <p>ชื่อ <?php echo $rows['name'];  ?></p>
            <p>เบอร์โทร <?php echo $rows['phone'];  ?></p>
                </div>
            </div>
           <br>
            <div class="mt-5">
               <a href="index.php" class="btn btn-danger btn-flat col-2">กลับ</a>
               </div>
        </div>
    </div>
</section>
s
<?php  include("footer.php");   ?>