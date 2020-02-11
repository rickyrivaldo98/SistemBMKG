<?php 
defined('BASEPATH') or exit('No direct script access allowes');

class Page extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('modellayanan');
        $this->load->helper('url');
    }
    public function form(){
        $this->load->view('formberbayar');
    }
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
        redirect(base_url(). 'page/formberbayar');


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