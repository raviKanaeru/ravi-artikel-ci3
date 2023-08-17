  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Artikel</li>
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
                Tambahkan Artikel
              </h3>
            </div>
            <!-- /.card-header -->
            <?= form_open_multipart('admin/add/') ?>
            <div class="card-body">
              <div class="form-group">
                <label for="Judul">Judul Artikel</label>
                <input type="text" class="form-control" name="judul_artikel" id="Judul" placeholder="Masukkan Judul Artikel"  value="<?= set_value('judul_artikel'); ?>" required>
                <?= form_error('judul_artikel', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Thumbnail Artikel</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="foto_thumbnail" onchange="previewImage()" accept='image/*' required>
                    <label class="custom-file-label" for="exampleInputFile">Pilih Thumbnail</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
                <?= form_error('foto_thumbnail', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <img src="#" class="img-fluid img-preview" style="display: none;">
              </div>
              <div class="form-gruop">
                <label for="#">Isi Artikel</label>
                <textarea class="ckeditor" id="ckedtor" name="isi_artikel" required value="<?= set_value('isi_artikel'); ?>">
                <?= set_value('isi_artikel'); ?>
                </textarea>
                <?= form_error('isi_artikel', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group mt-2">
                <label>Kategori Artikel</label>
                <select class="form-control select2" style="width: 40%;" name="kategori_artikel" required>
                  <option selected disabled>-Pilih Kategori</option>
                  <?php foreach ($kategori as $list) { ?>
                    <option value="<?= $list->id_kategori; ?>"><?= $list->nama_kategori; ?></option>
                  <?php } ?>
                </select>
                <?= form_error('kategori_artikel', '<small class="text-danger">', '</small>'); ?>
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
