<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function proses()
    {
        $this->form_validation->set_rules('user_name', 'user_name', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('user_password', 'user_password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('user_email', 'user_email', 'trim|required|min_length[1]|max_length[255]|is_unique[tbl_users.user_email]');
        if ($this->form_validation->run() == true) {
            $user_name = $this->input->post('user_name');
            $user_email = $this->input->post('user_email');
            $user_password = md5($this->input->post('user_password'));
            $user_password = md5($this->input->post('user_password'));
            
            $this->register_model->register($user_name, $user_email, $user_password);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('login');
        }else
		{
			$this->session->set_flashdata('error','Proses Tidak Berhasil. Pastikan Username anda tidak sama dengan yang sudah ada');
			redirect('register');
		}
    }
}
