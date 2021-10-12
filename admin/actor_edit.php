<?php
include('condb.php'); 

$author_id = $_GET['author_id'];

$query = "SELECT * FROM fiction ORDER BY fiction_id  asc" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);

$query1="SELECT * FROM author as a
JOIN fiction as f ON a.fiction_id=f.fiction_id
WHERE author_id='$author_id' ";
$result1 = mysqli_query($conn,$query1);
$row= mysqli_fetch_array($result1);

?>





<div class="col-md-12">
    <form name="register" action="actor_edit_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> แก้ไขข้อมูลผู้แต่ง</h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">รหัสผู้แต่ง:</div>
            <div class="col-sm-12" align="left">
                <input name="author_id" type="text" required class="form-control" value="<?php echo $row['author_id']; ?>" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">รหัสนิยาย:</div>
            <div class="col-sm-12" align="left">
                <input name="fiction_id" type="text" required class="form-control" value="<?php echo $row['fiction_id']; ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align="">ชื่อผู้แต่ง:</div>
            <div class="col-sm-12" align="left">
                <input name="name" type="text" required class="form-control" value="<?php echo $row['name']; ?>" />
            </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button>
                 <a href="product.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>