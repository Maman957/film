<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="logo d-flex align-items-center">
            <img src="<?= base_url('assets/img/foto.png') ?>" alt="">
            <h1>Manky Film</h1>

        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= base_url('dasbord') ?>">Home</a></li>
                <li class="dropdown"><a href=""><span>Genre</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="<?= base_url('drama') ?>">Drama</a></li>
                        <li><a href="<?= base_url('fantasi') ?>">Fantasi</a></li>
                        <li><a href="<?= base_url('roman') ?>">Roman</a></li>
                        <li><a href="<?= base_url('animasi') ?>">Animasi</a></li>
                        <li><a href="<?= base_url('komedi') ?>">Komedi</a></li>
                        <li><a href="<?= base_url('fiksi_ilmiah') ?>">Fiksi Ilmiah</a></li>
                        <li><a href="<?= base_url('misteri') ?>">Misteri</a></li>
                        <li><a href="<?= base_url('action') ?>">Action</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span>Tahun Rilis</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="<?= base_url('pertama') ?>">2000-2009</a></li>
                        <li><a href="<?= base_url('kedua') ?>">2010-2019</a></li>
                        <li><a href="<?= base_url('ketiga') ?>">2020-2029</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('favorite') ?>">Favorite</a></li>
            </ul>
        </nav>

        <div class="logo d-flex align-items-center position-relative">
            <a href="#" class="mx-3 js-search-open"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div>
            <form action="<?= base_url('dasbord') ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search.." name="keyword" autocomplete="off">
                    <input class="btn btn-outline-secondary" type="submit" name="submit">
                </div>
            </form>
            <a href="<?= base_url() ?>" class="mx-2"><img src="<?= base_url('assets/img/keluar.png') ?>" width="30"></a>

        </div>

    </div>

</header>
<main id="main">

    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="col-lg-12">
                            <div class="row g-3">
                                <div class="ratio ratio-16x9">
                                    <iframe src="<?= $film['video'] ?>">
                                    </iframe>
                                </div>
                                <h1 class="mb-3"><?= $film['judul'] ?></h1>
                                <div class=" post-meta">
                                    <span class="date"><?= $film['genre'] ?></span> <span class="mx-1">&bullet;</span> <span><?= $film['tahun_rilis'] ?></span>
                                </div>
                                <p> <?= $film['deskripsi'] ?></p>
                                <form method="post" action="<?= base_url('simpan_favorite') ?>">
                                    <a href="<?= $film['download'] ?>"><button type="button" class="btn btn-success">Download</button></a>
                                    <input type="hidden" name="id_film" value="<?= $film['id_film'] ?>">
                                    <input type="hidden" name="id_pengguna" value="<?= $this->session->userdata('id_pengguna') ?>">
                                    <button type="submit" class="btn btn-warning">Favorite</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Single Post Content -->

                    <!-- ======= Comments ======= -->
                    <div class="comments">
                        <h5 class="comment-title py-4">Komentar</h5>

                        <?php
                        foreach ($komentar as $item) { ?>
                            <div class="comment d-flex mb-4">
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex align-items-baseline">
                                        <h6 class="me-2"><?= $item->nama ?></h6>
                                    </div>
                                    <div class="comment-body">
                                        <?= $item->pesan ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div><!-- End Comments -->

                    <!-- ======= Comments Form ======= -->
                    <div class="row justify-content-center mt-5">

                        <div class="col-lg-12">
                            <h5 class="comment-title">Buat Komentar</h5>
                            <div class="row">
                                <form method="post" action="<?= base_url('simpan_komentar') ?>">
                                    <input type="hidden" name="id_film" value="<?= $film['id_film'] ?>">
                                    <input type="hidden" name="id_pengguna" value="<?= $this->session->userdata('id_pengguna') ?>">
                                    <div class="col-12 mb-3">
                                        <textarea class="form-control" id="comment-message" name="pesan" cols="30" rows="3"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Comments Form -->
                </div>
    </section>
</main>