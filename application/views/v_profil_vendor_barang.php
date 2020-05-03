
    <!-- Start: Registration Form with Photo -->
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <!-- Start: seven profil pict -->
            <div class="col-lg-auto profil-pict">
                <!-- Start: profil pict -->
                <div class="card mb-3">
                    <div class="card-body text-center"><img class="rounded-circle mb-3 mt-3" src="<?php echo base_url()."assets/img/dogs/image2.jpeg" ?>" width="70px" height="70px">
                        <h6 class="font-weight-bold m-0">Rumah kamera</h6>
                    </div>
                </div>
                <!-- End: profil pict -->
            </div>
            <!-- End: seven profil pict -->
            <div class="col right">
                <div>
                    <div class="header-container"><span name="nama" style="line-height: 37px;">Daftar Produk</span></div>
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
                                                <div class="col-xl-4 mr-2"><span>Nama</span></div>
                                                <div class="col mr-2"><span>Harga min.</span></div>
                                                <div class="col mr-2"><span>Harga max.</span></div>
                                                <div class="col-1 mr-2 stok"><span>Stok</span></div>
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
                                                    <div class="col-xl-4 mr-2">
                                                        <h6 class="mb-0"><strong><?php echo $barang->Get_Nama() ?></strong></h6>
                                                    </div>
                                                    <div class="col mr-2">
                                                        <h6 class="mb-0"><strong>Rp&nbsp;</strong><span><?php echo $barang->Get_Harga_awal() ?></span></h6>
                                                    </div>
                                                    <div class="col mr-2">
                                                        <h6 class="mb-0"><strong>Rp&nbsp;</strong><span><?php echo $barang->Get_Harga_akhir()?></span></h6>
                                                    </div>
                                                    <div class="col-1 mr-2 stok">
                                                        <h6 class="mb-0"><strong><?php echo $barang->Get_Stok() ?></strong></h6>
                                                    </div>
                                                    <div class="col-2 mr-2">
                                                        <!-- Start: Basic Modal Button --><button class="btn btn-light" data-toggle="modal" data-target="#modal1" type="button">Edit</button>
                                                        <!-- End: Basic Modal Button -->
                                                        <!-- Start: seven modal-1 -->
                                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h2 class="modal-title">Edit produk atau jasa</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                                    <div class="modal-body">
                                                                        <!-- Start: seven form -->
                                                                        <form method="post" action="<?php echo base_url(). 'c_profil_vendor_barang/updateBarang/'. $barang->Get_Id_barang() .'/'.$pelanggan->Get_Id_pelanggan().'/'.$pelanggan->Get_Id_vendor() ?>">
                                                                            <div class="form-group"><label class="form-label">Foto&nbsp;</label><input type="file" class="form-file" name="fotoBarang"></div>
                                                                            <div class="form-group"><label class="form-label">Nama</label><input class="form-control" type="text" value="<?php echo $barang->Get_Nama() ?>" placeholder="Nama barang" style="background-repeat: no-repeat;" name="nama"></div>
                                                                            <div class="form-group"><label class="form-label">Harga&nbsp;</label><input class="form-control" type="text" value="<?php echo $barang->Get_Harga_awal() ?>" placeholder="Harga barang" style="background-repeat: no-repeat;" name="harga_awal"></div>

                                                                            <div class="form-group"><label class="form-label">Jenis</label><input class="form-control" type="text" value="<?php echo $barang->Get_Jenis() ?>" placeholder="Jenis barang" style="background-repeat: no-repeat;" name="jenis"></div>

                                                                            <div class="form-group"><label class="form-label">Deskripsi</label><textarea class="form-control" value="<?php echo $barang->Get_Deskripsi() ?>" placeholder="deskripsi barang anda" name="deskripsi"></textarea></div>
                                                                            <div class="form-group"><label class="form-label">Stok</label><input class="form-control" type="text" value="<?php echo $barang->Get_Stok() ?>" placeholder="Stok barang" style="background-repeat: no-repeat;" name="stok"></div>

                                                                            <div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>

                                                                            
                                                                        </form>
                                                                    <!-- End: seven form -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End: seven modal-1 -->
                                                    <a href="<?php echo base_url(). "c_profil_vendor_barang/deleteBarang/". $barang->Get_Id_barang() .'/'.$pelanggan->Get_Id_pelanggan().'/'.$pelanggan->Get_Id_vendor() ?>"><button class="btn btn-danger" type="button">Hapus</button></a></div>
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
                <div class="form-footer">
                    <!-- Start: Basic Modal Button -->
                    <button class="btn btn-primary float-left" data-toggle="modal" data-target="#modalTambah" type="button">Tambah Barang</button>
                    <!-- End: Basic Modal Button -->
                    <!-- Start: seven modal-1 -->
                    <div class="modal fade" role="dialog" tabindex="-1" id="modalTambah">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title">Tambah Produk atau Jasa</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body">
                                    <!-- Start: seven form -->
                                    <form method="post" action="<?php echo base_url(). 'c_profil_vendor_barang/insertBarang/'.$pelanggan->Get_Id_pelanggan().'/'.$pelanggan->Get_Id_vendor(); ?>">
                                        <div class="form-group"><label class="form-label">Foto&nbsp;</label><input type="file" class="form-file" id="foto"></div>
                                        <div class="form-group"><label class="form-label">Nama</label><input class="form-control" type="text" placeholder="Nama barang" style="background-repeat: no-repeat;" name="nama"></div>
                                        <div class="form-group"><label class="form-label">Harga&nbsp;</label><input class="form-control" type="text" placeholder="Harga barang" style="background-repeat: no-repeat;" name="harga_awal"></div>

                                        <div class="form-group"><label class="form-label">Jenis&nbsp;</label><input class="form-control" type="text" placeholder="Jenis barang" style="background-repeat: no-repeat;" name="jenis"></div>

                                        <div class="form-group"><label class="form-label">Deskripsi</label><textarea class="form-control" placeholder="Deskripsi barang" name="deskripsi"></textarea></div>
                                        <div class="form-group"><label class="form-label">Stok</label><input class="form-control" type="text" placeholder="Stok yang tersedia" style="background-repeat: no-repeat;" name="stok"></div>

                                        <div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>
                                    </form>
                                    <!-- End: seven form -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End: seven modal-1 -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End: Registration Form with Photo -->
