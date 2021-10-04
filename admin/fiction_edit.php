<?php
include('condb.php'); 

$fiction_id = $_GET['fiction_id'];

$query = "SELECT * FROM category ORDER BY category_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);

$query1="SELECT * FROM fiction as f
JOIN category as c ON f.category_id=c.category_id
WHERE fiction_id='$fiction_id' ";
$result1 = mysqli_query($conn,$query1);
$row= mysqli_fetch_array($result1);

?>

<div class="col-md-12">
    <form name="register" action="fiction_edit_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center">แก้ไขนิยาย</h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">รหัสนิยาย:</div>
            <div class="col-sm-12" align="left">
                <input name="fiction_id" type="text" required class="form-control" value="<?php echo $row['fiction_id']; ?>" readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">ชื่อนิยาย:</div>
            <div class="col-sm-12" align="left">
                <input name="name_fiction" type="text" required class="form-control" value="<?php echo $row['name_fiction']; ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">ประเภทนิยาย :</div>
            <div class="col-sm-12" align="left">
                <select name="category_id" class="form-control" >
                    <option value="<?php echo $results["category_id"];?>"><?php echo $row['name_category']; ?></option>
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
                <input name="price_fiction" type="text" required class="form-control" id="m_name" placeholder="" value="<?php echo $row['price_fiction']; ?>" >
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-3" align=""> เรื่องย่อ : </div>
            <div class="col-sm-12" align="left">
                <input name="synopsis" type="text" class="form-control" id="m_email" required placeholder="" value="<?php echo $row['synopsis']; ?>" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> วันที่วางขาย : </div>
            <div class="col-sm-12" align="left">
                <input class="form-control" type="date" name="release_date" id=""  value="<?php echo $row['release_date']; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                ตัวอย่างนิยาย :
                <input type="file" name="example" id="example" class="form-control" >
                <br>
                <a class="bg-warning p-2" href="../assets/PDF/file/<?php echo $row['example']; ?>" target="_blank"><?php echo $row['example']; ?></a>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <input type="hidden" name="fiction_id " id="" value="<?php echo $row['fiction_id']; ?>">
                <input type="hidden" name="example2" id="" value="<?php echo $row['example']; ?>">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="fiction.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>