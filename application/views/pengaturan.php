<main id="main">
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Data Film</h1>
                </div>
            </div>

            <div class="form mt-3 php-email-form">
                <a href="<?= base_url('tambah_film') ?>"><button type="button" class="btn btn-primary">Tambah Film</button></a>
                <div class="table-responsive-sm">
                    <table class=" table table-bordered mt-3">
                        <thead class="text-center">
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Tahun Rilis</th>
                            <th>Genre</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody class="text-center">



                            <?php
                            $no = 1;
                            foreach ($film as $item) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><img src="<?= base_url('assets/img/' . $item->gambar) ?>" width="100"></td>
                                    <td class="text-right"><?= $item->judul ?></td>
                                    <td><?= $item->tahun_rilis ?></td>
                                    <td><?= $item->genre ?></td>
                                    <td>
                                        <a href="<?= $item->download ?>"><button type="button" class="btn btn-success">Download</button></a>
                                        <a href="<?= base_url() ?>ubah_film/<?= $item->id_film ?>"><button type="button" class="btn btn-warning">Ubah</button></a>
                                        <button id="btn-hapus" onclick="konfirmHapus(<?= $item->id_film ?>)" type="button" class="btn btn-danger">Hapus</button>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <?php if (empty($film)) : ?>

                    <div class="alert alert-danger" role="alert">
                        Data film tidak ditemukan!
                    </div>

                <?php endif; ?>
                <script>
                    function konfirmHapus(id) {
                        Swal.fire({
                            title: "Apakah ingin hapus data ini?",
                            text: "Data tidak dapat dikembalikan setelah dihapus!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Ya, hapus!",
                            cancelButtonText: "Tidak jadi"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "<?= base_url('hapus_film/') ?>" + id
                            }
                        });
                    }
                </script>
            </div><!-- End Contact Form -->

        </div>
    </section>

</main>