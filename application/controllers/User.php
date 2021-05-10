<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Dashboard Member';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/head_member', $data);
        $this->load->view('templates/header_member');
        $this->load->view('member', $data);
        $this->load->view('templates/footer');
    }
}
