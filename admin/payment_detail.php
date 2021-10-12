<?php 
$menu = "index"

?>
<title>รายละเอียดการแจ้งชำระเงิน</title>

<?php  

include('condb.php');

$o_id = $_GET['o_id'];

 $sql= "SELECT d.*,f.*,h.*,ff.fg_address
 FROM order_detail as d
 INNER JOIN fiction as f ON d.fiction_id=f.fiction_id
 INNER JOIN figure_fiction as ff ON f.fiction_id=ff.fiction_id
 INNER JOIN order_head as h ON d.o_id=h.o_id
 WHERE d.o_id='$o_id'";
 $rsdetail	= mysqli_query($conn, $sql);
 $rowdetail	= mysqli_fetch_array($rsdetail);
 $total=0;
 $i=1;
?>

<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="text-center">
            <h4>รายละเอียดการแจ้งชำระเงิน</h4><br>
        </div>
        <h5>
            รหัสการสั่งซื้อ : <?php echo $rowdetail['o_id']; ?> <br>
            อีเมล : <?php echo $rowdetail['o_email']; ?> <br>
            วันที่สั่งซื้อ : <?php echo $rowdetail['o_dttm']; ?><br>
            สถานะ :
            <?php $st = $rowdetail['o_status']; 
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
        ?>
        </h5>
        <table width="100%  align="center" class="table table-bordered table-hover ">
            <tr>
                <td bgcolor="#F7F7ED">#</td>
                <td bgcolor="#F7F7ED">ภาพ</td>
                <td bgcolor="#F7F7ED">สินค้า</td>
                <td align="center" bgcolor="#F7F7ED">ราคา</td>
                <td align="center" bgcolor="#F7F7ED">จำนวน</td>
                <td align="center" bgcolor="#F7F7ED">รวม/บาท</td>
            </tr>
            <?php foreach($rsdetail as $row ){
        $total += $row['d_subtotal']; 	       //ราคารวมทั้งออร์เดอ
        echo "<tr>";
        echo "<td width='5%'>" . $i++ . "</td>";
        echo "<td width='10%'> <img src='../assets/image/figure_fiction/" . $row['fg_address'] . "' width='100%' alt='img'>" .'</td>' ;
        echo "<td width='35%'>" . $row["name_fiction"] . "</td>";
        echo "<td width='10%'align='right'>" .number_format($row['price_fiction'],2) ."</td>";
        echo "<td width='10%'align='right'>" .number_format($row['d_qty'],2) ."</td>";
        echo "<td width='10%'align='right'>" .number_format($row['d_subtotal'],2) ."</td>";

        echo "</tr>";
    }
        echo "<tr>";
        echo "<td  align='right' colspan='5' bgcolor='#F7DD83'><b>รวม</b></td>";
        echo "<td align='right' bgcolor='#F7DD83'>"."<b>".number_format($total,2). ' '. 'บาท' . "</b>"."</td>";
        echo "</tr>";
    ?>
        </table>
        <br>
        <h4>การชำระเงิน</h4>
       <br>
        <div style="margin:20px;">
        <center>
        <h5 class="badge-primary badge p-1">Prompt Pay</h5>
        <br>
            <img src="../assets/image/244747953_195167866029602_302433936297494639_n.jpg" alt="" height="300px"></center>
        </div>
        <br>
        <br>
        <h4 class=" mb-3">รายละเอียดที่แจ้งชำระเงิน</h4>
        <table class="table table-bordered">
            <thead class="bg-success">
                <tr>
                    <th width="15%">ภาพสลิป</th>
                    <th>ว/ด/ป</th>
                    <th>จำนวนที่โอน</th>
                    <th>สถานะ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="../assets/image/slip/<?php echo $rowdetail['o_slip'] ; ?>" target="_blank">
                    <img src="../assets/image/slip/<?php echo $rowdetail['o_slip'] ; ?>" width="100%" alt=""></a></td>
                    <td><?php echo $rowdetail['o_slip_date'] ; ?></td>
                    <td align="center"><?php echo number_format($rowdetail['o_total']) ; ?> บาท</td>
                    <td align="center"> <?php $st = $rowdetail['o_status']; 
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
                    ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="order.php" class="btn btn-danger btn-flat mt-3 mb-3 col-2">กลับ</a>
    </div>
</section>
<br>
<br>
<!-- /.content -->
<?php include('footer.php'); ?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<script>
$(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
});
</script>