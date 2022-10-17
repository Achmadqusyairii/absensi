<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Jamaah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jamaah_model');
        $this->load->model('Scan_model');
    }

    /*
     * Listing of luasan
     */
    function index()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('jamaah/index?');
        $config['total_rows'] = $this->Jamaah_model->get_all_jamaah_count();
        $this->pagination->initialize($config);

        $user_level = $this->session->userdata('user_level');
        $user_id = $this->session->userdata('user_id');

        $data['jamaah'] = '';
        if ($user_level == '2') {
            $data['jamaah'] = $this->Jamaah_model->get_all_jamaah_by_cabang($user_id);
        } elseif ($user_level == '1') {
            $data['jamaah'] = $this->Jamaah_model->get_all_jamaah($params);
        }

        $data['_view'] = 'jamaah/index';
        $this->load->view('layouts/main', $data);
    }

    public function getstates()
    {
        $json = array();
        $this->Jamaah_model->setCountryID($this->input->post('countryID'));
        $json = $this->Jamaah_model->getStates();
        header('Content-Type: application/json');
        echo json_encode($json);
    }

    function view()
    {

        $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
        $limit = $_POST['length']; // Ambil data limit per page
        $start = $_POST['start']; // Ambil data start
        $order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
        $order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
        $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

        $sql_total = $this->Jamaah_model->count_all(); // Panggil fungsi count_all pada Jamaah_model
        $sql_data = $this->Jamaah_model->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada Jamaah_model
        $sql_filter = $this->Jamaah_model->count_filter($search); // Panggil fungsi count_filter pada Jamaah_model

        $callback = array(
            'draw' => $_POST['draw'], // Ini dari datatablenya
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );

        header('Content-Type: application/json');
        echo json_encode($callback); // Convert array $callback ke json
    }
    /*
     * Adding a new luasan
     */

    function bukatambah()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $data['_view'] = 'jamaah/add';
        $this->load->view('layouts/main', $data);
    }


    // Tanggal
    public function getdatatanggal()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Jamaah_model->get_tanggal_keberangkatan($searchTerm);
        echo json_encode($response);
    }

    // Paket    
    public function getdatapaket($id_keberangkatan)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Jamaah_model->get_paket($id_keberangkatan, $searchTerm);
        echo json_encode($response);
    }

    function add_keberangkatan($id_jamaah)
    {
        $data['jamaah'] = $this->Jamaah_model->get_jamaah($id_jamaah);
        $data['getCountries'] = $this->Jamaah_model->getAllCountries();

        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'id_jamaah' => $this->input->post('id_jamaah'),
                'id_paket' => $this->input->post('id_paket'),
            );

            $this->Jamaah_model->add_keberangkatan($params);
            redirect('jamaah/detail/' . $id_jamaah);
        } else {
            $data['_view'] = 'jamaah/add_keberangkatan';
            $this->load->view('layouts/main', $data);
        }
    }


    function add()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $user_id = $this->session->userdata('user_id');
        $this->load->library('ciqrcode');

        $this->upload->initialize($config);
        if (!empty($_FILES['jamaah_img']['name'])) {
            if ($this->upload->do_upload('jamaah_img')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = '20%';
                $config['max_size'] = '10000';
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];

                $params = array(
                    'nik' => $this->input->post('nik'),
                    'nama_jamaah' => $this->input->post('nama_jamaah'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'nomor_telepon' => $this->input->post('nomor_telepon'),
                    'alamat' => $this->input->post('alamat'),
                    'nomor_paspor' => $this->input->post('nomor_paspor'),
                    'created_by' => $user_id,
                );

                $this->Jamaah_model->add_jamaah($params, $gambar);
                redirect('jamaah/index');
            } else {
                echo "else";
                exit();
                redirect('jamaah/index');
            }
        } else {
            $this->session->set_flashdata('error', 'Ukuran Tidak boleh lebih dari 5 MB');
            redirect('jamaah/add');
        }
    }
    /*
     * Editing a luasan
     */
    function edit($id_jamaah)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        // check if the luasan exists before trying to edit it
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $user_id = $this->session->userdata('user_id');
        $data['jamaah'] = $this->Jamaah_model->get_jamaah($id_jamaah);

        if (isset($data['jamaah']['id_jamaah'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'nik' => $this->input->post('nik'),
                    'nama_jamaah' => $this->input->post('nama_jamaah'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'alamat' => $this->input->post('alamat'),
                    'nomor_paspor' => $this->input->post('nomor_paspor'),
                    'nomor_telepon' => $this->input->post('nomor_telepon'),
                );
                $this->upload->initialize($config); // proses upload baru
                if (!empty($_FILES['jamaah_img']['name'])) {
                    if ($this->upload->do_upload('jamaah_img')) {
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './assets/images/' . $gbr['file_name'];
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = FALSE;
                        $config['quality'] = '60%';
                        $config['width'] = '20%';
                        $config['max_size'] = '10000';
                        $config['new_image'] = './assets/images/' . $gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        $gambar = $gbr['file_name'];
                    }
                }
                if (isset($gambar)){
                    $params['jamaah_img'] = $gambar;
                    unlink(FCPATH.'assets/images/'.$data['jamaah']['jamaah_img']); // menghapus file upload seblumnya
                }

                $this->Jamaah_model->update_jamaah($id_jamaah, $params);
                redirect('jamaah/index');
            } else {
                $data['_view'] = 'jamaah/edit';
                $this->load->view('layouts/main', $data);
            }
        } else {
            show_error('The jamaah you are trying to edit does not exist.');
        }
    }

    function detail($id_jamaah)
    {
        $data['jamaah'] = $this->Jamaah_model->get_jamaah($id_jamaah);
        $data['record'] = $this->Jamaah_model->get_record_keberangkatan($id_jamaah);
        $data['_view'] = 'jamaah/detail';
        $this->load->view('layouts/main', $data);
    }

    function updateqr($id_jamaah)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $user_id = $this->session->userdata('user_id');
        $this->load->library('ciqrcode');
        // check if the luasan exists before trying to edit it
        $data['jamaah'] = $this->Jamaah_model->get_jamaah($id_jamaah);

        if (isset($data['jamaah']['id_jamaah'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'qr_code_benar' => $this->input->post('uuid') . '.png',
                );

                $config['cacheable']    = true; //boolean, the default is true
                $config['cachedir']     = './assets/'; //string, the default is application/cache/
                $config['errorlog']     = './assets/'; //string, the default is application/logs/
                $config['imagedir']     = './assets/images/qr_uuid/'; //direktori penyimpanan qr code
                $config['quality']      = true; //boolean, the default is true
                $config['size']         = '1024'; //interger, the default is 1024
                $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
                $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
                $this->ciqrcode->initialize($config);

                $nama = $this->input->post('uuid');
                $site = base_url('jamaah/detail/');

                $qr_code = $nama . '.png'; //buat name dari qr code sesuai dengan nim

                $params1['data'] = $nama; //data yang akan di jadikan QR CODE
                $params1['level'] = 'H'; //H=High
                $params1['size'] = 10;
                $params1['savename'] = FCPATH . $config['imagedir'] . $qr_code; //simpan image QR CODE ke folder assets/images/
                $this->ciqrcode->generate($params1); // fungsi untuk generate QR CODE

                $this->Jamaah_model->update_jamaah($id_jamaah, $params);
                redirect('jamaah/index');
            } else {
                $data['_view'] = 'jamaah/updateqr';
                $this->load->view('layouts/main', $data);
            }
        } else {
            show_error('The jamaah you are trying to edit does not exist.');
        }
    }

    function cetak_id_card($id_jamaah)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        // check if the luasan exists before trying to edit it
        $data['jamaah'] = $this->Jamaah_model->get_jamaah($id_jamaah);

        if (isset($data['jamaah']['id_jamaah'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'qr_code' => $this->input->post('qr_code'),
                    'nama_jamaah' => $this->input->post('nama_jamaah'),
                );

                $this->Jamaah_model->update_jamaah($id_jamaah, $params);
                redirect('jamaah/index');
            } else {
                $data['_view'] = 'jamaah/cetak';
                $this->load->view('layouts/main', $data);
            }
        } else {
            show_error('The jamaah you are trying to edit does not exist.');
        }

        // if (isset($data['jamaah']['id_jamaah'])) {
        //     if (isset($_POST) && count($_POST) > 0) {
        //         $params = array(
        //             'nik' => $this->input->post('nik'),
        //             'nama_jamaah' => $this->input->post('nama_jamaah'),
        //             'jamaah_img' => $this->input->post('jamaah_img'),
        //         );

        //         $this->Jamaah_model->update_jamaah($id_jamaah, $params);
        //         redirect('jamaah/index');
        //     } else {
        //         $data['_view'] = 'jamaah/index';
        //         $this->load->view('layouts/main', $data);
        //     }
        // } else
        //     show_error('The jamaah you are trying to edit does not exist.');
    }

    function edit_kehadiran($id_jamaah)
    {
        // check if the luasan exists before trying to edit it
        $data['jamaah'] = $this->Jamaah_model->get_jamaah($id_jamaah);

        if (isset($data['jamaah']['id_jamaah'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'kehadiran' => 'Tidak Hadir / Belum Hadir',
                );

                $this->Jamaah_model->update_jamaah($id_jamaah, $params);
                redirect('jamaah/index');
            } else {
                $data['_view'] = 'jamaah/index';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The jamaah you are trying to edit does not exist.');
    }

    /*
     * Deleting jamaah
     */
    function remove($id_jamaah)
    {
        $jamaah = $this->Jamaah_model->get_jamaah($id_jamaah);

        // check if the jamaah exists before trying to delete it
        if (isset($jamaah['id_jamaah'])) {
            $this->Jamaah_model->delete_jamaah($id_jamaah);
            unlink(FCPATH.'assets/images/'.$jamaah['jamaah_img']);
            redirect('jamaah/index');
        } else
            show_error('The jamaah you are trying to delete does not exist.');
    }

    public function export()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        // Panggil class PHPExcel nya
        $excel = new PHPExcel();

        // Settingan awal fil excel
        $excel->getProperties()->setCreator('Rosana Group')
            ->setLastModifiedBy('Rosana Group')
            ->setTitle("Data Jamaah")
            ->setSubject("Jamaah")
            ->setDescription("Laporan Semua Data Jamaah")
            ->setKeywords("Data Jamaah");

        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA JAMAAH"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->getActiveSheet()->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "NIK"); // Set kolom B3 dengan tulisan "NIS"
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA"); // Set kolom C3 dengan tulisan "NAMA"
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "NOMOR HP"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $excel->setActiveSheetIndex(0)->setCellValue('E3', "GRUP KEBERANGKATAN"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('F3', "KEHADIRAN MANASIK"); // Set kolom E3 dengan tulisan "ALAMAT"


        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);


        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $jamaah = $this->Jamaah_model->get_all_jamaah_pure();

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach ($jamaah as $data) { // Lakukan looping pada variabel siswa
            $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data['nik']);
            $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data['nama_jamaah']);
            $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data['nomor_telepon']);
            $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $data['grup_keberangkatan']);
            $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $data['kehadiran']);

            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);

            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }

        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Set width kolom E


        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Laporan Data Jamaah");
        $excel->setActiveSheetIndex(0);

        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Jamaah.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');

        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }
}