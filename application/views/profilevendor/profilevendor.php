    <!-- profile vendor -->

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md p-0 kotakKategori profileVendor">
                        <div class="sampulVendor w-100">
                            <img class="w-100" src="<?= base_url().$profileVen->Get_Header_vendor() ?>" alt="">
                        </div>
                        <div class="row my-4 px-5">
                            <div class="col-md-auto">
                                <img class="foto-profil-vendor" src="<?= base_url().$profileVen->Get_Profile_img() ?>" alt="">
                            </div>
                            <div class="col-md-6 align-items-center mx-3 mt-1">
                                <h3><?= $profileVen->Get_Nama_vendor() ?></h3>
                                <p><?= $profileVen->Get_Deskripsi_vendor() ?></p>
                                <div class="mb-2 d-flex align-items-center">
                                    <img class="iconPlace" src="<?= base_url() ?>assets/assets/images/icon_place.svg" alt="Place"> 
                                    <span class="vendorplace ml-1"><?= $profileVen->Get_Daerah_vendor() ?></span>
                                    <div class="vr d-inline mx-3"></div>
                                    <span class="vendorplace ml-1"><?= $profileVen->Get_Hp_vendor() ?></span>
                                    <div class="vr d-inline mx-3"></div>
                                    <span class="vendorplace ml-1"><?= $profileVen->Get_Email_vendor() ?></span>
                                </div>
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
                                    <a class href="<?php echo base_url() .'C_Barang/index/'. $produk->Get_Id_barang() ?><?php if ($pelanggan){echo "/".$pelanggan->Get_Id_pelanggan();}?>">
                                        <div class="fotoProduk">
                                            <img src="<?= base_url().   $produk->Get_Foto() ?>" alt="Produk 1">
                                        </div>
                                        <div class="detailProduk mx-3 mt-2">
                                            <h5 class="titleProduk"><?= $produk->Get_Nama() ?></h5>
                                            <p class="hargaProduk mt-2">Rp <?= number_format($produk->Get_Harga_awal(),0,".",".") ?> - Rp <?= number_format($produk->Get_Harga_akhir(),0,".",".") ?></p>
                                            <div class="mt-1">
                                                <img class="iconPlace" src="<?= base_url() ?>/assets/assets/images/icon_place.svg" alt="Place"> <span class="vendorplace"><?= $profileVen->Get_Daerah_vendor() ?></span>
                                            </div>
                                            <div class="rating my-2 d-flex align-items-center">
                                                <i class="fas fa-star float-left starRating"></i>
                                                <i class="fas fa-star float-left starRating star5"></i>
                                                <span class="ml-1 ratingCount">(<?= $produk->Get_Rating() ?>)</span>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    <?php endforeach ; ?>
                                </div>
                                <?= $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- barang vendor -->

            </div>
        </div>
    </div>

    <!-- profile vendor end -->