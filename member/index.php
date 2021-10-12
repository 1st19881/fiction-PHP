<?php 
$menu = "index"

?>
<title>หน้าแรก</title>
<?php include("header.php"); ?>
<?php include("navbar.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

<?php $act = (isset($_GET['act'])? $_GET['act']: '');
$s = (isset($_GET['s'])? $_GET['s']: '');
    if($act=="logout"){
        include('logout.php');  
    }else if($act=="register"){
        include('form_register.php');  
    }
    else if($s!=""){
        include('search.php');  
    }
    else if($act=="showtype"){
        include('showtype.php');  
    }
    else{
        include('show.php');      
    }

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