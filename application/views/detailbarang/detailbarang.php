    <!-- Detail barang -->

    <div class="container-fluid">
        <div class="row justify-content-center info-panel">
            <div class="col-md-10 mt-5 kolom">
                <div class="row justify-content-center">

                    <!-- Gambar Produk Detail -->

                    <div class="col-md-auto p-0 gambarProduk" id="imgProduk">
                        <div class="gambarDetail" style="height: 60%;">
                            <img class="img-thumbnail" src="<?= $detailBarang->Get_Foto() ?>" alt="GambarProduk" id="show-img">
                        </div>
                        <div class="small-img">
                            <img class="icon-left" src="<?= base_url() ?>assets/assets/images/Produk/next-icon.png" alt="" id="prev-img">
                                <div class="small-container">
                                    <div class="small-img-roll">
                                        <img src="<?= $detailBarang->Get_Foto() ?>" alt="" class="show-small-img">
                                    </div>
                                </div>
                            <img class="icon-right" src="<?= base_url() ?>assets/assets/images/Produk/next-icon.png" alt="" id="next-img">
                        </div>
                    </div>

                    <!-- End of Gambar Produk Detail -->

                    <!-- Detail Produk -->

                    <div class="col-md-5 ml-4 p-0 toBottom detailedProduk">
                        <h2 class="titleProduk mb-2"><?= $detailBarang->Get_Nama() ?></h2>
                        <div class="rating mb-2 d-flex align-items-center">
                                <i class="fas fa-star float-left ml-0 starRating"></i>
                            <i class="fas fa-star float-left starRating"></i>
                            <i class="fas fa-star float-left starRating star5"></i>
                            <span class="ml-2 my-auto ratingCount">(<?= $detailBarang->Get_Rating() ?>)</span>
                        </div>
                        <h2 class="hargaProduk mb-2">Rp <?= number_format($detailBarang->Get_Harga_awal(),0,".",".") ?> - Rp <?= number_format($detailBarang->Get_Harga_akhir(),0,".",".") ?></h2>
                        <div class="mb-2 d-flex align-items-center">
                            <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> 
                            <span class="vendorplace ml-1"><?= $detailVendor->Get_Daerah_vendor() ?></span>
                        </div>
                        <div class="row mt-5 amountDetail">
                            <div class="col-md-5">
                                <p class="mb-2">Lama Rental</p>
                                <div class="d-flex align-item-center">
                                    <div class="input-group float-left">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-inc px-3 py-1" onclick="document.getElementById('lamaHari').stepDown()" id="incdecLamaSewa">
                                                -
                                            </button>
                                        </div>
                                        <input type="number" id="lamaHari" class="form-control px-2 text-center" min="1" max="30" value="1" aria-describedby="incdecLamaSewa">
                                        <div class="input-group-append">
                                            <button class="btn btn-dec px-3 py-1" onclick="document.getElementById('lamaHari').stepUp()" id="incdecLamaSewa">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <span class="ml-3 my-auto">hari</span>
                                </div>
                            </div>
                            <div class="col-md-5 ml-5">
                                <p class="mb-2">Jumlah</p>
                                <div class="d-flex align-item-center">
                                    <div class="input-group float-left">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-inc px-3 py-1" onclick="document.getElementById('jumlahProduk').stepDown()" id="incdecJumlahProduk">
                                                -
                                            </button>
                                        </div>
                                        <input type="number" id="jumlahProduk" class="form-control px-2 text-center" min="1" max="<?= $detailBarang->Get_Stok() ?>" value="1" aria-describedby="incdecJumlahProduk">
                                        <div class="input-group-append">
                                            <button class="btn btn-dec px-3 py-1" onclick="document.getElementById('jumlahProduk').stepUp()" id="incdecJumlahProduk">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 catatanUser">
                            <label class="labelCatatan" for="formCatatanUntukVendor">Catatan untuk vendor (opsional)</label>
                            <textarea class="form-control" id="formCatatanUntukVendor" rows="5"></textarea>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-5 pr-2">
                                <button class="btn btn-sewa w-100">
                                    Sewa
                                </button>
                            </div>
                            <div class="col-md-5 px-2">
                                <button class="btn btn-addCart w-100">
                                    Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- End of Detail Produk -->

                    <!-- Vendor -->

                    <div class="col-md-3 ml-4">
                        <div class=" px-3 py-3 kotakVendor">
                            <h4 class="mb-3">Vendor</h4>
                            <a href="<?= base_url(); ?>profilevendor/index/<?= $detailVendor->Get_Id_vendor() ?>" class="nav-link p-0">
                                <div class="row profileVendorLeft">
                                    <div class="col-md-auto pr-0">
                                        <img class="foto-profil-vendor" src="<?= base_url() ?>assets/assets/images/profileVendor.png" alt="">
                                    </div>
                                    <div class="col-md-auto mt-1">
                                        <p class="mb-1"><?= $detailVendor->Get_Nama_vendor() ?></p>
                                        <div class="mb-2 d-flex align-items-center">
                                            <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> 
                                            <span class="vendorplace ml-1"><?= $detailVendor->Get_Daerah_vendor() ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- End of Vendor -->

                </div>
            </div>
        </div>

        <!-- product description -->

        <div class="row justify-content-center info-panel">
            <div class="col-md-10">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" role="tab" data-toggle="tab" href="#infoProduk">Informasi produk</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane mt-4 fade show active" id="infoProduk" role="tabpanel">
                        <span><?= nl2br($detailBarang->Get_Deskripsi()) ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of product description -->
    </div>

    <!-- Detail barang end -->