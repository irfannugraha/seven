    <!-- carousel -->
    <div class="container-fluid">
        <div class="row justify-content-center info-panel">
            <div class="col-md-10 kolom">
                <section class="slider-area slider">
                    <?php foreach ($carouselimg as $promo) : ?>
                    <div><img src="<?= $promo['url_image'] ?>" alt="" class="carouselItem" style="width: 600px; height: 300px;"></div>
                    <?php endforeach ; ?>
                </section>
            </div>
        </div>
    </div>
    <!-- carousel end -->

    <!-- kategori -->
    <div class="container-fluid d-none">
        <div class="row justify-content-center kolom">
            <div class="col-md-10 kotakKategori">
                <div class="row">
                    <div class="col-md">
                        <h3>Rental Produk</h3>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_camera.svg" alt="Camera Icon">
                                <h5>Kamera</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_pakaian.svg" alt="Camera Icon">
                                <h5>Pakaian</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_otomotif.svg" alt="Camera Icon">
                                <h5>Otomotif</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_buku.svg" alt="Camera Icon">
                                <h5>Buku</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_presentation.svg" alt="Camera Icon">
                                <h5>Presentasi</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_guitar.svg" alt="Camera Icon">
                                <h5>Alat musik</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_olahrag.svg" alt="Camera Icon">
                                <h5>Olahraga</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md">
                        <h3>Sewa Jasa</h3>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_audio.svg" alt="Camera Icon">
                                <h5>Audio</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_kecantikan.svg" alt="Camera Icon">
                                <h5>Kecantikan</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_konveksi.svg" alt="Camera Icon">
                                <h5>Konveksi</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_makanan.svg" alt="Camera Icon">
                                <h5>Makanan</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_kebersihan.svg" alt="Camera Icon">
                                <h5>Kebersihan</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_photography.svg" alt="Camera Icon">
                                <h5>Photography</h5>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="float-left text-center link-kategori">
                                <img src="<?= base_url() ?>/assets/assets/images/icon_panggung.svg" alt="Camera Icon">
                                <h5>Panggung</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- kategori end -->

    <!-- list barang - produk terlaris -->

    <div class="container-fluid">
        <div class="row justify-content-center kolom">
            <div class="col-md-10 titleGroup">
                <h2>Produk Terlaris</h2>
                <div class="row justify-content-center listProduk">
                    <?php for ($x = 0; $x < count($popular); $x++) : ?>
                    <div class="kotakProduk pb-3">
                        <a class href="<?= base_url(); ?>detailbarang/index/<?= $popular[$x]['id_barang'] ?>">
                            <div class="fotoProduk">
                                <img src="<?= $popular[$x]['foto'] ?>" alt="Produk 1">
                            </div>
                            <div class="detailProduk mx-3 mt-2">
                                <h5 class="titleProduk"><?= $popular[$x]['nama'] ?></h5>
                                <p class="hargaProduk mt-2">Rp <?= number_format($popular[$x]['harga_awal'],0,".",".") ?> - Rp <?= number_format($popular[$x]['harga_akhir'],0,".",".") ?></p>
                                <div class="mt-1">
                                    <img class="iconPlace" src="<?= base_url() ?>/assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace"><?= $lokasiPopular[$x] ?></span>
                                </div>
                                <!-- <?php $n = 5 - $popular[$x]['jumlahRating'] ?> -->
                                <div class="rating my-2 d-flex align-items-center">
                                    <!-- <?php for ($i = 0; $i < $popular[$x]['jumlahRating']; $i++) : ?> -->
                                    <i class="fas fa-star float-left starRating"></i>
                                    <!-- <?php endfor ; ?> -->
                                    <!-- <?php for ($i = 0; $i < $n; $i++) : ?> -->
                                    <i class="fas fa-star float-left starRating star5"></i>
                                    <!-- <?php endfor ; ?> -->
                                    <span class="ml-1 ratingCount">(<?= $popular[$x]['rating'] ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endfor ; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- list barang - produk terlaris end-->

    <!-- list barang - produk terbaru -->

    <div class="container-fluid">
        <div class="row justify-content-center kolom">
            <div class="col-md-10 titleGroup">
                <h2>Produk Terbaru</h2>
                <div class="row justify-content-center listProduk">
                    <?php for ($x = 0; $x < count($lastest); $x++) : ?>
                    <div class="kotakProduk pb-3">
                        <a class href="#">
                            <div class="fotoProduk">
                                <img src="<?= $lastest[$x]['foto'] ?>" alt="Produk 1">
                            </div>
                            <div class="detailProduk mx-3 mt-2">
                                <h5 class="titleProduk"><?= $lastest[$x]['nama'] ?></h5>
                                <p class="hargaProduk mt-2">Rp <?= number_format($lastest[$x]['harga_awal'],0,".",".") ?> - Rp <?= number_format($lastest[$x]['harga_akhir'],0,".",".") ?></p>
                                <div class="mt-1">
                                    <img class="iconPlace" src="<?= base_url() ?>/assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace"><?= $lokasiLastest[$x] ?></span>
                                </div>
                                <!-- <?php $n = 5 - $lastest[$x]['jumlahRating'] ?> -->
                                <div class="rating my-2 d-flex align-items-center">
                                    <!-- <?php for ($i = 0; $i < $lastest[$x]['jumlahRating']; $i++) : ?> -->
                                    <i class="fas fa-star float-left starRating"></i>
                                    <!-- <?php endfor ; ?> -->
                                    <!-- <?php for ($i = 0; $i < $n; $i++) : ?> -->
                                    <i class="fas fa-star float-left starRating star5"></i>
                                    <!-- <?php endfor ; ?> -->
                                    <span class="ml-1 ratingCount">(<?= $lastest[$x]['rating'] ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endfor ; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- list barang - produk terbaru end-->

    <!-- list barang - Jasa terbaru -->

    <!-- DIILANGIN DULU, BELUM ADA DATANYA DI DATABASE -->

    <!-- <div class="container-fluid d-none">
        <div class="row justify-content-center kolom">
            <div class="col-md-10 titleGroup">
                <h2>Jasa Terbaru</h2>
                <div class="row justify-content-center listProduk">
                <?php for ($x = 0; $x < count($jasa)-1; $x++) : ?>
                    <div class="kotakProduk pb-3">
                        <a class href="#">
                            <div class="fotoProduk">
                                <img src="<?= $jasa[$x]['foto'] ?>" alt="Produk 1">
                            </div>
                            <div class="detailProduk mx-3 mt-2">
                                <h5 class="titleProduk"><?= $jasa[$x]['nama'] ?></h5>
                                <p class="hargaProduk mt-2">Rp <?= number_format($jasa[$x]['harga_awal'],0,".",".") ?> - Rp <?= number_format($jasa[$x]['harga_akhir'],0,".",".") ?></p>
                                <div class="mt-1">
                                    <img class="iconPlace" src="<?= base_url() ?>/assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                </div>
                                <?php $n = 5 - $jasa[$x]['jumlahRating'] ?>
                                <div class="rating my-2 d-flex align-items-center">
                                    <?php for ($i = 0; $i < $jasa[$x]['jumlahRating']; $i++) : ?>
                                    <i class="fas fa-star float-left starRating"></i>
                                    <?php endfor ; ?>
                                    <?php for ($i = 0; $i < $n; $i++) : ?>
                                    <i class="fas fa-star float-left starRating star5"></i>
                                    <?php endfor ; ?>
                                    <span class="ml-1 ratingCount">(<?= $jasa[$x]['jumrating'] ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endfor ; ?>
                    <div class="kotakProduk pb-3 last">
                        <a class href="#">
                            <div class="fotoProduk">
                                <img src="<?= $jasa[count($jasa)-1]['foto'] ?>" alt="Produk 1">
                            </div>
                            <div class="detailProduk mx-3 mt-2">
                                <h5 class="titleProduk"><?= $jasa[count($jasa)-1]['nama'] ?></h5>
                                <p class="hargaProduk mt-2">Rp <?= number_format($jasa[count($jasa)-1]['harga_awal'],0,".",".") ?> - Rp <?= number_format($jasa[count($jasa)-1]['harga_akhir'],0,".",".") ?></p>
                                <div class="mt-1">
                                    <img class="iconPlace" src="<?= base_url() ?>/assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                </div>
                                <?php $n = 5 - $jasa[count($jasa)-1]['jumlahRating'] ?>
                                <div class="rating my-2 d-flex align-items-center">
                                    <?php for ($i = 0; $i < $jasa[count($jasa)-1]['jumlahRating']; $i++) : ?>
                                    <i class="fas fa-star float-left starRating"></i>
                                    <?php endfor ; ?>
                                    <?php for ($i = 0; $i < $n; $i++) : ?>
                                    <i class="fas fa-star float-left starRating star5"></i>
                                    <?php endfor ; ?>
                                    <span class="ml-1 ratingCount">(<?= $jasa[count($jasa)-1]['jumrating'] ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- list barang - Jasa terbaru end-->

    <div class="container-fluid">
        <div class="row justify-content-center kolom mt-5">
            <div class="col-md-10">
                <div class="row">
                    <a href="#" style="text-decoration: none;">
                        <div class="col ml-3 mr-5 bgRental kotakHowTo">
                            <div class="overlay"></div>
                            <div class="py-2 ml-2">
                                <p class="backTitleHowTo">Bagaimana caranya rental produk di SEVEN?</p>
                                <p class="foreTitleHowTo">Bagaimana caranya rental produk di SEVEN?</p>
                                <a href="#">
                                    <button class="btn btn-readmore mt-3">
                                        <p class="m-0"> Read more <span class="ml-2"><i class="fas fa-long-arrow-alt-right"></i></span></p>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </a>
                    <a href="#" style="text-decoration: none;">
                        <div class="col mr-3 bgSewa kotakHowTo">
                            <div class="overlay"></div>
                            <div class="py-2 ml-2 kotak2">
                                <p class="backTitleHowTo">Bagaimana caranya sewa jasa di SEVEN?</p>
                                <p class="foreTitleHowTo">Bagaimana caranya sewa jasa di SEVEN?</p>
                                <a href="#">
                                    <button class="btn btn-readmore sewa">
                                        <p class="m-0"> Read more <span class="ml-2"><i class="fas fa-long-arrow-alt-right"></i></span></p>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
