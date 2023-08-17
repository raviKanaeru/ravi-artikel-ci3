  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Add Kategori
              </h3>
            </div>
            <!-- /.card-header -->
            <?= form_open_multipart('admin/category/create') ?>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" id="nama" placeholder="Masukkan Nama Kategori" required>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Thumbnail Kategori</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="foto_kategori" onchange="previewImage()" accept='image/*' required>
                    <label class="custom-file-label" for="exampleInputFile">Pilih Thumbnail</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <img src="#" class="img-fluid img-preview" style="display: none;">
              </div>
              <div class="form-group">
                <button type="submit" name="add" class="btn btn-info float-right">Simpan</button>
              </div>
            </div>
            <?= form_close(); ?>
          </div>
        </div>
        <!-- /.col-->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->