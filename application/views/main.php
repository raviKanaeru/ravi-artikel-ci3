 <!-- jumbotron -->
 <section class="jumbotron teal lighten-4">
     <div class="container">
         <div class="row">
             <div data-aos="fade-right" data-aos-duration="2000" class="col l7 m7 s12">
                 <h1 class="left-align light">Ravi Artikel</h1>
                 <p class="left-align light">Menyediakan berbagai macam kategori artikel yaitu tentang flora, fauna, iklim , serta tentang sebuah universitas yang berada di Kota Pekabaru Provinsi Riau yaitu Universitas Muhammadiyah Riau.</p>
                 <div class="left-align"><a href="#read" class=" center waves-effect waves-light btn">Get Reading</a></div>
             </div>
         </div>
     </div>
 </section>

 <!-- slide / recent artikel-->
 <section class="recent">
     <div class="container">
         <div class="row">
             <h6 data-aos="fade-down" data-aos-duration="2000" class="center sub-title-main">Recent Choise</h6>
             <h5 data-aos="fade-down" data-aos-duration="1500" class="center light text-grey title-main lighten-5">-Recent Artikel-</h5>
             <div class="swiper">
                 <!-- Additional required wrapper -->
                 <div class="swiper-wrapper">
                     <!-- Slides -->
                     <?php
                        foreach ($recent as $list) {
                        ?>
                         <div class="swiper-slide">
                             <div class="kartu-art col l12 m12 s12">
                                 <div>
                                     <a href="<?= site_url('artikel/page/' . $list->slug); ?>">
                                         <div data-aos="fade-right" data-aos-duration="2000" class="col l6 m6 s12 gambar-art center-align">
                                             <img class="responsive-img" src="<?= base_url('img/artikel-img/thumbnail/'); ?><?= $list->thumbnail; ?>" alt="<?= $list->judul_artikel; ?>">
                                         </div>
                                     </a>
                                     <div data-aos="fade-left" data-aos-duration="2000" class=" col l6 m6 s12">
                                         <button class="category-art <?php if ($list->id_kategori == '1') {
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
                                             <h6 class="judul-art"><?= ellipsize($list->judul_artikel, 20, 1); ?></h6>
                                         </a>
                                         <p><?= strip_tags(ellipsize($list->isi_artikel, 130, 1)); ?></p>
                                         <div class="col m1 s1 foto-penulis-sub"><img class="left z-depth-1" src="<?= base_url('img/profile/'); ?><?= $list->foto_user; ?>" alt="<?= $list->nama_user; ?>" width="35"></div>
                                         <div class="col m7 s7 date-artikel-sub-slide">
                                             <p>
                                             <div class="penulis-sub">By : <?= $list->nama_user; ?></div>
                                             <div class="tanggal-artikel-sub"><?= date('d M Y', strtotime($list->update_artikel)); ?></div>
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     <?php } ?>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!--popular artikel -->
 <section class="popular" id="read">
     <div class="container">
         <div class="row">
             <h6 data-aos="fade-down" data-aos-duration="1500" class="center sub-title-main">Best Choise</h6>
             <h5 data-aos="fade-down" data-aos-duration="2000" class="center light text-grey lighten-5 title-main">-Top Artikel-</h5>
             <?php
                foreach ($artikel as $list) {
                ?>
                 <div class="col l4 m6 s12">
                     <div data-aos="zoom-out" class="card list-artikel">
                         <a href="<?= site_url('artikel/page/' . $list->slug); ?>">
                             <div class="card-image">
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
                                                                } ?>"><?= $list->nama_kategori ?></button>
                             <a href="<?= site_url('artikel/page/' . $list->slug); ?>">
                                 <h6 class="judul-list"><?= ellipsize($list->judul_artikel, 20, 1); ?></h6>
                             </a>
                             <p><?= strip_tags(ellipsize($list->isi_artikel, 96, 1)); ?></p>
                             <div class="col l1 m1 s1 foto-penulis-sub"><img class="left z-depth-1" src="<?= base_url('img/profile/'); ?><?= $list->foto_user; ?>" alt="<?= $list->nama_user; ?>" width="35"></div>
                             <div class="col l9 m9 s7 date-artikel-sub">
                                 <p>
                                 <div class="penulis-sub">By : <?= $list->nama_user; ?></div>
                                 <div class="tanggal-artikel-sub"><?= date('d M Y', strtotime($list->update_artikel)); ?></div>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
 </section>

 <!-- kategori -->
 <section class="kategori">
     <div class="container">
         <div class="row">
             <h6 data-aos="fade-down" data-aos-duration="1500" class="center sub-title-main">Category Choise</h6>
             <h5 data-aos="fade-down" data-aos-duration="2000" class="center light text-grey lighten-5 title-main">-Kategori Artikel-</h5>
             <?php
                foreach ($kategori as $list) {
                ?>
                 <div class="col m6 l3 s12">
                     <a href="<?= site_url('artikels/q/' . $list->slug_kategori); ?>">
                         <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="card hoverable">
                             <div class="card-image kategori-img">
                                 <img src="<?= base_url('img/'); ?>kategori/<?= $list->foto_kategori; ?>" alt="<?= $list->nama_kategori; ?>">
                                 <span class="center-align card-title light"><?= $list->nama_kategori; ?></span>
                             </div>
                         </div>
                     </a>
                 </div>
             <?php } ?>
         </div>
     </div>
 </section>