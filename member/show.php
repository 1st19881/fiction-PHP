<?php  include('condb.php');

$sql5="SELECT fc.*,c.*,ff.file_pdf,ft.fg_address FROM fiction as fc
LEFT JOIN category as c ON fc.category_id=c.category_id
LEFT JOIN  file_fiction as ff ON fc.fiction_id=ff.fiction_id
LEFT JOIN figure_fiction as ft ON fc.fiction_id=ft.fiction_id
ORDER BY fc.fiction_id ASC";
$result5 = mysqli_query($conn, $sql5);

?>
<!-- <link rel="stylesheet" href="assets/CSS/sltyle.css"> -->
<section class="container">
<h4 class="text-center mt-5">รายการนิยาย</h4>
        <div class="row">
           <!-- Section Blog --> 
           <?php foreach($result5 as $row5) { ?>
            <section class="col-12 col-sm-6 col-md-4 p-2" style="margin-top:35px;">
                <div class="card h-100">
                    <a href="#" class="warpper-card-img">
                        <img class="card-img-top" src="../assets/image/figure_fiction/<?php echo $row5['fg_address']  ?>" height="400px" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row5['name_fiction']  ?></h5>
                        <p class="card-text"><span class="badge badge-info" style="font-size:14px;" ><?php echo $row5['name_category']  ?></span> </p>
                            <!-- Section star -->
                            <!-- Section star -->
                    </div>
                    <div class="p-3">
                    <a href="cart.php?fiction_id=<?php echo $row5['fiction_id'];  ?>&act=add" class="btn btn-danger btn-flat float-right ">ซื้อ</a>
                    <a href="detail.php?fiction_id=<?php echo $row5['fiction_id'];  ?>" class="btn btn-primary btn-flat float-right ">เพิ่มเติม</a>
                </div>
                </div>
            </section>
            <?php } ?>
        </div>
</section>
            
<!-- <script>
function myFunction() {
  alert("ต้องสเป็นสมาชิกก่อน!");
}
</script> -->
    