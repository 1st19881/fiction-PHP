<?php 

include('condb.php');

$id = $_SESSION['id'];

 $sql_or= "SELECT *
 FROM  order_head
 WHERE id='$id'; ";
 $result_o	= mysqli_query($conn, $sql_or);

 $i=1;
?>
<h4 class="text-center" style="margin-top:50px;">ประวัติการสั่งซื้อ</h4>
<table class=" table table-bordered table-striped datatable">
    <thead>
        <tr>
            <th width="5%"></th>
            <th width="10%">สถานะ</th>
            <th class="text-nowrap" width="10%">วัน/เดือน/ปี</th>
            <th width="10%">รวม/บาท</th>
            <th width="10%">แสดง</th>
        </tr>
    <tbody>
        <?php foreach($result_o as $rso) { ?>
        <tr>
            <td><?php  echo $i++; ?></td>
            <td>
                <?php $st = $rso['o_status']; 
                if($st==1){
                    echo "<font color='blue'> รอชำระเงิน </font>";
                }
                elseif ($st==2) {
                echo "<font color='Orange'> รอยืนยัน </font>";
                }
                elseif ($st==3) {
                echo "<font color='DarkSlateGray'> ชำระเงินแล้ว </font>";
                } 
                elseif ($st==4) {
                    echo "<font color='red'> ยกเลิก </font>"; 
                }
              ?>
            </td>
            <td><?php  echo $rso['o_dttm']; ?></td>
            <td align="right"><?php  echo number_format($rso['o_total'],2);  ?> บาท</td>
            <td>
                <?php  

                $o_id = $rso['o_id'];  //o_id 

                if($st==1){
                    echo "<a href='payment.php?o_id=$o_id&do=payment;' class='btn btn-primary btn-sm btn-flat'>ชำระเงิน </a>";
                }
                elseif ($st==2) {
                    echo "<a href='payment_detail.php?o_id=$o_id&do=payment_detail;' class='btn  btn-sm btn-warning btn-flat'>รอยืนยัน</a>";
                }
                elseif ($st==3) {
                    echo "<a href='payment_detail.php?o_id=$o_id&do=payment_success_detail;' class='btn  btn-sm btn-success btn-flat'>เปิดดู </a>";
                }
                elseif ($st==4) {
                    echo "<a href='' class='btn  btn-sm btn-danger btn-flat'>ยกเลิก </a>";
                }
                 ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </thead>
</table>