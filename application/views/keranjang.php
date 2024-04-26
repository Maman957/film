<div class="cart">
    <?php
    $total = 0;
    foreach ($produk as $item) {
        $total += $item->harga_jual;
    ?>
        <div class="item">
            <?php $item->harga_jual; ?>
            <img src="<?= base_url() ?>assets/img/produk/<?= $item->gambar ?>" class="h-50" alt="Product Image" />
            <div class="item-details">
                <h4 class="d-inline-block"><strong><?= $item->nama_produk ?></strong></h4>
                <div class="input-group">
                    <label for="harga" class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-form-label">
                        Harga
                    </label>
                    <label for="harga" class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-form-label">Rp.<?= $item->harga_jual; ?>,00</label>
                </div>
                <div class="input-group">
                    <label for="jumlah" class="col-sm-1 col-form-label">
                        jumlah
                    </label>
                    <form>
                        <input id="jumlah" name="jumlah" type="number" class="form-control validate  col-xl-5 col-lg-5 col-md-5 col-sm-5">
                    </form>

                </div>
            </div>
            <button class="remove-button">Hapus</button>
        </div>
    <?php } ?>
    <div class="total">
        <h4>Total Belanja: Rp.<?= $total; ?>,00</h4>
        <button class="checkout-button">Checkout</button>
    </div>
    <br>
</div>