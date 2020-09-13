<!-- Start: Registration Form with Photo -->
    <div class="container info-panel">
        <div class="header-container kolom">
            <!-- Start: profil pict-1 --><img class="border rounded-circle img-profile" src="<?php echo base_url() ?>assets/assets/images/Vector.png" width="30px" height="30px">
            <!-- End: profil pict-1 --><span name="nama"><?php echo $pelanggan->Get_Nama() ?></span></div>
        <!-- Start: Form Container -->
        <div class="form-container">
            <div>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link<?php if ($tab == "biodata") {echo " active";} ?>" role="tab" data-toggle="tab" href="#tab-1">Biodata diri</a></li>
                    <li class="nav-item"><a class="nav-link<?php if ($tab == "vendor") {echo " active";} ?>" role="tab" data-toggle="tab" href="#tab-3">Vendor</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane<?php if ($tab == "biodata") {echo " active";} ?>" role="tabpanel" id="tab-1">
                        <div class="row">
                            <div class="col-lg-auto">
                                <!-- Start: profil pict -->
                                <div class="card mb-3">
                                    <div class="card-body text-center"><img class="rounded-circle mb-3 mt-4" src="<?php echo base_url().$pelanggan->Get_Profil_image(); ?>" width="200" height="200">
                                        <!-- <div class="mb-3">
                                            <form action="<?php echo base_url()."c_profil_biodataDiri/update_pelanggan/gambar/".$pelanggan->Get_Id_pelanggan() ?>">
                                                <input type="file" id="gambarUpload" name="gambarUpload"/>
                                                <input type="submit" value="Upload Image" />
                                            </form>
                                        </div> -->
                                        <div class="mb-3"><input class="d-none" type="file" id="upload" name='berkas'><a id="upload_link" href="<?php echo base_url().'c_profil_biodataDiri/update_pelanggan/gambar/'.$pelanggan->Get_Id_pelanggan() ?>" style="color: rgb(87,65,217);">Ganti Foto Profil</a></div>
                                    </div>
                                </div>
                                <!-- End: profil pict -->
                            </div>
                            <div class="col informasi">
                                <div class="card bio">
                                    <div class="card-header">
                                        <h4>Informasi Umum</h4>
                                        <!-- Start: Basic Modal Button --><button class="btn btn-primary" data-toggle="modal" data-target="#modal1" type="button">Edit</button>
                                        <!-- End: Basic Modal Button -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Informasi Umum</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                    <div class="modal-body">
                                                        <!-- Start: seven form -->
                                                        <form method="post" action="<?php echo base_url(). 'c_profil_biodataDiri/update_pelanggan/informasi/'. $pelanggan->Get_Id_pelanggan(); ?>">
                                                            <div class="form-group"><label class="form-label">Nama</label><input class="form-control" type="text" value="<?php echo $pelanggan->Get_Nama() ?>" placeholder="Nama anda" style="background-repeat: no-repeat;" name="nama"></div>
                                                            <div class="form-group"><label class="form-label">Tanggal lahir</label><input class="form-control" name="tanggal_lahir" type="date" value="<?php echo $pelanggan->Get_Tanggal_lahir() ?>"></div>
                                                            <div class="form-group"><label class="form-label">Jenis Kelamin</label>
                                                                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="jenis_kelamin" value="laki laki" <?php if($pelanggan->Get_Jenis_kelamin() == "laki laki"){echo "checked";} ?>><label class="form-check-label" for="formCheck-1">Laki laki</label></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="jenis_kelamin" value="perempuan" <?php if($pelanggan->Get_Jenis_kelamin() == "perempuan"){echo "checked";} ?>><label class="form-check-label" for="formCheck-2">Perempuan</label></div>
                                                            </div>
                                                            <div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>
                                                        </form>
                                                        <!-- End: seven form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="margin: 0;">
                                            <div class="col-lg-3">
                                                <h6>Nama</h6>
                                                <h6>Tanggal Lahir</h6>
                                                <h6>Jenis Kelamin</h6>
                                            </div>
                                            <div class="col right"><span class="nama" nama="user_nama"><?php echo $pelanggan->Get_Nama() ?></span><span class="tanggalLahir" nama="tanggal_lahir"><?php echo $pelanggan->Get_Tanggal_lahir() ?></span><span class="jenisKelamin" nama="user_kelamin"><?php echo $pelanggan->Get_Jenis_kelamin() ?></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bio">
                                    <div class="card-header">
                                        <h4>Email dan Telpon</h4>
                                        <!-- Start: Basic Modal Button --><button class="btn btn-primary" data-toggle="modal" data-target="#modal2" type="button">Edit</button>
                                        <!-- End: Basic Modal Button -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal2">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Email dan Telepon</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                    <div class="modal-body">
                                                        <!-- Start: seven form -->
                                                        <form method="post" action="<?php echo base_url(). 'c_profil_biodataDiri/update_pelanggan/emtel/'. $pelanggan->Get_Id_pelanggan(); ?>">
                                                            <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="email" name="email" value="<?php echo $pelanggan->Get_Email() ?>" placeholder="example@email.com" nama="email"></div>
                                                            <div class="form-group"><label class="form-label">Telepon</label><input class="form-control" type="text" value="<?php echo $pelanggan->Get_No_hp() ?>" placeholder="nomor anda" style="background-repeat: no-repeat;" name="telepon" value=""></div>
                                                            <div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>
                                                        </form>
                                                        <!-- End: seven form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="margin: 0;">
                                            <div class="col-lg-3">
                                                <h6>Email</h6>
                                                <h6>Telepon</h6>
                                            </div>
                                            <div class="col right"><span class="email"><?php echo $pelanggan->Get_Email() ?></span><span class="telepon"><?php echo $pelanggan->Get_No_hp() ?></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bio">
                                    <div class="card-header">
                                        <h4>Alamat Rumah</h4>
                                        <!-- Start: Basic Modal Button --><button class="btn btn-primary" data-toggle="modal" data-target="#modal5" type="button">Edit</button>
                                        <!-- End: Basic Modal Button -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal5">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Alamat Rumah</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                    <div class="modal-body">
                                                        <!-- Start: seven form -->
                                                        <form method="post" action="<?php echo base_url(). 'c_profil_biodataDiri/update_pelanggan/alamat/'. $pelanggan->Get_Id_pelanggan(); ?>">
                                                            <div class="form-group"><label class="form-label">Alamat Rumah</label><textarea class="form-control" name="alamat" placeholder="jl."><?php echo $pelanggan->Get_Alamat() ?></textarea></div>
                                                            <div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>
                                                        </form>
                                                        <!-- End: seven form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="margin: 0;">
                                            <div class="col-lg-3">
                                                <h6>Alamat</h6>
                                            </div>
                                            <div class="col right"><span name="alamat_vendor"><?php echo $pelanggan->Get_Alamat() ?></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bio">
                                    <div class="card-header">
                                        <h4>Kata Kunci</h4>
                                        <!-- Start: Basic Modal Button --><button class="btn btn-primary" data-toggle="modal" data-target="#modal3" type="button">Edit</button>
                                        <!-- End: Basic Modal Button -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal3">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Ubah Kata Kunci</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                    <div class="modal-body">
                                                        <!-- Start: seven form -->
                                                        <form method="post">
                                                            <div class="form-group"><label class="form-label">Password lama</label><input class="form-control" type="password" name="passwordLama"></div>
                                                            <div class="form-group"><label class="form-label">Password baru</label><input class="form-control" type="password" name="password"></div>
                                                            <div class="form-group"><label class="form-label">Konfirmasi Password Baru</label><input class="form-control" type="password" name="konfPassword"></div>
                                                            <div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>
                                                        </form>
                                                        <!-- End: seven form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="margin: 0;">
                                            <div class="col"><span class="d-block">Perubahan terakhir pada&nbsp;<span class="d-inline"><?php echo $pelanggan->Get_Last_update() ?></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane<?php if ($tab == "vendor") {echo " active";} ?>" role="tabpanel" id="tab-3">
                        <?php if (!$pelanggan->Get_Id_vendor()) { ?>
                        <div class="card active" id="telepon_vendor">
                            <div class="card-body">
                                <h5 class="d-xl-flex justify-content-xl-center card-title">Anda belum terdaftar sebagai vendor.</h5>
                            </div>
                            <div class="card-body d-xl-flex justify-content-xl-center"><a href="<?php echo base_url()."c_profil_biodataDiri/tambah_vendor/".$pelanggan->Get_Id_pelanggan() ?>"><button class="btn btn-primary" style="height: 40px;margin-top: 10px;" type="button">Daftar Vendor</button></a></div>
                        </div>
                        <?php } else { ?>
                        <div class="row" id="vendor">
                            <div class="col informasi">
                                <div class="card bio">
                                    <div class="card-header">
                                        <h4>Informasi Umum</h4>
                                        <!-- Start: Basic Modal Button --><button class="btn btn-primary" data-toggle="modal" data-target="#modal4" type="button">Edit</button>
                                        <!-- End: Basic Modal Button -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal4">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Informasi Umum</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                    <div class="modal-body">
                                                        <!-- Start: seven form -->
                                                        <form method="post" action="<?php echo base_url(). 'c_profil_biodataDiri/update_vendor/informasi/'. $pelanggan->Get_Id_pelanggan() .'/'.$pelanggan->Get_Id_vendor(); ?>" >
                                                            <div class="form-group"><label class="form-label">Foto header vendor</label><input type="file" class="form-file" name="header_vendor"></div>
                                                            <div class="form-group"><label class="form-label">Nama vendor</label><input class="form-control" type="text" value="<?php echo $vendor->Get_Nama_vendor() ?>" placeholder="Nama vendor" style="background-repeat: no-repeat;" name="nama_vendor"></div>
                                                            <div class="form-group"><label class="form-label">Deskripsi vendor</label><textarea class="form-control" placeholder="Deskripsi vendor" name="deskripsi_vendor"><?php echo $vendor->Get_Deskripsi_vendor() ?></textarea></div>
                                                            <div class="form-group"><label class="form-label">Kontak vendor</label><input class="form-control" type="text" value="<?php echo $vendor->Get_Hp_vendor() ?>" placeholder="No telepon vendor" style="background-repeat: no-repeat;" name="telepon_vendor"></div>
                                                            <div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>
                                                        </form>
                                                        <!-- End: seven form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="margin: 0;">
                                            <div class="col-lg-3">
                                                <h6 class="d-xl-flex align-items-xl-center foto-header-vendor" style="height: 100px;margin-bottom: 20px;">Foto Header Vendor</h6>
                                                <h6>Nama Vendor</h6>
                                                <h6>Deskripsi Vendor</h6>
                                            </div>
                                            <div class="col right">
                                                <img style="background-image: url('<?php echo base_url().$vendor->Get_Header_vendor(); ?>');height: 100px;width: 300px;background-size: cover;" name="headerVendor">
                                                <span class="tanggalLahir" name="nama_Vendor"><?php echo $vendor->Get_Nama_vendor() ?></span>
                                                <span class="jenisKelamin" name="deskripsi_Vendor"><?php echo $vendor->Get_Deskripsi_vendor() ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bio">
                                    <div class="card-header">
                                        <h4>Email dan Telpon Vendor</h4>
                                        <!-- Start: Basic Modal Button --><button class="btn btn-primary" data-toggle="modal" data-target="#modal6" type="button">Edit</button>
                                        <!-- End: Basic Modal Button -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal6">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Email dan Telpon Vendor</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                    <div class="modal-body">
                                                        <!-- Start: seven form -->
                                                        <form method="post" action="<?php echo base_url(). 'c_profil_biodataDiri/update_vendor/emtel/'. $pelanggan->Get_Id_pelanggan() .'/'.$pelanggan->Get_Id_vendor(); ?>">
                                                            <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="text" value="<?php echo $vendor->Get_Email_vendor() ?>" placeholder="Email vendor" style="background-repeat: no-repeat;" name="email_vendor"></div>
                                                            <div class="form-group"><label class="form-label">Telepon</label><input class="form-control" type="text" value="<?php echo $vendor->Get_Hp_vendor() ?>" placeholder="No telepon vendor" style="background-repeat: no-repeat;" name="telepon_vendor"></div>
                                                            <div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>
                                                        </form>
                                                        <!-- End: seven form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="margin: 0;">
                                            <div class="col-lg-3">
                                                <h6>Email</h6>
                                                <h6>No Handphone</h6>
                                            </div>
                                            <div class="col right"><span class="email" name="email"><?php echo $vendor->Get_Email_vendor() ?></span><span class="telepon" name="noTelp"><?php echo $vendor->Get_Hp_vendor() ?></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bio">
                                    <div class="card-header">
                                        <h4>Alamat Fisik Vendor</h4>
                                        <!-- Start: Basic Modal Button --><button class="btn btn-primary" data-toggle="modal" data-target="#modal7" type="button">Edit</button>
                                        <!-- End: Basic Modal Button -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal7">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title">Alamat Fisik Vendor</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                    <div class="modal-body">
                                                        <!-- Start: seven form -->
                                                        <form method="post" action="<?php echo base_url(). 'c_profil_biodataDiri/update_vendor/alamat/'. $pelanggan->Get_Id_pelanggan() .'/'.$pelanggan->Get_Id_vendor(); ?>">
                                                            <div class="form-group"><label class="form-label">Alamat Vendor</label><textarea class="form-control" name="alamat_vendor" placeholder="jl."><?php echo $vendor->Get_Alamat_vendor() ?></textarea></div>
                                                            <div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>
                                                        </form>
                                                        <!-- End: seven form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="margin: 0;">
                                            <div class="col-lg-3">
                                                <h6>Alamat</h6>
                                            </div>
                                            <div class="col right"><span name="alamat_vendor"><?php echo $vendor->Get_Alamat_vendor() ?></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bio">
                                    <div class="card-header">
                                        <h4>Produk dan Jasa</h4><a href="<?php echo base_url()."c_profil_vendor_barang/index/".$pelanggan->Get_Id_pelanggan().'/' .$vendor->Get_Id_vendor() ?>"><button class="btn btn-primary" type="button">Edit</button></a></div>
                                    <div class="card-body">
                                        <div class="row" style="margin: 0;">
                                            <div class="col-lg-3">
                                                <h6>Jumlah Produk</h6>
                                            </div>
                                            <div class="col right"><span class="email" name="jumlahProduk"><?= $totalBarang ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Form Container -->
    </div>