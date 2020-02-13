<?php 
defined('BASEPATH') or exit('No direct script access allowes');

class Page extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('modellayanan');
        $this->load->helper('url');
        $this->load->model('modelupload');
        $this->load->library('form_validation');
    }
    public function form(){

        $this->load->view('formberbayar');
    }
    public function form1(){
        $this->load->view('formzero');
    }
    public function form2(){
        $this->load->view('formzero1');
    }

    //data berbayar
    public function tambah_pemohon(){
        $id = $this->input->post('idpemohon');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nohp = $this->input->post('nohp');
        $instansi = $this->input->post('instansi');
        $email = $this->input->post('email');
        $informasi = $this->input->post('informasi');


        $data = array(
            'idpemohon'=> $id,
            'nama' => $nama,
            'alamat'=> $alamat,
            'nohp'=> $nohp,
            'instansi'=> $instansi,
            'email'=> $email,
            'informasi' => $informasi
        );
        $this->modellayanan->insert_data($data, 'pemohon');
        redirect(base_url(). 'page/form');


    }

    public function kritik()
    {
        $data = array();
        // $data['kritik'] = $this->modelupload->getRows();
        if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
            // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
            $upload = $this->modelupload->upload();

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                $this->modelupload->save($upload);

                redirect(base_url() . 'page/kritik'); // Redirect kembali ke halaman awal / halaman view data
            } else { // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }
        $this->load->view('kritik', $data);
    }

    public function skm()
    {
        $data['jawaban'] = $this->db->query('select * from jawaban')->result();
        $data['data_responden'] = $this->db->query('select * from data_responden')->result();

        $this->load->view('skm');
    }

    public function upload_data()
    {
        $dataPDF = $this->modellayanan;
        $validation = $this->form_validation;
        $validation->set_rules($dataPDF->rules());

        if ($validation->run()) {
            $dataPDF->save();
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("formzero");
        redirect(base_url(). 'page/form1');

    }
    public function upload_data1()
    {
        $dataPDF = $this->modellayanan;
        $validation = $this->form_validation;
        $validation->set_rules($dataPDF->rules());

        if ($validation->run()) {
            $dataPDF->save1();
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("formzero1");
        redirect(base_url(). 'page/form2');

    }






    // data 0 rupiah
    // public function tambah_pemohon1(){
    //     $id = $this->input->post('idpemohon');
    //     $nama = $this->input->post('nama');
    //     $alamat = $this->input->post('alamat');
    //     $nohp = $this->input->post('nohp');
    //     $instansi = $this->input->post('instansi');
    //     $email = $this->input->post('email');
    //     $informasi = $this->input->post('informasi' );
    //     $dataPDF = $this->modellayanan->_uploadPDF();


    //     $data = array(
    //         'idpemohon'=> $id,
    //         'nama' => $nama,
    //         'alamat'=> $alamat,
    //         'nohp'=> $nohp,
    //         'instansi'=> $instansi,
    //         'email'=> $email,
    //         'informasi' => $informasi,
    //         'PDF'=> $dataPDF
    //     );
    //     $this->modellayanan->insert_data($data, 'pemohon1');
    //     redirect(base_url(). 'page/formzero');


    // }

    public function syarat(){
        $this->load->view('syarat');
    }

    public function search(){


        $keyword = $this->input->post('keyword');
        $data['pencarian']=$this->modellayanan->get_pencarian($keyword);
        $this->load->view('search',$data);


    }
    public function tracking(){
    $this->load->view('template/header');

        $this->load->view('tracking');
    $this->load->view('template/footer');

    }
    public function redirect(){
        $this->load->view('dataonline');

    }

    public function index(){
        $data['data_pemohon'] = $this->db->query('select idpemohon as id,COUNT(idpemohon) as count from pemohon')->result();
        $data['data_pemohon1'] = $this->db->query('select idpemohon as id,COUNT(idpemohon) as count from pemohon1')->result();
        

        $this->load->view('landingpage/index', $data);
    }
    public function bantuan(){
        $this->load->view('bantuan');
    }
    public function header(){
    }
    public function footer(){
    }

}

    



?>