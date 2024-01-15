<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <div class="logo d-flex align-items-center">
      <img src="<?= base_url('assets/img/foto.png') ?>" alt="">
      <h1>Manky Film</h1>

    </div>

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
      <form action="<?= base_url('pengaturan') ?>" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search.." name="keyword" autocomplete="off">
          <input class="btn btn-outline-secondary" type="submit" name="submit">
        </div>
      </form>
      <a href="<?= base_url() ?>" class="mx-2"><img src="<?= base_url('assets/img/keluar.png') ?>" width="30"></a>

    </div>

  </div>

</header>