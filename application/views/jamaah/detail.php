<div class="col-md">
    <div class="card">
        <div class="card-header card-header-primary">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <h3 class="card-title ">Detail Jamaah</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <center>
                    <div class="col-auto">
                        <img class="img-fluid" style="max-width: 200px; max-height: 200px; border-radius: 1.5rem;" src="<?php echo base_url() . 'assets/images/' . $jamaah['jamaah_img']; ?>" alt="">
                    </div>
                </center>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-book"></i>&nbsp; No. KTP</td>
                            <td><?php echo $jamaah['nik']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-book"></i>&nbsp; No. Paspor/Passport Number</td>
                            <td><?php echo $jamaah['nomor_paspor']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user"></i>&nbsp; Nama/Name</td>
                            <td><?php echo $jamaah['nama_jamaah']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-phone"></i>&nbsp; Nomor HP</td>
                            <td><?php echo $jamaah['nomor_telepon']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-map-marker"></i>&nbsp; Alamat</td>
                            <td><?php echo $jamaah['alamat']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <hr>
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <h3 class="card-title ">Riwayat Keberangkatan</h3>
                </div>
                <div class="col-auto">
                    <a href="<?php echo site_url('jamaah/add_keberangkatan/' . $jamaah['id_jamaah']); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal Keberangkatan</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Lama Hari</th>
                            <th scope="col">Hotel Mekkah</th>
                            <th scope="col">Hotel Madinah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($record as $j) { ?>
                            <tr>
                                <td><?php echo $tanggalConverted = date_format(date_create($j['tanggal_keberangkatan']), 'd F Y'); ?></td>
                                <td><?php echo $j['paket']; ?></td>
                                <td><?php echo $j['lama_hari']; ?></td>
                                <td><?php echo $j['hotel_mekkah']; ?></td>
                                <td><?php echo $j['hotel_madinah']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>