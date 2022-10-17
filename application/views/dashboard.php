<div class="row mb-5 mt-3">
    <div class="col">
        <h2>Laporan</h2>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <?php if ($this->session->userdata('user_id') == '7') : ?>
            <h3>Kantor Pusat Pasuruan </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 7);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 7);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Malang </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 2);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 2);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Probolinggo </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 3);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 3);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Situbondo </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 4);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 4);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Jember </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 5);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 5);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Jakarta </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 6);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 6);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($this->session->userdata('user_id') == '2') : ?>
            <h3>Kantor Cabang Malang </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 2);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 2);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($this->session->userdata('user_id') == '3') : ?>
            <h3>Kantor Cabang Probolinggo </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 3);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 3);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($this->session->userdata('user_id') == '4') : ?>
            <h3>Kantor Cabang Situbondo </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 4);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 4);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($this->session->userdata('user_id') == '5') : ?>
            <h3>Kantor Cabang Jember </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 5);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 5);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($this->session->userdata('user_id') == '6') : ?>
            <h3>Kantor Cabang Jakarta </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 6);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 6);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($this->session->userdata('user_id') == '1') : ?>
            <h3>Kantor Pusat Pasuruan </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 7);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 7);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Malang </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 2);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 2);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Probolinggo </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 3);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 3);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Situbondo </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 4);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 4);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Jember </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 5);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 5);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Kantor Cabang Jakarta </h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Jumlah Jamaah</p>
                            <!-- <h3 class="card-title"><?php echo $this->db->from("jamaah")->count_all_results(); ?></h3> -->
                            <h3 class="card-title"><?php $this->db->where('created_by =', 6);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon mb-4">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Belum Manasik</p>
                            <h3 class="card-title"><?php $this->db->where('kehadiran !=', 'Hadir');
                                                    $this->db->where('created_by =', 6);
                                                    $query = $this->db->get('jamaah');
                                                    echo $query->num_rows(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>