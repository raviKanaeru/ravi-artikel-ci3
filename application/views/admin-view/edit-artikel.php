  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
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
            <?= form_open_multipart('admin/edit/edit_artikel') ?>
            <input type="hidden" name="id_artikel" value="<?= $artikel->id_artikel; ?>">
            <input type="hidden" name="id_user" value="<?= $artikel->id_user; ?>">
            <input type="hidden" name="foto_lama" value="<?= $artikel->foto; ?>">
            <input type="hidden" name="foto_thumbnail_lama" value="<?= $artikel->thumbnail; ?>">
            <div class="card-body">
              <div class="form-group">
                <label for="Judul">Judul Artikel</label>
                <input type="text" class="form-control" name="judul_artikel" id="Judul" value="<?= $artikel->judul_artikel; ?>" placeholder="Masukkan Judul Artikel">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Thumbnail Artikel</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="foto_thumbnail" onchange="previewImage()" accept='image/*'>
                    <label class="custom-file-label" for="exampleInputFile">Pilih Thumbnail</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <img src="<?= base_url('img/artikel-img/'); ?><?= $artikel->foto; ?>" class="img-fluid img-preview">
              </div>
              <div class="form-gruop">
                <label for="#">Isi Artikel</label>
                <textarea class="ckeditor" id="ckedtor" name="isi_artikel" value="<?= $artikel->isi_artikel; ?>">
                <?= $artikel->isi_artikel; ?>
                </textarea>
              </div>
              <div class="form-group mt-2">
                <label>Kategori Artikel</label>
                <select class="form-control select2" style="width: 40%;" name="kategori_artikel">
                  <option selected value="<?= $artikel->id_kategori; ?>"><?= $artikel->nama_kategori; ?></option>
                  <?php foreach ($kategori as $list) { ?>
                    <option value="<?= $list->id_kategori; ?>"><?= $list->nama_kategori; ?></option>
                  <?php } ?>
                </select>
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