<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Keberangkatan</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('keberangkatan/add'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php
                // echo '<pre>';
                // print_r($this->session->userdata('user_level'));
                // print_r($keberangkatan);
                // exit();
                ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class=" text-primary ">
                            <th></th>
                            <th>Tanggal Keberangkatan</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php
                            // echo '<pre>';
                            // print_r($keberangkatan);
                            ?>
                            <?php foreach ($keberangkatan as $p) { ?>
                                <tr>
                                    <td><?php if ($p['is_aktif'] == '1') {
                                            echo '<span style="font-size:0.75rem;" class="px-3 py-2 badge badge-pill badge-success">.</span>';
                                        } else {
                                            echo '<span style="font-size:0.75rem;" class="px-3 py-2 badge badge-pill badge-danger">.</span>';
                                        } ?></td>
                                    <td><?php echo $tanggalConverted = date_format(date_create($p   ['tanggal_keberangkatan']), 'd F Y'); ?></td>
                                    <td>
                                        <a href="<?php echo site_url('keberangkatan/edit/' . $p['id_keberangkatan']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('keberangkatan/remove/' . $p['id_keberangkatan']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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