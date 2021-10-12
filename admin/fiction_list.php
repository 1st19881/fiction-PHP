<?php
include('condb.php');  

$query55 = "SELECT fc.*,c.*,ff.file_pdf,ft.fg_address FROM fiction as fc
LEFT JOIN category as c ON fc.category_id=c.category_id
LEFT JOIN  file_fiction as ff ON fc.fiction_id=ff.fiction_id
LEFT JOIN figure_fiction as ft ON fc.fiction_id=ft.fiction_id
ORDER BY fc.fiction_id ASC";
$result55 = mysqli_query($conn, $query55);

$i=1;

	 
?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">รหัสนิยาย</th>
            <th class="text-nowrap"scope="col">ชื่อนิยาย</th>
            <th class="text-nowrap"scope="col">ประเภทนิยาย</th>
            <th class="text-nowrap"scope="col">ราคา</th>
            <th class="text-nowrap"scope="col">ตัวอย่าง</th>
            <th width="10%" class="text-nowrap"scope="col">รูปภาพ</th>
            <th scope="col">ไฟล์นิยาย</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php foreach($result55 as $row_p) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['fiction_id']; ?></td>
        <td><?php echo $row_p['name_fiction']; ?></td>
        <td><?php echo $row_p['name_category']; ?></td>
        <td><?php echo $row_p['price_fiction']; ?></td>
        <td><a href="../assets/PDF/file/<?php echo $row_p['example']; ?>"><?php echo $row_p['example']; ?></a></td>
        <td><img src="../assets/image/figure_fiction/<?php echo $row_p['fg_address']; ?>" width="100%" alt=""></td>
        <td><a href="../assets/PDF/file/<?php echo $row_p['example']; ?>" target=”_blank”><?php echo $row_p['file_pdf']; ?></a></td>
        <td>
            <div class="d-flex">
                <a href="upload.php?fiction_id=<?php echo $row_p['fiction_id']; ?>"
                    class="btn btn-success btn-flat btn-sm"><i class="fas fa-file-image"></i></a>
                    <a href="upload.php?act=file&fiction_id=<?php echo $row_p['fiction_id']; ?>"
                    class="btn btn-primary btn-flat btn-sm"><i class="far fa-file-pdf"></i></a>
                    <a href="fiction.php?act=edit&fiction_id=<?php echo $row_p['fiction_id']; ?>"
                    class="btn btn-warning btn-flat btn-sm"><i class="fas fa-edit"></i></a><a
                    href="fiction.php?act=delete&fiction_id=<?php echo $row_p['fiction_id']; ?>"
                    class="btn btn-danger btn-flat btn-sm" onclick="return confirm('ลบหรือไม่?')"><i class="fas fa-trash-alt"></i></a>
            </div>
        </td>
    </tr>


    <?php }  ?>


</table>