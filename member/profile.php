<?php 

$menu = "index"

?>
<title>หน้าแรก</title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<br><br>
<!-- Main content -->
<section class="content"> 
<?php include("navbar.php"); ?>
<?php 
include('profile_list.php');
?>
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