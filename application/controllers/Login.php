<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('login_page');
        } else {
            $this->_proses();
        }
    }

    function _proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($password == $user['password']) {
                $data = [
                    'username' => $user['username'],
                    'id_role' => $user['id_role']
                ];
                $this->session->set_userdata($data);
                if ($user['id_role'] == 1) {
                    redirect('admin/index');
                } else if ($user['id_role'] == 2) {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Password tidak tepat!
                        </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username tidak ditemukan!
          </div>');
            redirect('login');
        }
        // $where = array(
        //     'username' => $username,
        //     'password' => $password
        // );
        // $cek = $this->login_model->login_proses("user", $where)->num_rows();
        // if ($cek > 0) {

        //     $data_session = array(
        //         'nama' => $username,
        //         'status' => "login"
        //     );

        //     $this->session->set_userdata($data_session);

        //     redirect(base_url("admin"));
        // } else {
        //     echo "Username dan password tidak tepat!";
        // }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password tidak tepat! </div>');
        redirect(base_url('login'));
    }
}
