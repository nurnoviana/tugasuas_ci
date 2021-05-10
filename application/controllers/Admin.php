<?php

class Admin extends CI_Controller
{


    function index()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/head_admin', $data);
        $this->load->view('templates/header');
        $this->load->view('admin', $data);
        $this->load->view('templates/footer');
    }
}
