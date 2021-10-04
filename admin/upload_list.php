<?php
include('condb.php');  

$fiction_id = $_GET['fiction_id'];

$query55 = "SELECT * FROM figure_fiction WHERE fiction_id='$fiction_id' ";
$result55 = mysqli_query($conn, $query55);

$i=1;

	
?>
<br>
<h4 class="text-center">อัพโหลดภาพ</h4>
<a href="upload.php?act=upimg" class="btn btn-sm btn-primary btn-flat mb-3">เพิ่มภาพ <i class="fas fa-file-image"></i></a>
<br>
<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">รหัสภาพ</th>
            <th class="text-nowrap"scope="col">ชื่อภาพ</th>
            <th width="15%" class="text-nowrap"scope="col">ภาพ</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result55)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['figure_id']; ?></td>
        <td><?php echo $row_p['name']; ?></td>
        <td><img src="../assets/image/figure_fiction/<?php echo $row_p['fg_address']; ?>" width="100%" alt=""></td>
        <td>
            <div class="d-flex">
                <a href="upload.php?act=delete&figure_id=<?php echo $row_p['figure_id']; ?>"
                 class="btn btn-danger btn-flat btn-sm"  onclick="return confirm('ลบหรือไม่?')">ลบ</a>
            </div>
        </td>
    </tr>


    <?php }  ?>


</table>

