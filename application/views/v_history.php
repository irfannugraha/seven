
    <!-- Start: Registration Form with Photo -->
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <!-- Start: seven profil pict -->
            <div class="col-lg-auto profil-pict">
                <!-- Start: profil pict -->
                <div class="card mb-3">
                    <div class="card-body text-center"><img class="rounded-circle mb-3 mt-3" src="<?php echo base_url().$pelanggan->Get_Profil_image() ?>" width="70px" height="70px">
                        <h6 class="font-weight-bold m-0"><?php echo $pelanggan->Get_nama()?></h6>
                    </div>
                </div>
                <!-- End: profil pict -->
            </div>
            <!-- End: seven profil pict -->
            <div class="col right">
                <div>
                    <div class="header-container"><span name="nama" style="line-height: 37px;">History Pemesanan</span></div>
                    <!-- Start: Form Container -->
                    <div class="form-container body-1">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item d-none"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Semua Barang</a></li>
                                <li class="nav-item d-none"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Rental Produk</a></li>
                                <li class="nav-item d-none"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Sewa Jasa</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    <!-- Start: Seven list -->
                                    <div class="card">
                                        <div class="card-header py-2">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col-auto">
                                                    <div class="custom-control custom-checkbox"><input class="custom-control-input select-all" type="checkbox" id="formCheck-all"><label class="custom-control-label" for="formCheck-all"></label></div>
                                                </div>
                                                <div class="col-xl-2 mr-2"><span>Nama</span></div>
                                                <div class="col mr-2"><span>Tanggal Pemesanan</span></div>
                                                <div class="col mr-2"><span>Tanggal Pengembalian</span></div>
                                                <div class="col mr-2"><span>Total Biaya</span></div>
                                                <div class="col-2 mr-2 stok"><span>Aksi</span></div>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <?php foreach ($barang as $i=>$barang) : ?>
                                            <li class="list-group-item">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkboxlistitem" type="checkbox" id="formCheck-<?php echo $i ?>"><label class="custom-control-label" for="formCheck-<?php echo $i ?>"></label></div>
                                                    </div>
                                                    <div class="col-xl-2 mr-2">
                                                        <h6 class="mb-0"><strong><?php echo $barang->Get_Nama() ?></strong></h6>
                                                    </div>
                                                    <div class="col mr-2">
                                                        <h6 class="mb-0"><?php echo $transaksi[$i]->Get_Tanggal_pemesanan() ?></h6>
                                                    </div>
                                                    <div class="col mr-2">
                                                        <h6 class="mb-0"><?php echo $transaksi[$i]->Get_Tanggal_pengembalian()?></h6>
                                                    </div>
                                                    <div class="col mr-2">
                                                        <h6 class="mb-0"><strong>Rp&nbsp;</strong><span><?php echo $transaksi[$i]->Get_Biaya()?></span></h6>
                                                    </div>
                                                    <button class="btn btn-light" type="button">Upload</button>
                                                    <a href="<?php echo base_url(). "c_History/delete_transaksi/". $transaksi[$i]->Get_Id_transaksi() .'/'. $transaksi[$i]->Get_Id_pelanggan() ?>"><button class="btn btn-danger" type="button">Hapus</button></a></div>
                                                </div>
                                            </li>
                                            <?php endforeach ?>
                                        </ul>
                                </div>
                                <!-- End: Seven list -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Form Container -->
            </div>
        </div>
    </div>
    </div>
    <!-- End: Registration Form with Photo -->
