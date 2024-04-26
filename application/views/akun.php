<div class="row tm-content-row tm-mt-big">
    <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
        <div class="bg-light tm-block h-100">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h2 class="tm-block-title d-inline-block"><strong>Data Pengguna</strong></h2>
                </div>
                <div class="col-md-4 col-sm-12 text-right">
                    <a href="<?= base_url('tambah_produk') ?>" class="btn btn-small btn-primary">Tambah Pengguna</a>
                </div>
            </div>
            <br>
            <form action="<?= base_url('akun') ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search.." name="keyword" autocomplete="off">
                    <input class="btn btn-small btn-outline-secondary" type="submit" name="submit">
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered tm-table-striped-even mt-3">
                    <thead>
                        <tr class="tm-bg-gray">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col" class="text-center">Gambar</th>
                            <th scope="col" class="text-center">Username</th>
                            <th scope="col" class="text-center">Password</th>
                            <th scope="col" class="text-center">Alamat</th>
                            <th scope="col" class="text-center">No Telepon</th>
                            <th scope="col" class="text-center">Role</th>
                            <th scope="col" class="text-center">Tanggal Update</th>
                            <th scope="col" class="text-center">Hapus</th>
                            <th scope="col" class="text-center">Ubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pengguna as $item) { ?>
                            <tr class="tm-bg-white">
                                <td class="tm-product-name"><?= $no++; ?></td>
                                <td class="tm-product-name"><?= $item->nama_pengguna; ?></td>
                                <td class="text-center"><?php if ($item->foto == null) {
                                                        ?> <img src="<?= base_url() ?>assets/img/produk/profil.png" height="100px"> <?php
                                                                                                                                } else {
                                                                                                                                    ?> <img src="<?= base_url() ?>assets/img/produk/<?= $item->foto ?>" height="100px"> <?php
                                                                                                                                                                                                                    } ?></td>
                                <td class="text-center"><?= $item->username; ?></td>
                                <td class="text-center"><?= $item->password; ?></td>
                                <td class="text-center"><?= $item->alamat; ?></td>
                                <td class="text-center"><?= $item->nomor_telepon; ?></td>
                                <td class="text-center"><?php if ($item->role == 1) {
                                                            echo 'Admin';
                                                        } else {
                                                            echo 'Pelanggan';
                                                        } ?>
                                <td class="text-center"><?= $item->tanggal_update; ?></td>
                                <td class="text-center"><i class="fas fa-trash-alt tm-trash-icon" id="btn-hapus" onclick="konfirmHapus(<?= $item->id_pengguna ?>)" type="button"></i> </td>
                                <td class="text-center"><a href="<?= base_url() ?>ubah_produk/<?= $item->id_pengguna ?>"><i class="fas fa-pencil-alt tm-trash-icon" type="button"></i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script>
        function konfirmHapus(id) {
            Swal.fire({
                title: "Apakah Anda ingin menghapus pengguna ini?",
                text: "Data pengguna tidak dapat dipulihkan setelah dihapus!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Tidak jadi"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?= base_url('hapus_akun/') ?>" + id
                }
            });
        }
    </script>