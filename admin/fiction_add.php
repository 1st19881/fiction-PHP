<?php
include('condb.php'); 

$query = "SELECT * FROM category ORDER BY category_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);

?>

<div class="col-md-12">
    <form name="register" action="fiction_add_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> เพิ่มนิยาย</h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">รหัสนิยาย:</div>
            <div class="col-sm-12" align="left">
                <input name="fiction_id" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">ชื่อนิยาย:</div>
            <div class="col-sm-12" align="left">
                <input name="name_fiction" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">ประเภทนิยาย :</div>
            <div class="col-sm-12" align="left">
                <select name="category_id" class="form-control" required>
                    <?php foreach($result as $results){?>
                    <option value="<?php echo $results["category_id"];?>">
                        <?php echo $results["name_category"]; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> ราคา :</div>
            <div class="col-sm-12" align="left">
                <input name="price_fiction" type="text" required class="form-control" id="m_name" placeholder="" />
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-3" align=""> เรื่องย่อ : </div>
            <div class="col-sm-12" align="left">
                <input name="synopsis" type="text" class="form-control" id="m_email" required placeholder="" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> วันที่วางขาย : </div>
            <div class="col-sm-12" align="left">
                <input class="form-control" type="date" name="release_date" id="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                ตัวอย่างนิยาย :
                <input type="file" name="example" id="example" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="product.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>