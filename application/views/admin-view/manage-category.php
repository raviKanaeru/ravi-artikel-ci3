 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Kategori</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
                         <li class="breadcrumb-item active">Manage</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <!-- /.card -->
                     <div class="card">
                         <div class="card-header">
                             <h3 class="card-title">Kelola Kategori</h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                            <a href="<?= site_url('admin/category/add/'); ?>" class="btn btn-dark mb-3">Tambah Kategori</a>
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Nama Kategori</th>
                                         <th>Thumbnail</th>
                                         <th>Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1; ?>
                                     <?php
                                        foreach ($category as $list) {
                                        ?>
                                         <tr>
                                             <td><?= $i; ?></td>
                                             <td><?= $list->nama_kategori; ?></td>
                                             <td><img src="<?= base_url('img/kategori/'); ?><?= $list->foto_kategori ?>" height="80"></td>
                                             <td>
                                                 <a href="<?= site_url('admin/category/edit/' . $list->slug_kategori); ?>"><button type="button" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i></button></a>
                                                 <a href="<?= site_url('admin/category/delete/' . $list->slug_kategori); ?>" class="btn btn-sm btn-danger tombol-hapus"><i class=" fas fa-trash"></i></a>
                                             </td>
                                         </tr>
                                         <?php $i++; ?>
                                     <?php } ?>
                                 </tbody>
                                 <tfoot>
                                     <tr>
                                         <th>No</th>
                                         <th>Nama Kategori</th>
                                         <th>Thumbnail</th>
                                         <th>Aksi</th>
                                     </tr>
                                 </tfoot>
                             </table>
                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->