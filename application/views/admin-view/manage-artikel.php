 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Artikel</h1>
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
                             <h3 class="card-title">Kelola Artikel</h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Judul Artikel</th>
                                         <th>Thumbnail</th>
                                         <th>Nama Penulis</th>
                                         <th>Last Update</th>
                                         <th>Kategori</th>
                                         <th>Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1; ?>
                                     <?php
                                        foreach ($artikel as $list) {
                                        ?>
                                         <tr>
                                             <td><?= $i; ?></td>
                                             <td><?= $list->judul_artikel; ?></td>
                                             <td><img src="<?= base_url('img/artikel-img/thumbnail/'); ?><?= $list->thumbnail ?>" height="80"></td>
                                             <td><?= $list->nama_user; ?></td>
                                             <td><?= $list->update_artikel; ?></td>
                                             <td><?= $list->nama_kategori; ?></td>
                                             <td>
                                                 <a href="<?= site_url('admin/edit/edit_view/' . $list->slug); ?>"><button type="button" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i></button></a>
                                                 <a href="<?= site_url('admin/manage/delete/' . $list->slug); ?>" class="btn btn-sm btn-danger tombol-hapus"><i class=" fas fa-trash"></i></a>
                                             </td>
                                         </tr>
                                         <?php $i++; ?>
                                     <?php } ?>
                                 </tbody>
                                 <tfoot>
                                     <tr>
                                         <th>No</th>
                                         <th>Judul Artikel</th>
                                         <th>Thumbnail</th>
                                         <th>Nama Penulis</th>
                                         <th>Isi Artikel</th>
                                         <th>Last Update</th>
                                         <th>Kategori</th>
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