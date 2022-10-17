<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Profil</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('profil/edit/' . $profil['id_petani']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <h4>NIK</h4>
                    </div>
                    <div class="col">
                        <h4>: <?php echo $profil['nik']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h4>Nama</h4>
                    </div>
                    <div class="col">
                        <h4>: <?php echo $profil['nama_petani']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h4>Tanggal Lahir</h4>
                    </div>
                    <div class="col">
                        <h4>: <?php echo $profil['tanggal_lahir']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h4>Nomor HP</h4>
                    </div>
                    <div class="col">
                        <h4>: <?php echo $profil['nomor_hp']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h4>Alamat</h4>
                    </div>
                    <div class="col">
                        <h4>: <?php echo $profil['alamat']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h4>Jenis Kelamin</h4>
                    </div>
                    <div class="col">
                        <h4>: <?php echo $profil['jenis_kelamin']; ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h4>Pendidikan Terakhir</h4>
                    </div>
                    <div class="col">
                        <h4>: <?php echo $profil['pendidikan_terakhir']; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>