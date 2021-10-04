<?php
include('condb.php');  

$fiction_id = $_GET['fiction_id'];

$query55 = "SELECT * FROM file_fiction WHERE fiction_id='$fiction_id' ";
$result55 = mysqli_query($conn, $query55);

$i=1;

	
?>
<br>
<h4 class="text-center">อัพโหลดไฟล์</h4>
<a href="upload.php?act=upfile" class="btn btn-sm btn-primary btn-flat mb-3">เพิ่มไฟล์ <i class="fas fa-file-pdf"></i> </a>
<br>
<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">รหัสไฟล์</th>
            <th class="text-nowrap"scope="col">PDF</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result55)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['id_file']; ?></td>
        <td><a href="../assets/PDF/pfd_file/<?php echo $row_p['file_pdf']; ?>"><?php echo $row_p['file_pdf']; ?></a></td>
        <td>
            <div class="d-flex">
                <a href="upload.php?act=delfile&id_file=<?php echo $row_p['id_file']; ?>"
                 class="btn btn-danger btn-flat btn-sm" onclick="return confirm('ลบหรือไม่?')">ลบ</a>
            </div>
        </td>
    </tr>


    <?php }  ?>


</table>

