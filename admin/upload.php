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
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=='delete'){
            include("upload_img_del.php");
            }
            elseif($act=='file'){
            include("upload_file_list.php");
            }
            elseif($act=='delfile'){
            include("upload_file_del.php");
            }
            elseif($act=='upimg'){
            include("upload_img.php");
            }
            elseif($act=='upfile'){
            include("upload_file.php");
            }
            else{
            include('upload_list.php');
            }
            ?>
            </div>
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