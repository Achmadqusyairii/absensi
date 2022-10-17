<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Users</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('users/buatakun'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>User Id</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $p) { ?>
                                <tr>
                                    <td><?php echo $p['user_id']; ?></td>
                                    <td><?php echo $p['user_name']; ?></td>
                                    <td><?php echo $p['user_email']; ?></td>
                                    <td><?php if ($p['user_level']=='1') {
                                        echo 'Admin Super';
                                    } elseif ($p['user_level']=='2') {
                                        echo 'Koordinator';
                                    }elseif ($p['user_level']=='3') {
                                        echo 'Petani';
                                    }else{
                                        echo 'Belum Memiliki Akses';
                                    }
                                    ?></td>                                    
                                    <td>
                                        <?php if ($p['id_petani'] == null && $p['user_level'] == 2) {
                                                    echo '';
                                                } elseif ($p['id_petani'] == null && $p['user_level'] == null) {
                                                    echo '<a href="' . site_url('users/add/' . $p['user_id']) . '" class="btn btn-secondary disabled" role="button" aria-disabled="true"><span class="fa fa-user"></span></a>';
                                                } elseif ($p['id_petani'] == null && $p['user_level'] == 3) {
                                                    echo '<a href="' . site_url('users/add/' . $p['user_id']) . '" class="btn btn-warning"><span class="fa fa-user"></span></a>';
                                                } ?>
                                        <a href="<?php echo site_url('users/edit/' . $p['user_id']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('users/remove/' . $p['user_id']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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