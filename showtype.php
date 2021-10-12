<?php  include('condb.php');

$category_id =$_GET['category_id'];

$sql6="SELECT fc.*,c.*,ft.fg_address FROM fiction as fc
LEFT JOIN category as c ON fc.category_id=c.category_id
LEFT JOIN figure_fiction as ft ON fc.fiction_id=ft.fiction_id
WHERE c.category_id='$category_id'
ORDER BY fc.fiction_id ASC";
$result6 = mysqli_query($conn, $sql6);
$count = mysqli_num_rows($result6);

?>
<!-- <link rel="stylesheet" href="assets/CSS/sltyle.css"> -->
<section class="container">
<h4 class="text-center mt-4">รายการนิยาย ( <?php echo $count; ?> ) </h4>
    <?php if($count > 0) { ?>
     <div class="row">
           <!-- Section Blog --> 
           <?php foreach($result6 as $row6) { ?>
            <section class="col-12 col-sm-6 col-md-4 p-2" style="margin-top:50px;">
                <div class="card h-100">
                    <a href="#" class="warpper-card-img">
                        <img class="card-img-top" src="assets/image/figure_fiction/<?php echo $row6['fg_address']  ?>" height="400px" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row6['name_fiction']  ?></h5>
                        <p class="card-text"><span class="badge badge-info" style="font-size:14px;" ><?php echo $row6['name_category']  ?></span> </p>
                            <!-- Section star -->
                            <!-- Section star -->
                    </div>
                    <div class="p-3">
                    <span class="badge bg-primary p-1" style="font-size:14px;"><?php echo $row6['price_fiction']  ?>    บาท </span> <a href="" class="btn btn-danger btn-flat float-right disabled" onclick="myFunction()">ซื้อ</a>
                    <a href="detail.php?fiction_id=<?php echo $row6['fiction_id'];  ?>" class="btn btn-primary btn-flat float-right ">เพิ่มเติม</a>
                </div>
                </div>
            </section>
            <?php } ?>
    </div>      
     <?php  } else{ ?>
    <div class="alert alert-warning mt-3" role="alert">
     ไม่พบประเภทนิยาย
    </div>    
   <?php  }  ?>
</section>
            
<script>
function myFunction() {
  alert("ต้องสเป็นสมาชิกก่อน!");
}
</script>
    