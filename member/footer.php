

<!-- jQuery -->


<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>

<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->

<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="../assets/plugins/bootstrap-tagsinput/tagsinput.js?v=1"></script>
<!-- Select2 -->

<script src="../assets/plugins/select2/js/select2.full.min.js"></script>

<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="assets/dist/js/demo.js"></script> -->


<script>
  $(document).ready(function () {
    //$('.sidebar-menu').tree();
    //$('.select2').select2();
    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4'
    })
  })
</script>




<script>
  $(function () {
    $('#example1').DataTable({
      // "paging": true,
      // "lengthChange": true,
      // "searching": true,
      // "ordering": true,
      // "info": true,
      // "autoWidth": true,
      "oLanguage": {
            "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
            "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
            "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
            "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
            "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
            "sSearch": "ค้นหา :",
            "oPaginate": {
                "sFirst": "เริ่มต้น",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "สุดท้าย"
            }

        }
      
    });
  });
</script>



