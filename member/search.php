<?php include('condb.php');

$s = $_GET['s'];

$query1 = "SELECT fc.*,c.*,ff.file_pdf,ft.fg_address FROM fiction as fc
LEFT JOIN category as c ON fc.category_id=c.category_id
LEFT JOIN  file_fiction as ff ON fc.fiction_id=ff.fiction_id
LEFT JOIN figure_fiction as ft ON fc.fiction_id=ft.fiction_id
LEFT JOIN author as a ON fc.fiction_id=a.fiction_id
WHERE fc.name_fiction LIKE '%$s%' or c.name_category LIKE '%$s%' or fc.fiction_id LIKE '%$s%' or a.name LIKE '%$s%'
ORDER BY fc.fiction_id ASC";
$result1 = mysqli_query($conn, $query1)or die ("Error in query: $query1
query " . mysqli_error());
$count = mysqli_num_rows($result1);

?>
 <div class="container">
<h4 class="mt-5"><i class="fas fa-book"></i> ผลการค้นหา " <?php echo $_GET['s']  ?> "   (  <?php echo $count;  ?> ) รายการ </h4>
<hr style="clear: both;color: red;background-color: #FFD54C;height: 1px;border-width: 0;">
<div class="row">
<?php foreach($result1 as $row5) { ?>
            <section class="col-12 col-sm-6 col-md-4 p-2" style="margin-top:50px;">
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
 </div>