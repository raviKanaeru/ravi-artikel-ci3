  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Category</li>
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
                Edit Artikel
              </h3>
            </div>
            <!-- /.card-header -->
            <?= form_open_multipart('admin/category/update') ?>
            <input type="hidden" name="id_kategori" value="<?= $kategori->id_kategori; ?>">
            <input type="hidden" name="slug_kategori" value="<?= $kategori->slug_kategori; ?>">
            <input type="hidden" name="foto_lama" value="<?= $kategori->foto_kategori; ?>">
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" id="nama" value="<?= $kategori->nama_kategori; ?>" placeholder="Masukkan Judul Artikel">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Thumbnail Artikel</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="foto_kategori" onchange="previewImage()" accept='image/*'>
                    <label class="custom-file-label" for="exampleInputFile">Pilih Thumbnail</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <img src="<?= base_url('img/kategori/'); ?><?= $kategori->foto_kategori; ?>" class="img-fluid img-preview">
              </div>
              <div class="form-group">
                <button type="submit" name="edit" class="btn btn-info float-right">Simpan</button>
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