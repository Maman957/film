<div class="row tm-content-row tm-mt-big">
    <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
        <section>
            <div class="text-center">
                <form action="<?= base_url('katalog') ?>" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search.." name="keyword" autocomplete="off">
                        <input class="btn btn-small btn-outline-secondary" type="submit" name="submit">
                    </div>
                </form>
                <br>
                <div class="row">
                    <?php
                    foreach ($produk as $item) { ?>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                    <img src="<?= base_url() ?>assets/img/produk/<?= $item->gambar ?>" class="w-100" />
                                    <a href="#!">
                                        <div class="mask">
                                            <div class="d-flex justify-content-start align-items-end h-100">
                                                <h5><span class="badge bg-danger ms-2">NEW</span></h5>
                                            </div>
                                        </div>
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="" class="text-reset">
                                        <h5 class="card-title mb-2"><?= $item->nama_produk; ?></h5>
                                    </a>
                                    <div class="mb-3 price">
                                        <h4>Rp<?= $item->harga_jual; ?></h4>
                                    </div>
                                    <form method="post" action="<?= base_url('simpan_keranjang') ?>">
                                        <input type="hidden" name="id_produk" value="<?= $item->id_produk; ?>">
                                        <input type="hidden" name="id_pengguna" value="<?= $this->session->userdata('id_pengguna') ?>">
                                        <button type="submit" class="btn btn-primary mx-auto">Beli</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>