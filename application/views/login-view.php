<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>">
    <meta name="keywords" content="<?= $keyword; ?>">
    <meta name="google-site-verification" content="JcFT66ycrQ04X-8XArXEB38NuSpzfr2OAh8hnoATStQ" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>aos/aos.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>css/materialize.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="<?= base_url('img/'); ?>logo/ravi-artikel-icon.png">
</head>

<body>
    <div class="bg-login">
        <div class=" container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel login grey lighten-5">
                        <div class="col s12 m6 bg-white hide-on-small-only side-img-bg">
                            <img src="<?= base_url('img/'); ?>komponen/bg1.jpg" alt="side background login" width="450" height="500">
                        </div>
                        <div class="col s12 m6 right-side-login">
                            <div class="sl-bg show-on-small">
                                <div class="center logo-login">
                                    <img src="<?= base_url('img/'); ?>logo/ravi-artikel-logo.png" width="130" height="40" alt="ravi artikel">
                                </div>
                                <h5 class="center">Login</h5>
                                <div class="row">
                                <?= form_open('login') ?>
                                        <div class="input-field col s12">
                                            <input placeholder="Masukkan Username..." id="first_name" type="text" name="username" class="validate" value="<?= set_value('username'); ?>" required>
                                            <label for="first_name">Username</label>
                                            <?= form_error('username', '<span class="helper-text" data-error="wrong" data-success="right" style="color:red;">', '</span>'); ?>
                                        </div>
                                        <div class="input-field col s12">
                                            <input placeholder="Masukkan Password..." id="first_name" name="password" type="password" class="validate" value="<?= set_value('password'); ?>" required>
                                            <label for="first_name">Password</label>
                                        </div>
                                        <div class="input-field col l12 s12">
                                            <button name="login" value="login" type="submit" class="waves-effect waves-light btn" style="width: 100%;">Login</button>
                                            <a href="<?= site_url('home/'); ?>" class="center">
                                                <p class="center teal-text text-darken-4">Back Home</p>
                                            </a>
                                        </div>
                                        <?= form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('asset/'); ?>sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('asset/'); ?>aos/aos.js"></script>
    <script>
        AOS.init({
            duration: 400,
            once: true,
        });
    </script>
    <script src="<?= base_url('asset/'); ?>js/materialize.min.js"></script>
    <script src="<?= base_url('asset/'); ?>js/script.js"></script>
    <?php if ($this->session->flashdata('message_login') == "wrong") { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal Login',
                text: 'Username atau Password Anda Salah!',
            })
        </script>
    <?php
    } ?>
</body>

</html>