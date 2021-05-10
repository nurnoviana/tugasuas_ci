<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{

    function login_proses($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
