    <!-- profile vendor -->

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md p-0 kotakKategori profileVendor">
                        <div class="sampulVendor w-100">
                            <img class="w-100" src="<?= $profileVen['header_vendor'] ?>" alt="">
                        </div>
                        <div class="row my-4 px-5">
                            <div class="col-md-auto">
                                <img class="foto-profil-vendor" src="<?= $profileVen['profile_img'] ?>" alt="">
                            </div>
                            <div class="col-md-6 align-items-center mx-3 mt-1">
                                <h3><?= $profileVen['nama_vendor'] ?></h3>
                                <p><?= $profileVen['deskripsi_vendor'] ?></p>
                                <div class="mb-2 d-flex align-items-center">
                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> 
                                    <span class="vendorplace ml-1"><?= $profileVen['daerah_vendor'] ?></span>
                                    <div class="vr d-inline mx-3"></div>
                                    <span class="followers"><?= $profileVen['followers_vendor'] ?> Followers</span>
                                </div>
                            </div>
                            <div class="col-md d-flex align-items-center justify-content-center buttonProfileVendor">
                                <button class="btn btn-follow">Ikuti</button>
                                <button class="btn btn-infovendor ml-3">Info Vendor</button>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- profile vendor end -->


    <!-- barang vendor -->

                <div class="row justify-content-center info-panel">
                    <div class="col-md">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" role="tab" data-toggle="tab" href="#rentalProduk">Rental produk</a>
                            </li>
                            <li class="nav-item d-none">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#sewaJasa">Sewa jasa</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane infoProdukVendor mt-4 fade show active" id="rentalProduk" role="tabpanel">
                                <div class="row">
                                    <div class="col-md">
                                        <form class="form-inline  my-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control px-3" placeholder="Cari vendor atau barang" aria-label="searchBarang" aria-describedby="btnSearchBarang">
                                                <div class="input-group-append">
                                                    <button class="btn btn-search px-2 py-1" id="btnSearchBarang">
                                                        <img class="d-flex align-items-center" src="<?= base_url() ?>assets/assets/images/serch_icon.svg" alt="SearchIcon">
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group row">
                                            <label class="col-sm col-form-label urutkan">Urutkan:</label>
                                            <div class="col-sm-5 pl-0">
                                                <select class="form-control selectSort">
                                                    <option>Paling sesuai</option>
                                                    <option>Terbaru</option>
                                                    <option>Termurah</option>
                                                    <option>Termahal</option>
                                                </select>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-5 listProduk">
                                    <?php foreach ($produkVen as $produk) : ?>
                                    <div class="kotakProduk mb-5 pb-3">
                                    <a class href="<?= base_url(); ?>detailbarang/index/<?= $produk['id_barang'] ?>">
                                        <div class="fotoProduk">
                                            <img src="<?= $produk['foto'] ?>" alt="Produk 1">
                                        </div>
                                        <div class="detailProduk mx-3 mt-2">
                                            <h5 class="titleProduk"><?= $produk['nama'] ?></h5>
                                            <p class="hargaProduk mt-2">Rp <?= number_format($produk['harga_awal'],0,".",".") ?> - Rp <?= number_format($produk['harga_akhir'],0,".",".") ?></p>
                                            <div class="mt-1">
                                                <img class="iconPlace" src="<?= base_url() ?>/assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace"><?= $produk['vendorPlace'] ?></span>
                                            </div>
                                            <?php $n = 5 - $produk['jumlahRating'] ?>
                                            <div class="rating my-2 d-flex align-items-center">
                                                <?php for ($i = 0; $i < $produk['jumlahRating']; $i++) : ?>
                                                <i class="fas fa-star float-left starRating"></i>
                                                <?php endfor ; ?>
                                                <?php for ($i = 0; $i < $n; $i++) : ?>
                                                <i class="fas fa-star float-left starRating star5"></i>
                                                <?php endfor ; ?>
                                                <span class="ml-1 ratingCount">(<?= $produk['jumrating'] ?>)</span>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    <?php endforeach ; ?>
                                </div>
                                <?= $this->pagination->create_links(); ?>
                            </div>
                            <div class="tab-pane infoProdukVendor mt-4 fade show" id="sewaJasa" role="tabpanel">
                                <div class="row">
                                    <div class="col-md">
                                        <form class="form-inline  my-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control px-3" placeholder="Cari vendor atau barang" aria-label="searchBarang" aria-describedby="btnSearchBarang">
                                                <div class="input-group-append">
                                                    <button class="btn btn-search px-2 py-1" id="btnSearchBarang">
                                                        <img class="d-flex align-items-center" src="<?= base_url() ?>assets/assets/images/serch_icon.svg" alt="SearchIcon">
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group row">
                                            <label class="col-sm col-form-label urutkan">Urutkan:</label>
                                            <div class="col-sm-5 pl-0">
                                                <select class="form-control selectSort">
                                                    <option>Paling sesuai</option>
                                                    <option>Terbaru</option>
                                                    <option>Termurah</option>
                                                    <option>Termahal</option>
                                                </select>
                                                <i class="fa fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-5 listProduk">
                                    <div class="kotakProduk pb-3">
                                        <a class href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3 last">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-5 listProduk">
                                    <div class="kotakProduk pb-3">
                                        <a class href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3 last">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-5 listProduk">
                                    <div class="kotakProduk pb-3">
                                        <a class href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="kotakProduk pb-3 last">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/assets/images/produk_1.png" alt="Produk 1">
                                            <div class="detailProduk mx-3 mt-2">
                                                <h5 class="titleProduk"> Canon EOS M100 Kit 15 - 45mm Kamera Mirrorless - White</h5>
                                                <p class="hargaProduk mt-2">Rp 100.000 - Rp 3.000.000</p>
                                                <div class="mt-1">
                                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace">Bandung</span>
                                                </div>
                                                <div class="rating my-2 d-flex align-items-center">
                                                    <i class="fas fa-star float-left starRating star1"></i>
                                                    <i class="fas fa-star float-left starRating star2"></i>
                                                    <i class="fas fa-star float-left starRating star3"></i>
                                                    <i class="fas fa-star float-left starRating star4"></i>
                                                    <i class="fas fa-star float-left starRating star5"></i>
                                                    <span class="ml-1 ratingCount">(8)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-5 mb-0">
                                        <li class="page-item disabled mx-3">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <i class="fa fa-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item mx-3">
                                            <a class="page-link" href="#">
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- barang vendor -->

            </div>
        </div>
    </div>

    <!-- profile vendor end -->