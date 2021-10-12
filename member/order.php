<title>ประวัติการสั่งซื้อ</title>
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
    <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            // if($act=='add'){
            // include('product_add.php');
            // }else if($act=='edit'){
            // include("product_edit.php");
            // }else if($act=='delete'){
            // include("product_delete.php");
            // }else{
            include('list_order.php');
            // }
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

