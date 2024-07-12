</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Create By</b> Had's Project
  </div>
  <strong>Copyright &copy; 2024.</strong> PT.HABDONG INDONESIA.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<script>
  $(function() {
    $('#example1').DataTable({})
  })
</script>
<script>
  $(document).ready(function() {
    // Ketika input pada kolom scan
    $('#inputSC input[name="lb_box"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_box_sc"]').val(date);
      $('#inputSC input[name="time_box_sc"]').val(time);
    });
    $('#inputSC input[name="lb_sn"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_sn_sc"]').val(date);
      $('#inputSC input[name="time_sn_sc"]').val(time);
    });
    $('#inputSC input[name="lb_eancode"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_ean_sc"]').val(date);
      $('#inputSC input[name="time_ean_sc"]').val(time);
    });
    $('#inputSC input[name="lb_vnl_bag"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_vnl_bag"]').val(date);
      $('#inputSC input[name="time_vnl_bag"]').val(time);
    });
    $('#inputSC input[name="lb_mn_book"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_mn_book"]').val(date);
      $('#inputSC input[name="time_mn_book"]').val(time);
    });
    $('#inputSC input[name="lb_screw"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_screw_sc"]').val(date);
      $('#inputSC input[name="time_screw_sc"]').val(time);
    });
    $('#inputSC input[name="lb_holder"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_holder_sc"]').val(date);
      $('#inputSC input[name="time_holder_sc"]').val(time);
    });
    $('#inputSC input[name="lb_cover_1"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_cover1_sc"]').val(date);
      $('#inputSC input[name="time_cover1_sc"]').val(time);
    });
    $('#inputSC input[name="lb_cover_2"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_cover2_sc"]').val(date);
      $('#inputSC input[name="time_cover2_sc"]').val(time);
    });
    $('#inputSC input[name="lb_std_base"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_std_base_sc"]').val(date);
      $('#inputSC input[name="time_std_base_sc"]').val(time);
    });
    $('#inputSC input[name="lb_bracket_std"]').on('input', function() {
      // Ambil waktu saat ini
      var now = new Date();
      var date = now.toLocaleDateString(); // Format tanggal
      var time = now.toLocaleTimeString(); // Format waktu
      // Isi waktu ke input pada kolom waktu
      $('#inputSC input[name="date_bracket_std"]').val(date);
      $('#inputSC input[name="time_bracket_std"]').val(time);
    });
  });
</script>
<script>
  $(document).ready(function() {
    // Fungsi untuk memeriksa apakah semua input sudah terisi
    function checkAllInputsFilled() {
      var allFilled = true;

      // Cek setiap input dalam form
      $('#inputSC input').each(function() {
        if ($(this).val().trim() === '') {
          allFilled = false;
          return false; // Keluar dari loop
        }
      });

      // Tampilkan atau sembunyikan tombol/link berdasarkan status
      if (allFilled) {
        $('#next').show(); // Tampilkan tombol/link
      } else {
        $('#next').hide(); // Sembunyikan tombol/link
      }
    }

    // Panggil fungsi setiap kali ada perubahan pada input
    $('#inputSC input').on('input', function() {
      checkAllInputsFilled();
    });
  });
</script>
</body>

</html>