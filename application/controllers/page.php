<?php 
defined('BASEPATH') or exit('No direct script access allowes');

class Page extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('modellayanan');
        $this->load->helper('url');
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
        $this->load->view('tracking');
    }
    public function index(){
        $this->load->view('landingpage/index');
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