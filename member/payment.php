<?php 
$menu = "index"

?>
<title>หน้าแรก</title>

<?php  

include('condb.php');

$o_id = $_GET['o_id'];

 $sql= "SELECT d.*,f.*,h.*,ff.fg_address
 FROM order_detail as d
 INNER JOIN fiction as f ON d.fiction_id=f.fiction_id
 INNER JOIN order_head as h ON d.o_id=h.o_id
 INNER JOIN figure_fiction as ff ON f.fiction_id=ff.fiction_id
 WHERE d.o_id=$o_id";
 $rsdetail	= mysqli_query($conn, $sql);
 $rowdetail	= mysqli_fetch_array($rsdetail);
 $total=0;
 $i=1;

?>

<?php include("header.php"); ?>
<?php include("navbar.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="text-center">
            <h4 style="margin-top:80px;">แจ้งชำระเงิน</h4><br>
        </div>
        <h5>
            รหัสการสั่งซื้อ : <?php echo $rowdetail['o_id']; ?> <br>
            อีเมล : <?php echo $rowdetail['o_email']; ?> <br>
            วันที่สั่งซื้อ : <?php echo $rowdetail['o_dttm']; ?> น.<br>
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
                <td  bgcolor="#F7F7ED">ภาพ</td>
                <td bgcolor="#F7F7ED">นิยาย</td>
                <td align="center" bgcolor="#F7F7ED">ราคา</td>
                <td align="center" bgcolor="#F7F7ED">จำนวน</td>
                <td align="center" bgcolor="#F7F7ED">รวม/บาท</td>
            </tr>
            <?php foreach($rsdetail as $row ){
        $total += $row['d_subtotal']; 	       //ราคารวมทั้งออร์เดอ
        echo "<tr>";
        echo "<td width='5%'>" . $i++ . "</td>";
        echo "<td width='10%'> <img src='../assets/image/figure_fiction/" . $row['fg_address'] . "' width='100%' alt='img'>" .'</td>' ;
        echo "<td width='25%'>" . $row["name_fiction"] . "</td>";
        echo "<td width='10%'align='right'>" .number_format($row['price_fiction'],2) ."</td>";
        echo "<td width='10%'align='right'>" .number_format($row['d_qty'],2) ."</td>";
        echo "<td width='10%'align='right'>" .number_format($row['d_subtotal'],2) ."</td>";

        echo "</tr>";
    }
        echo "<tr>";
        echo "<td  align='right' colspan='5' bgcolor='#F7DD83'><b>รวม</b></td>";
        echo "<td align='right' bgcolor='#F7DD83'>"."<b>".number_format($total,2)."</b>".' '.'บาท' . "</td>";
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
        <form action="payment_db.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="">วันที่ชำระเงิน</label>
                    <input type="date" name="o_slip_date" class="form-control mb-3">
                </div>
                <div class="col-md-6">
                    <label for="">จำนวนที่ต้องชำระ</label>
                    <input type="number" name="o_slip_total" class="form-control mb-3" any required min="0" readonly value="<?php echo $total;  ?>">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="">อัพโหลดสลิป</label>
                    <input type="file" name="o_slip" id="" class="form-control mb-3" onchange="readURL(this);">
                </div>
            </div>
           <center> <img src="#" alt="" id="blah" width="150px"></center>
            <br>
            <div class="form-group mt-3 d-flex justify-content-center">
                <input type="hidden" name="o_id" id="" value="<?php echo $o_id;  ?>">
                <button type="submit" class="btn btn-flat btn-success col-3">
                    แจ้งชำระเงิน
                </button>
                <a href="order.php" class="btn btn-flat btn-danger col-3">ยกเลิก</a>
            </div>
        </form>
    </div>
</section>
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