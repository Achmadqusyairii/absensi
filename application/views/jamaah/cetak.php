<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<form action="<?php echo site_url() . 'jamaah/edit' . $jamaah['id_jamaah'] ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div style="margin-top: 20px;">
                <button type="button" id="btn_convert" class="btn btn-success"><span class="fa fa-download"></span> Halaman Depan</button>
            </div>
            <div style="margin-top: 20px;">
                <button type="button" id="btn_convert2" class="btn btn-success"><span class="fa fa-download"></span> Halaman Belakang</button>
            </div>
            <div id="html-content-holder" style="width: 639px; height: 1016px;">
                <img src="<?php echo base_url() . 'assets/images/id_card_template/depan.png'; ?>">
                <img style="border-radius: 20px; width: 280px; height: 385px; margin-top: -977px; margin-left: 180px;" src="<?php echo base_url() . 'assets/images/' . $jamaah['jamaah_img']; ?>">
                <table style="position:relative; color:black; width: 524px; height: 200px; margin-top: -290px; font-size: 2.5rem; text-align: center; font-weight: bold; line-height: 3rem;" align="center">
                    <tr>
                        <td>
                            <p><?php echo $jamaah['nama_jamaah'] ?></p>
                        </td>
                    </tr>
                </table>
            </div>

            <div id="previewImg" style="display: none;">
            </div>
        </div>
        <div class="col">
            <div id="html-content-holder-belakang" style="width: 639px; height: 1016px;">
                <img src="<?php echo base_url() . 'assets/images/id_card_template/belakang.png'; ?>">
                <img style="border-radius: 30px; width: 510px; height: 510px; margin-top: -1305px; margin-left: 64px;" src="<?php echo base_url() . 'assets/images/qr_uuid/' . $jamaah['qr_code_benar']; ?>">
            </div>

            <div id="previewImg2" style="display: none;">
            </div>
        </div>
    </div>


    <script>
        document.getElementById("btn_convert").addEventListener("click", function() {
            html2canvas(document.getElementById("html-content-holder"), {
                allowTaint: true,
                useCORS: true
            }).then(function(canvas) {
                var anchorTag = document.createElement("a");
                document.body.appendChild(anchorTag);
                document.getElementById("previewImg").appendChild(canvas);
                anchorTag.download = "<?php echo $jamaah['nama_jamaah'] . '_Depan' ?>.png";
                anchorTag.href = canvas.toDataURL();
                anchorTag.target = '_blank';
                anchorTag.click();
            });
        });
        document.getElementById("btn_convert2").addEventListener("click", function() {
            html2canvas(document.getElementById("html-content-holder-belakang"), {
                allowTaint: true,
                useCORS: true
            }).then(function(canvas) {
                var anchorTag = document.createElement("a");
                document.body.appendChild(anchorTag);
                document.getElementById("previewImg2").appendChild(canvas);
                anchorTag.download = "<?php echo $jamaah['nama_jamaah'] . '_Belakang' ?>.png";
                anchorTag.href = canvas.toDataURL();
                anchorTag.target = '_blank';
                anchorTag.click();
            });
        });
    </script>
</form>