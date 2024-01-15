<main id="main">
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Tambah Film</h1>
                </div>
            </div>
            <form method="post" action="<?= base_url('simpan_film') ?>" enctype="multipart/form-data">
                <div class="form mt-5 php-email-form">
                    <div class="form-group mb-3 row">
                        <label for="judul" class="col-sm-1 col-form-label">Judul</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" name="judul" id="subject" required>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="tahun_rilis" class="col-sm-1 col-form-label">Tahun Rilis</label>
                        <div class="col-sm-5">
                            <input type="text" name="tahun_rilis" class="form-control" id="name" required>
                        </div>
                        <label for="genre" class="col-sm-1 col-form-label">Genre</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="genre" id="genre" required>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="download" class="col-sm-1 col-form-label">Link Film</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" name="download" id="subject" required>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="video" class="col-sm-1 col-form-label">Link Video</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" name="video" id="subject" required>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="deskripsi" class="col-sm-1 col-form-label">Deskripsi</label>
                        <div class="col-sm-11">
                            <textarea class="form-control" name="deskripsi" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="gambar" class="col-sm-1 col-form-label">Poster</label>
                        <div class="col-sm-11">
                            <input type="file" class="form-control" name="gambar" id="subject" required>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="foto" class="col-sm-1 col-form-label">Banner</label>
                        <div class="col-sm-11">
                            <input type="file" class="form-control" name="foto" id="subject" required>
                        </div>
                    </div>
                    <div class="text-center"><button type="submit">Simpan</button></div>

                </div>
            </form><!-- End Contact Form -->

        </div>
    </section>
</main>