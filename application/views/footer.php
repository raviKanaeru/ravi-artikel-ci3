 <!-- footer -->
 <footer data-aos="fade-up" data-aos-duration="2000" class="page-footer">
     <div class="container">
         <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000" class="row">
             <div class="col l5 s12 footer-link">
                 <h5 class="white-text">Ravi Artikel</h5>
                 <p class="grey-text text-lighten-4">Di website Ravi Artikel menyajikan beberapa Kategori artikel yaitu kategori flora, fauna, dan persoalan iklim dibumi yang kita cintai ini.</p>
             </div>
             <div class="col l4 offset-l3 s12">
                 <h5 class="white-text">Follow Us</h5>
                 <ul>
                     <li>
                         <a href="#">
                             <p class="grey-text text-lighten-3"><i class="material-icons notranslate">email</i> 210401120@student.umri.ac.id</p>
                         </a>
                     </li>
                     <li>
                         <a href="https://g.page/Umrihebat?share">
                             <p class="grey-text text-lighten-3"><i class="material-icons notranslate">location_on</i> Pekanbaru, Riau</p>
                         </a>
                     </li>

                     <li>
                         <a href="#">
                             <p class="grey-text text-lighten-3"><i class="material-icons notranslate">phone</i>+620920372938</p>
                         </a>
                     </li>

                     <li>
                         <a href="https://umri.ac.id/">
                             <p class="grey-text text-lighten-3"><i class="material-icons notranslate">school</i> Universitas Muhammadiyah Riau</p>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="footer-copyright">
         <div class="container">
             © 2022 Copyright Muhammad Ravi
         </div>
     </div>
 </footer>
 <script src="<?= base_url('asset/'); ?>sweetalert2/sweetalert2.all.min.js"></script>
 <script src="<?= base_url('asset/'); ?>swiper/swiper-bundle.min.js"></script>
 <script>
     const swiper = new Swiper('.swiper', {
         // Optional parameters
         direction: 'horizontal',
         loop: true,

         autoplay: {
             delay: 5000,
         },
     });
 </script>
 <script src="<?= base_url('asset/'); ?>aos/aos.js"></script>
 <script>
     AOS.init({
         duration: 400,
         once: true,
     });
 </script>
 <script src="<?= base_url('asset/'); ?>js/materialize.min.js"></script>

 <?php if ($this->session->flashdata('feedback') == "not_found") { ?>
     <script>
         Swal.fire({
             icon: 'error',
             title: 'Not Found',
             text: 'Artikel Tidak Ditemukan!',
         })
     </script>
 <?php
    } ?>
 <!-- sidenav -->
 <script>
     const sideNav = document.querySelectorAll('.sidenav');
     M.Sidenav.init(sideNav);
 </script>


 </body>

 </html>