<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabledata extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Tabel Pegawai';
        $data['pegawai'] = $this->pegawai_model->tampilkan('pegawai')->result();
        //search code

        $this->load->library('pagination');
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama_pegawai', $data['keyword']);
        $this->db->from('pegawai');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;




        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links();
        $data['start'] = $this->uri->segment(3);
        $data['pegawai'] = $this->pegawai_model->dapatPegawai($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/head_admin', $data);
        $this->load->view('templates/header');
        $this->load->view('datatables', $data);
        $this->load->view('templates/footer');
    }

    public function add_data()
    {
        $data['judul'] = 'Form Tambah Data Pegawai';
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Pegawai', 'required');
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/head_admin', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('admin/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->pegawai_model->addData();
            redirect('tabledata');
        }
    }

    public function edit($id_pegawai)
    {
        $data['judul'] = 'Form Edit Data Pegawai';
        $where = array('id_pegawai' => $id_pegawai);
        $data['pegawai'] = $this->pegawai_model->edit_data($where, 'pegawai')->result();
        $this->load->view('templates/head_admin', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_telepon = $this->input->post('no_telepon');

        $data = array(
            'nama_pegawai' => $nama_pegawai,
            'alamat_pegawai' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'nama_pegawai' => $nama_pegawai,
            'no_telepon' => $no_telepon
        );

        $where = array(
            'id_pegawai' => $id_pegawai
        );

        $this->pegawai_model->update_data($where, $data, 'pegawai');
        redirect('tabledata/index');
    }

    public function hapus($id_pegawai)
    {
        $where = array('id_pegawai' => $id_pegawai);
        $this->pegawai_model->hapusData($where, 'pegawai');
        redirect('tabledata/index');
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['pegawai'] = $this->pegawai_model->tampilkan('pegawai')->result();

        $this->load->view('laporan_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_pegawai.pdf", array('Attachment' => 0));
    }

    public function excel()
    {
        $data['pegawai'] = $this->pegawai_model->tampilkan('pegawai')->result();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Noviana Nur Rizki");
        $object->getProperties()->setLastModifiedBy("Noviana Nur Rizki");
        $object->getProperties()->setTitle("Data Pegawai");

        $object->getActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NAMA PEGAWAI');
        $object->getActiveSheet()->setCellValue('C1', 'ALAMAT PEGAWAI');
        $object->getActiveSheet()->setCellValue('D1', 'JENIS KELAMIN');
        $object->getActiveSheet()->setCellValue('E1', 'NOMOR TELEPON');

        $baris = 2;
        $i = 1;
        foreach ($data['pegawai'] as $pegawai) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $i++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pegawai->nama_pegawai);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pegawai->alamat_pegawai);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pegawai->jenis_kelamin);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pegawai->no_telepon);

            $baris++;
        }
        $filename = "Data_Pegawai" . '.xlsx';

        $object->getActiveSheet()->setTitle("Data Pegawai");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');
    }

    //meanmpilkan pagination

    public function search()
    {
        $data['judul'] = 'Tabel Data Pegawai';
        $keyword = $this->input->post('keyword');
        $data['pegawai'] = $this->pegawai_model->get_keyword($keyword);
        $this->load->view('templates/head_admin', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('datatables', $data);
        $this->load->view('templates/footer');
    }
}
