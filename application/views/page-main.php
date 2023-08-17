<div>
    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12">
                <div class="page-artikel">
                    <div data-aos="fade-up" data-aos-duration="2000" class="card-content info-artikel">
                        <h6 class="center kategori-page"><?= $artikel->nama_kategori; ?></h6>
                        <h1 class="center judul-art"><?= $artikel->judul_artikel ?></h3>
                        <div class="col l1 m2 s2 foto-penulis"><img class="left z-depth-1" src="<?= base_url('img/profile/'); ?><?= $artikel->foto_user; ?>" alt="<?= $artikel->nama_user; ?>"></div>
                        <div class="col l7 m7 s7 date-artikel">
                            <p>
                            <div class="penulis"><?= $artikel->nama_user; ?></div>
                            <div class="tanggal-artikel"><?= date('d M Y', strtotime($artikel->update_artikel)); ?></div>
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="3000" class="card-content paragraf">
                        <img class="responsive-img" width="100%" src="<?= base_url('img/artikel-img/'); ?><?= $artikel->foto; ?>">
                        <p class="blue-grey-text text-darken-3 responsive-img"><?= htmlspecialchars_decode($artikel->isi_artikel, ENT_HTML5); ?></p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <section class="popular">
            <div class="row">
                <h6 class="center sub-title-main">New Choise</h6>
                <h5 class="title-main center">-Artikel Terbaru-</h5>
                <?php
                foreach ($latest as $list) {
                ?>
                    <div class="col m4 s12">
                        <div class="card list-artikel">
                            <a href="<?= site_url('artikel/page/' . $list->slug); ?>">
                                <div data-aos="zoom-out" data-aos-duration="1500" class="card-image">
                                    <img src="<?= base_url('img/artikel-img/thumbnail/'); ?><?= $list->thumbnail; ?>" alt="<?= $list->thumbnail; ?>">
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
                                <div class="col m1 s1 foto-penulis-sub"><img class="left z-depth-1" src="<?= base_url('img/profile/'); ?><?= $list->foto_user; ?>" width="35"></div>
                                <div class="col m7 s7 date-artikel-sub">
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
        </section>
    </div>
</div>