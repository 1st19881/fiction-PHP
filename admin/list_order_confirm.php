<?php  

include('condb.php');


 $sql_or= "SELECT *
 FROM  order_head
 WHERE o_status=2 ";
 $result_o	= mysqli_query($conn, $sql_or);

 $i=1;
?>
<h4 class="">ยืนยันการสั่งซื้อ</h4><br>
<table class=" table table-bordered  datatable table-responsive">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th width="45%">ชื่อลูกค้า</th>
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
            <?php  $o_id = $rso['o_id']; ?>  
                <div class="d-flex">
                <a href="payment_detail.php?o_id=<?php echo $o_id;?>&do=payment_detail;" class="btn btn-primary btn-sm btn-flat">เปิดดู</a>
                <a href="order_confirm_db.php?o_id=<?php echo $o_id;?>&do=payment_save;" class="btn btn-success btn-sm btn-flat" onClick="return confirm('ต้องการยืนยัน?')">ยืนยัน</a>
                <a href="order_cancel_db.php?o_id=<?php echo $o_id;?>&do=order_detail;"  class="btn btn-danger btn-sm btn-flat" onClick="return confirm('ต้องการยกเลิก?')">ยกเลิก </a>
                
                </div>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </thead>
</table>


