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

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($film as $item) { ?>
                                <div class="swiper-slide">
                                    <a href=" <?= base_url() ?>detail/<?= $item->id_film ?>" class="img-bg d-flex align-items-end" style="background-image: url('<?= base_url('assets/img/' . $item->foto) ?>');">
                                        <div class="img-bg-inner">
                                            <h2><?= $item->judul ?></h2>
                                            <p><?= $item->deskripsi ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <?php if (empty($film)) : ?>
                            <div class="col-lg-4"><br></div>
                            <div class="col-lg-4">
                                <img src="<?= base_url('assets/img/notfound.jpg') ?>" alt="" class="img-fluid">
                            </div>
                        <?php endif; ?>
                        <?php
                        foreach ($film as $item) { ?>
                            <div class="col-lg-2 border-start custom-border">
                                <div class="post-entry-1">
                                    <a href=" <?= base_url() ?>detail/<?= $item->id_film ?>"><img src="<?= base_url('assets/img/' . $item->gambar) ?>" alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date"><?= $item->genre ?></span> <span class="mx-1">&bullet;</span> <span><?= $item->tahun_rilis ?></span></div>
                                    <h2><a href=" <?= base_url() ?>detail/<?= $item->id_film ?>"><?= $item->judul ?></a></h2>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->
</main>