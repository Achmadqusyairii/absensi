<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Grup Keberangkatan</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url() . 'jamaah/add_keberangkatan/' . $jamaah['id_jamaah'] ?>" method="post" enctype="multipart/form-data">
                            <h3>Data Keberangkatan</h3>
                            <input type="text" name="id_jamaah" value="<?php echo ($this->input->post('id_jamaah') ? $this->input->post('id_jamaah') : $jamaah['id_jamaah']); ?>" class="form-control" id="id_jamaah" />
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select title="Select Country" name="regcountry" class="form-control" id="country-name">
                                            <option value="">Pilih Tanggal Tersedia</option>
                                            <?php
                                            foreach ($getCountries as $key => $element) {
                                                echo '<option value="' . $element['id_keberangkatan'] . '">' . $element['tanggal_keberangkatan'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select title="Select State" name="id_paket" class="form-control" id="state-name">
                                            <option value="">Pilih Paket</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-right">Tambah</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        // get state 
        jQuery(document).on('change', 'select#country-name', function(e) {
            e.preventDefault();
            var countryID = jQuery(this).val();
            getStatesList(countryID);
        });

        // function get All States
        function getStatesList(countryID) {
            $.ajax({
                url: "https://alfatihahtravel.com/admin/jamaah/getstates",
                // url: "http://localhost/absensi/jamaah/getstates",
                type: 'post',
                data: {
                    countryID: countryID,
                },
                dataType: 'json',
                beforeSend: function() {
                    jQuery('select#state-name').find("option:eq(0)").html("Please wait..");
                },
                complete: function() {
                    // code
                },
                success: function(json) {
                    var options = '';
                    options += '<option value="">Pilih Paket</option>';
                    for (var i = 0; i < json.length; i++) {
                        options += '<option value="' + json[i].id_paket + '">' + json[i].paket + '</option>';
                    }
                    jQuery("select#state-name").html(options);
                    
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        }
    });
</script>