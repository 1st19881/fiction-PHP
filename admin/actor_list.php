<?php
include('condb.php');  

$query55 = "SELECT * FROM author
ORDER BY author_id ASC";
$result55 = mysqli_query($conn, $query55);

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">รหัสผู้แต่ง</th>
            <th class="text-nowrap"scope="col">รหัสนิยาย</th>
            <th class="text-nowrap"scope="col">ชื่อผู้แต่ง</th>
            <th class="text-nowrap"scope="col">จัดการ</th>
            
        </tr>
    </thead>
    <?php foreach($result55 as $row_p) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['author_id']; ?></td>
        <td><?php echo $row_p['fiction_id']; ?></td>
        <td><?php echo $row_p['name']; ?></td>
        <td>
            <div class="d-flex">
                    <a href="actor.php?act=edit&author_id=<?php echo $row_p['author_id']; ?>"
                    class="btn btn-warning btn-flat btn-sm"><i class="fas fa-edit"></i></a><a
                    href="actor.php?act=delete&ID=<?php echo $row_p['author_id']; ?>"
                    class="btn btn-danger btn-flat btn-sm" onclick="return confirm('ลบหรือไม่?')"><i class="fas fa-trash-alt"></i></a>
            </div>
        </td>
    </tr>


    <?php }  ?>


</table>