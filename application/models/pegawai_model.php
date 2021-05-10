<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pegawai_model extends CI_Model
{
    public function get_pegawai()
    {
        return $this->db->get('pegawai')->result_array();
    }

    public function tampilkan()
    {
        return $this->db->get('pegawai');
    }


    public function addData()
    {
        $data = [
            "nama_pegawai" => $this->input->post('nama_pegawai', true),
            "alamat_pegawai" => $this->input->post('alamat', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "no_telepon" => $this->input->post('no_telepon', true)
        ];

        $this->db->insert('pegawai', $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapusData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function hitung_pegawai()
    {
        return $this->db->get('pegawai')->num_rows();
    }

    public function dapatPegawai($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_pegawai', $keyword);
        }
        return $this->db->get('pegawai', $limit, $start, $keyword)->result_array();
    }
}
