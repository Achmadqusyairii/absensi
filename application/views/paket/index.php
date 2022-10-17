<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Paket</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('paket/bukatambah'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Program</th>
                            <th></th>
                            <th>Nama Program</th>
                            <th>Paket</th>
                            <th>Hotel Mekkah</th>
                            <th>Hotel Madinah</th>
                            <th>Uang Muka</th>
                            <th>Harga Paket</th>
                            <th>Tampilan</th>
                            <?php if ($this->session->userdata('user_level') != 3) {
                                echo '<th>Dibuat Oleh</th>';
                            } ?>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($paket as $p) { ?>
                                <tr>
                                    <td>
                                        <img class="img-fluid" style="max-width: 100px; max-height: 100px;" src="<?php echo base_url() . 'assets/images/' . $p['paket_img']; ?>" alt="">
                                    </td>
                                    <td><?php if ($p['kategori'] == 'Umroh') {
                                        echo '<span style="font-size:0.75rem;" class="px-3 py-2 badge badge-pill badge-warning">Umroh</span>';
                                    }elseif ($p['kategori'] == 'Haji') {
                                        echo '<span style="font-size:0.75rem;" class="px-3 py-2 badge badge-pill badge-danger">Haji</span>';
                                    }else {
                                        echo '<span style="font-size:0.75rem;" class="px-3 py-2 badge badge-pill badge-success">Tour</span>';
                                    } ?></td>
                                    <td><?php echo $p['nama_program']; ?></td>
                                    <td><?php echo $p['paket']; ?></td>
                                    <td><?php echo $p['hotel_mekkah']; ?><br>
                                        <?php if ($p['bintang_mekkah'] == '5') {
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                        } elseif ($p['bintang_mekkah'] == '4') {
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                        } elseif ($p['bintang_mekkah'] == '3') {
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                        } elseif ($p['bintang_mekkah'] == '2') {
                                            echo '&#11088;';
                                            echo '&#11088;';
                                        } else {
                                            echo '&#11088;';
                                        };
                                        ?>
                                    </td>
                                    <td><?php echo $p['hotel_madinah']; ?><br>
                                        <?php if ($p['bintang_madinah'] == '5') {
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                        } elseif ($p['bintang_madinah'] == '4') {
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                        } elseif ($p['bintang_madinah'] == '3') {
                                            echo '&#11088;';
                                            echo '&#11088;';
                                            echo '&#11088;';
                                        } elseif ($p['bintang_madinah'] == '2') {
                                            echo '&#11088;';
                                            echo '&#11088;';
                                        } else {
                                            echo '&#11088;';
                                        };
                                        ?>
                                    </td>

                                    <td><?php echo $p['matauang'] . '&nbsp' . number_format($p['uang_muka'], 0, ",", "."); ?></td>
                                    <td><?php echo $p['matauangall'] . '&nbsp' . number_format($p['harga_paket'], 0, ",", "."); ?></td>
                                    <td><?php echo $p['tampilan']; ?></td>
                                    <?php if ($this->session->userdata('user_level') != 3) {
                                        echo '<td>' . $p['user_name'] . '</td>';
                                    } ?>
                                    <td>
                                        <a href="<?php echo site_url('paket/edit/' . $p['id_paket']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('paket/remove/' . $p['id_paket']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="pull-right">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>