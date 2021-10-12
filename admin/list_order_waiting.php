<?php  

include('condb.php');


 $sql_or= "SELECT *
 FROM  order_head
 WHERE o_status=1 ";
 $result_o	= mysqli_query($conn, $sql_or);

 $i=1;
?>
<h4 class="">รอชำระเงิน</h4><br>
<table class=" table table-bordered table-striped datatable">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th width="50%">ชื่อลูกค้า</th>
            <th width="15%" class="text-nowrap" width="10%">วัน/เดือน/ปี</th>
            <th width="15%">ราคารวม</th>
            <th width="20%">แสดง</th>
        </tr>
    <tbody>
        <?php foreach($result_o as $rso) { ?>
        <tr>
            <td><?php  echo $i++; ?></td>
            <td>
            <?php 
                 echo "<b>";
                 echo $rso['o_name'];
                 echo '</b><br>';
                 echo $rso['o_email'];
                ?>
            </td>
            <td><?php  echo $rso['o_dttm']; ?></td>
            <td align="right"><?php  echo number_format($rso['o_total'],2); ?></td>
            <td>
                <div class="d-flex">
                    <?php  
                $o_id = $rso['o_id'];  //o_id 
                echo "<a href='order_detail.php?o_id=$o_id&do=order_detail;' class='btn btn-primary btn-sm btn-flat'>เปิดดู</a>";
                echo "<a href='order_cancel_db.php?o_id=$o_id&do=order_detail;' class='btn btn-danger btn-sm btn-flat' >ยกเลิก </a>";
                ?>
                </div>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </thead>
</table>