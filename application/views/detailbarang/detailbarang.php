    <!-- Detail barang -->

    <div class="container-fluid">
        <div class="row justify-content-center info-panel">
            <div class="col-md-10 mt-5 kolom">
                <div class="row justify-content-center">

                    <!-- Gambar Produk Detail -->

                    <div class="col-md-auto p-0 gambarProduk" id="imgProduk">
                        <div class="gambarDetail" style="height: 60%;">
                            <img class="img-thumbnail" src="<?= base_url().$detailBarang->Get_Foto() ?>" alt="GambarProduk" id="show-img">
                        </div>
                        <div class="small-img">
                            <img class="icon-left" src="<?= base_url() ?>assets/assets/images/Produk/next-icon.png" alt="" id="prev-img">
                                <div class="small-container">
                                    <div class="small-img-roll">
                                        <img src="<?= base_url().$detailBarang->Get_Foto() ?>" alt="" class="show-small-img">
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
                                <p class="mb-2">Lama Sewa</p>
                                <div class="d-flex align-item-center">
                                    <div class="input-group float-left">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-inc px-3 py-1" onclick="document.getElementById('lamaHari').stepDown(); multipleBiaya();" id="incdecLamaSewa">
                                                -
                                            </button>
                                        </div>
                                        <input type="number" id="lamaHari" class="form-control px-2 text-center" min="1" max="30" value="1" aria-describedby="incdecLamaSewa">
                                        <div class="input-group-append">
                                            <button class="btn btn-dec px-3 py-1" onclick="document.getElementById('lamaHari').stepUp(); multipleBiaya();" id="incdecLamaSewa">
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
                                            <button class="btn btn-inc px-3 py-1" onclick="document.getElementById('jumlahProduk').stepDown(); multipleBiaya();" id="incdecJumlahProduk">
                                                -
                                            </button>
                                        </div>
                                        <input type="number" id="jumlahProduk" class="form-control px-2 text-center" min="1" max="<?= $detailBarang->Get_Stok() ?>" value="1" aria-describedby="incdecJumlahProduk">
                                        <div class="input-group-append">
                                            <button class="btn btn-dec px-3 py-1" onclick="document.getElementById('jumlahProduk').stepUp(); multipleBiaya();" id="incdecJumlahProduk">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4 catatanUser">
                            <label class="labelCatatan" for="formCatatanUntukVendor">Total Biaya</label>
                            <h2 class="hargaProduk mb-2" id="totalBiaya">
                                Rp <?= number_format($detailBarang->Get_Harga_awal(),0,".",".") ?>
                                <script type="text/javascript">
                                    function multipleBiaya() {
                                        jumProduk = document.getElementById('jumlahProduk').value;
                                        lamaSewa = document.getElementById('lamaHari').value;
                                        biaya = <?php echo $detailBarang->Get_Harga_awal() ?> * jumProduk * lamaSewa;

                                        document.getElementById('totalBiaya').innerHTML = "Rp " + biaya.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
                                        document.getElementById('total').value = biaya;
                                    }
                                </script>
                            </h2>
                        </div>
                        <div class="row mt-4">
                                <div class="col-md-5 px-2">

                                    <form method="post" action="<?php echo base_url().'C_login/index'; ?>" <?php if ($pelanggan) echo 'style="display: none"' ?> >
                                        <button class="btn btn-addCart w-100">
                                            login
                                        </button>
                                    </form>

                                    <form method="post" action="<?php echo base_url(). 'c_Barang/transaksi/' . $detailBarang->Get_Id_barang(); if ($pelanggan) echo '/'. $pelanggan->Get_Id_pelanggan(); ?> <?php '' ?>" <?php if (!$pelanggan) echo 'style="display: none"'?>>
                                        <input id="total" name="total" style="display: none">
                                        <button class="btn btn-addCart w-100" <?php if ($cek_keranjang) echo 'disabled'?>>
                                            sewa
                                        </button>
                                    </form>

                                </div>
                                <?php
                                    if (!$pelanggan) {
                                        echo '
                                            <div class="col-md-5 px-2">
                                                Mohon login untuk menyewa
                                            </div>
                                        ';
                                    }
                                    if ($cek_keranjang) {
                                        echo '
                                            <div class="col-md-5 px-2">
                                                Mohon selesaikan transaksi
                                            </div>
                                        ';                                        
                                    }
                                ?>

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
                                        <img class="foto-profil-vendor" src="<?= base_url().$detailVendor->Get_Profile_img()?>" alt="">
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