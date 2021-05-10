<?php
defined('BASEPATH') or exit('No direct script access allowed');

class table_member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model');
    }


    public function index()
    {
        $data['judul'] = 'Tabel Pegawai';
        $data['pegawai'] = $this->pegawai_model->get_pegawai();
        $this->load->view('templates/head_member', $data);
        $this->load->view('templates/header_member');
        $this->load->view('member_tables');
        $this->load->view('templates/footer');
    }
}
