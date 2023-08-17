 <!-- about us -->
 <section class="jumbotron-iklim teal lighten-4">
     <div class="container">
         <div class="row">
             <div data-aos="fade-up" data-aos-duration="2000" class="col l12 m12 s12">
                 <h1 class="center-align">Kategori Iklim</h1>
                 <p class="center-align light">Menyediakan artikel Iklim diantaranya adalah informasi Iklim, mengetahui 4 macam iklim yang sangat banyak dan beragam tersebar di seluruh muka bumi, serta perubahan iklim yang terjadi akibat pemanasan global.</p>
                 <div class="center-align"><a href="#read" class="center waves-effect waves-light btn">Get Reading</a></div>
             </div>
         </div>
     </div>
 </section>

 <!-- iklim artikel -->
 <section class="popular" id="read">
     <div class="container">
         <div class="row">
             <h6 data-aos="fade-down" data-aos-duration="1500" class="center sub-title-main">Recent Choise</h6>
             <h5 data-aos="fade-down" data-aos-duration="2000" class="center light text-grey lighten-5 title-main">-Artikel-</h5>
             <?php
                foreach ($artikel as $list) {
                ?>
                 <div class="col m4 s12">
                     <div class="card list-artikel">
                         <a href="<?= site_url('artikel/page/' . $list->slug); ?>">
                             <div data-aos="zoom-out" data-aos-duration="1500" class="card-image">
                                 <img src="<?= base_url('img/artikel-img/thumbnail/'); ?><?= $list->thumbnail; ?>" alt="<?= $list->judul_artikel; ?>">
                             </div>
                         </a>
                         <div data-aos="fade-up" data-aos-duration="2000" class="card-content">
                             <button class="category-sub-art <?php if ($list->id_kategori == '1') {
                                                                    echo 'flora-style';
                                                                } elseif ($list->id_kategori == '2') {
                                                                    echo 'fauna-style';
                                                                } elseif ($list->id_kategori == '3') {
                                                                    echo 'iklim-style';
                                                                } elseif ($list->id_kategori == '4') {
                                                                    echo 'umri-style';
                                                                } else {
                                                                    echo 'kategory-style';
                                                                } ?>"><?= $list->nama_kategori; ?></button>
                             <a href="<?= site_url('artikel/page/' . $list->slug); ?>">
                                 <h6 class="judul-list"><?= ellipsize($list->judul_artikel, 20, 1); ?></h6>
                             </a>
                             <p><?= strip_tags(ellipsize($list->isi_artikel, 96, 1)); ?></p>
                             <div class="col m1 s1 foto-penulis-sub"><img class="left z-depth-1" src="<?= base_url('img/profile/'); ?><?= $list->foto_user; ?>" alt="<?= $list->nama_user; ?>" width="35"></div>
                             <div class="col m7 s7 date-artikel-sub">
                                 <p>
                                 <div class="penulis-sub">By : <?= $list->nama_user; ?></div>
                                 <div class="tanggal-artikel-sub"><?= date('d M Y', strtotime($list->update_artikel)); ?></div>
                                 </p>
                             </div>
                         </div>
                     </div>
                     </a>
                 </div>
             <?php } ?>
         </div>
         <div class="row">
             <div class="col l12 m12 s12">
                 <div class="center">
                     <div data-aos="fade-up" data-aos-duration="2000" class="pagination-iklim">
                         <?= $this->pagination->create_links(); ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>