<?php 
$menu = "fiction"

?>
<title>นิยาย</title>

<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <div class="container">
    <?php 
  error_reporting( error_reporting() & ~E_NOTICE );
  $act = (isset($_GET['act']) ? $_GET['act'] : '');
    if($act=="add"){
      echo '';
    }
    else if($act=="upload"){
        echo '';
      }else if($act=="edit"){
        echo '';
      }else{?>
            <a href="fiction.php?act=add" class="btn btn-primary btn-flat">เพิ่มนิยาย</a>
            <?php } 
   ?>
            <div class="col-md-12" style="margin-top: 10px">
            <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=='add'){
            include('fiction_add.php');
            }else if($act=='edit'){
            include("fiction_edit.php");
            }else{
            include('fiction_list.php');
            }
            ?>
        </div>
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