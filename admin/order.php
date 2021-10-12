<?php 
$menu = "order";

include('condb.php');


$sql_c= "SELECT *
 FROM  order_head
 WHERE o_status=1 ";
 $result_c	= mysqli_query($conn, $sql_c);
 $count_c = mysqli_num_rows($result_c);


$sql_w= "SELECT *
 FROM  order_head
 WHERE o_status=2 ";
 $result_w	= mysqli_query($conn, $sql_w);
 $count_w = mysqli_num_rows($result_w);

 $sql_p= "SELECT *
 FROM  order_head
 WHERE o_status=2 ";
 $result_p	= mysqli_query($conn, $sql_p);
 $count_p = mysqli_num_rows($result_p);


 $sql_payment= "SELECT *
 FROM  order_head
 WHERE o_status=3 ";
 $result_payment	= mysqli_query($conn, $sql_payment);
 $count_payment = mysqli_num_rows($result_payment);



 $sql_cancel= "SELECT *
 FROM  order_head
 WHERE o_status=4 ";
 $result_comment 	= mysqli_query($conn, $sql_cancel);
 $count_comment = mysqli_num_rows($result_comment );


 $sql_all= "SELECT *
 FROM  order_head";
 $result_all 	= mysqli_query($conn, $sql_all);
 $count_all = mysqli_num_rows($result_all );

?>
<title>จัดการสถานะการชำระเงิน</title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">


    <div class="container">
        <div class="">
            <a href="order.php" class="btn btn-dark btn-flat ">ทั้งหมด ( <?php echo      $count_all;  ?> 
                )</a> ||
            <a href="order.php?act=confirm" class="btn btn-primary btn-flat ">ยืนยันการสั่งซื้อ (
                <?php echo $count_w;  ?> )</a> ||
            <a href="order.php?act=waiting" class="btn btn-warning btn-flat ">รอชำระเงิน ( <?php echo $count_c;  ?>
                )</a>  ||
            <a href="order.php?act=paid" class="btn btn-success btn-flat ">ชำระเงินแล้ว ( <?php echo $count_payment;  ?>
                )</a> ||
            <a href="order.php?act=cancel" class="btn btn-danger btn-flat ">ยกเลิก ( <?php echo $count_comment;  ?>
                )</a>
        </div>
        <br>
        <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=='confirm'){ //ยืนยันชำระเงิน
            include('list_order_confirm.php');
            }else if($act=='paid'){   //จ่ายเงืนแล้ว
            include("list_order_paid.php");
            }else if($act=='cancel'){  //ยกเลิกสั่งซื้อ
            include("list_order_cancel.php");
            }else if($act=='waiting'){  //ยกเลิกสั่งซื้อ
            include("list_order_waiting.php");  //รอชำระเงิน 
            }else{
            include('list_order.php'); // รายการสั่งซื้อทั้งหมด
            }
        ?>
    </div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>

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

</body>

</html>