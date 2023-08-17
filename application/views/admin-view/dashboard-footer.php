<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/moment/moment.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/'); ?>dsb_admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/'); ?>dsb_admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('asset/'); ?>dsb_admin/dist/js/pages/dashboard.js"></script>
<!-- CodeMirror -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/codemirror/codemirror.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/codemirror/mode/css/css.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/codemirror/mode/xml/xml.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url('asset/'); ?>dsb_admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- alert -->
<script src="<?= base_url('asset/'); ?>sweetalert2/sweetalert2.all.min.js"></script>


<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


<!--alert  konfirmasi hapus data  -->
<script>
    $('.tombol-hapus').on('click', function(e) {

        e.preventDefault();
        const href = $(this).attr('href');


        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
        return false;
    });
</script>

<script>
  $(function() {
    bsCustomFileInput.init();
  });
</script>
<script>
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFEvent) {
      imgPreview.src = oFEvent.target.result;
    }
  }
</script>

<!-- alert hapus data -->
<?php if ($this->session->flashdata('message') == "error") { ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Data gagal dihapus!',
        })
    </script>
<?php
} elseif ($this->session->flashdata('message') == "success") { ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data telah terhapus!',
        })
    </script>
<?php
} ?>

<!-- alert tambah data -->
<?php if ($this->session->flashdata('message_add') == "success") { ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data telah ditambahkan!',
        })
    </script>
<?php
} elseif ($this->session->flashdata('message_add') == "failed") { ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Data gagal ditambahkan!',
        })
    </script>
<?php
} ?>

<!-- alert edit data -->
<?php if ($this->session->flashdata('message_edit') == "success") { ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data telah diubah!',
        })
    </script>
<?php
} elseif ($this->session->flashdata('message_edit') == "failed") { ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Data gagal diubah!',
        })
    </script>
<?php
} ?>

<!-- alert error img -->
<?php if ($this->session->flashdata('message_img' == "not_found")) { ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Foto Tidak Ditemukan',
            text: 'Silahkan Masukkan Foto Terlebih Dahulu!',
        })
    </script>
<?php
} elseif ($this->session->flashdata('error_img') == "error") { ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Foto Harus sesuai Kriteria Berikut Size <1 Mb, Format Jpg, lebar <1920 px, tinggi <1280 px!',
        })
    </script>
<?php
} ?>

<!-- alert add failed -->
<?php if ($this->session->flashdata('message_data') == "found") { ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Artikel Sudah Ada!',
        })
    </script>
<?php
}  ?>
</body>

</html>

</body>

</html>