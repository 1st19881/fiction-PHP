<?php  include('condb.php');

$sql5="SELECT * FROM category ";
$result5 = mysqli_query($conn, $sql5);

?>
<section class="container">
<h4 class="text-center mt-4">ประเภทนิยาย</h4>
        <div class="row">
           <!-- Section Blog --> 
           <?php foreach($result5 as $row55) {  ?>
           <section class="col-12 col-sm-6 col-md-3 p-2" style="margin-top:50px;">
                <div class="card">
                    <a href="index.php?act=showtype&category_id=<?php  echo $row55['category_id']; ?>" class="warpper-card-img">
                        <img class="card-img-top" src="https://s3.ap-southeast-1.amazonaws.com/media.fictionlog/ebooks/5ff306a1dc8357001b37fc53/ew7q0rknpp6lg460.jpeg"   alt="Coding" style="width:100%;height:270px;object-fit:cover;">
                    </a>
                    <div class="card-body">
                    <h5><a href="index.php?act=showtype&category_id=<?php  echo $row55['category_id']; ?>"><?php  echo $row55['name_category']; ?></a></h5>
                    </div>
                </div>
            </section>
        <?php }  ?>
        </div>
</section>