<!--Modal Form Login with Avatar Demo-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content" <?php if ($this->session->flashdata('jk') == 'Perempuan') {
                                        echo 'style="background-color: #d4edda; color: #155724;"';
                                    } elseif ($this->session->flashdata('jk') == 'Laki-Laki') {
                                        echo 'style="background-color: #d4edda; color: #155724;"';
                                    } else {
                                        echo 'style="background-color: #f8d7da; color: #721c24;"';
                                    } ?>>
            <div class="modal-body text-center mx-2 my-2">
                <?php
                if ($this->session->flashdata('jk') == 'Perempuan') {
                    echo '<h4 style="font-size: 1.5rem;">Selamat Datang</h4>';
                    echo '<h3 style="font-weight: bold;">';
                    echo 'Ibu ';
                    echo $this->session->flashdata('nama_jamaah');
                    echo '</h3>';
                } elseif ($this->session->flashdata('jk') == 'Laki-Laki') {
                    echo '<h4 style="font-size: 1.5rem;">Selamat Datang</h4>';
                    echo '<h3 style="font-weight: bold;">';
                    echo 'Bapak ';
                    echo $this->session->flashdata('nama_jamaah');
                    echo '</h3>';
                } else {
                    echo '<h3 style="font-weight: bold;">';
                    echo '';
                    echo $this->session->flashdata('error');
                    echo '</h3>';
                }

                ?>
            </div>

        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal Form Login with Avatar Demo-->

<div class="row">
    <?php
    $attributes = array('id' => 'button');
    echo form_open('scan/cek_id', $attributes); ?>
    <div id="sourceSelectPanel" style="display:none">
        <label for="sourceSelect">Change video source:</label>
        <select id="sourceSelect" style="max-width:800px"></select>
    </div>
    <!-- <div>
        <video id="video" width="700" height="600" style="border: 1px solid gray"></video>
    </div> -->
    <textarea style="display: none;" name="uuid" id="result" readonly></textarea>
    <span> <input style="display: none;" type="submit" id="button" class="btn btn-success btn-md" value="Cek Kehadiran"></span>
    <div class="col">
        <video id="video" width="550" height="420" style="border: 0.2rem solid grey; border-radius: 2rem;-webkit-transform: scaleX(-1);
  transform: scaleX(-1);"></video>
    </div>
    <?php echo form_close(); ?>
    <div class="col-md">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Scan Kehadiran</h3>
                    </div>
                    <!-- <div class="col-auto">
                        <a style="display: none;" href="<?php echo site_url(''); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div> -->
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Foto</th>
                            <th>Nama Jamaah</th>
                            <th>Kehadiran</th>
                        </thead>
                        <tbody>
                            <?php foreach ($jamaah as $p) { ?>
                                <tr>
                                    <td><img class="img-fluid" style="max-width: 100px; max-height: 100px;" src="<?php echo base_url() . 'assets/images/' . $p['jamaah_img']; ?>" alt=""></td>
                                    <td><?php echo $p['nama_jamaah']; ?></td>
                                    <td><?php if ($p['kehadiran'] == 'Hadir') {
                                            echo '<span style="font-size:0.75rem;" class="px-3 py-2 badge badge-pill badge-success">Hadir</span>';
                                        } else {
                                            echo '<span style="font-size:0.75rem;" class="px-3 py-2 badge badge-pill badge-danger">Tidak Hadir / Belum Hadir</span>';
                                        } ?></td>
                                    <!-- <td><a href="<?php echo site_url('jamaah/edit_kehadiran/' . $p['id_jamaah']); ?>" class="btn btn-danger"><span class="fa fa-pencil"></span></a></td> -->
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
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/zxing/zxing.min.js"></script>
<script type="text/javascript">
    window.addEventListener('load', function() {
        $('#myModal').modal('hide')
        let selectedDeviceId;
        let audio = new Audio("assets/audio/beep.mp3");
        const codeReader = new ZXing.BrowserQRCodeReader()
        console.log('ZXing code reader initialized')
        codeReader.getVideoInputDevices()
            .then((videoInputDevices) => {
                const sourceSelect = document.getElementById('sourceSelect')
                selectedDeviceId = videoInputDevices[0].deviceId
                if (videoInputDevices.length >= 1) {
                    videoInputDevices.forEach((element) => {
                        const sourceOption = document.createElement('option')
                        sourceOption.text = element.label
                        sourceOption.value = element.deviceId
                        sourceSelect.appendChild(sourceOption)
                    })
                    sourceSelect.onchange = () => {
                        selectedDeviceId = sourceSelect.value;
                    };
                    const sourceSelectPanel = document.getElementById('sourceSelectPanel')
                    sourceSelectPanel.style.display = 'block'
                }
                codeReader.decodeFromInputVideoDevice(selectedDeviceId, 'video').then((result) => {
                    console.log(result)
                    document.getElementById('result').textContent = result.text
                    var firstValue = document.getElementById('result').textContent = result.text;
                    if (result != null) {
                        audio.play();
                    }
                    $('#button').submit();
                }).catch((err) => {
                    console.error(err)
                    document.getElementById('result').textContent = err
                })
                console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
            })
            .catch((err) => {
                console.error(err)
            })

        $('#myModal').modal('show');


        setTimeout(function() {
            $('#myModal').modal('hide');
        }, 1500);
    })
</script>