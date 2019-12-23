  </div>
</div>
  <footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?>
  </footer>

  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<?php include"script.php"; ?>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>