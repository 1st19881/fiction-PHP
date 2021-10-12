<?php  

include('condb.php');


 $sql_or= "SELECT *
 FROM  order_head ";
 $result_o	= mysqli_query($conn, $sql_or);

 $i=1;
?>
<h4 class="">จัดการสถานะการชำระเงิน</h4><br>
<table class=" table table-bordered table-striped datatable">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th width="50%">ชื่อลูกค้า</th>
            <th width="15%">สถานะ</th>
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
            <td><?php $st = $rso['o_status']; 
                if($st==1){
                    echo "<font color='blue'> รอชำระเงิน </font>";
                }
                elseif ($st==2) {
                echo "<font color='Orange'> รอยืนยัน </font>";
                }
                elseif ($st==3) {
                echo "<font color='green'> ชำระเงินแล้ว </font>";
                } 
                elseif ($st==4) {
                    echo "<font color='red'> ยกเลิก </font>"; 
                }
            ?></td>
            <td><?php  echo $rso['o_dttm']; ?></td> 
            <td align="right"><?php  echo number_format($rso['o_total'],2); ?></td>
            <td>
                <div class="d-flex">
                <?php  
                    $o_id = $rso['o_id'];  //o_id 

                    if($st==1){
                        echo "<a href='order_detail.php?o_id=$o_id&do=payment;' class='btn btn-primary btn-sm btn-flat'>เปิดดู</a>";
                    }
                    elseif ($st==2) {
                        echo "<a href='payment_detail.php?o_id=$o_id&do=payment_detail;' class='btn  btn-sm btn-warning btn-flat'>เปิดดู</a>";
                    }
                    elseif ($st==3) {
                        echo "<a href='payment_detail.php?o_id=$o_id&do=payment_success_detail;' class='btn  btn-sm btn-success btn-flat'>เปิดดู </a>";
                    }
                    elseif ($st==4) {
                        echo "<a href='order_cancel_detail.php?o_id=$o_id&do=cancel;' class='btn  btn-sm btn-danger btn-flat'>เปิดดู</a>";
                    }
                    ?>
                </div>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </thead>
</table>