<?php 
defined('BASEPATH') or exit('No direct script access allowes');

class Tampilan extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('modeltest');
        $this->load->helper('url');
    }
    public function indextes(){
        $this->load->view('indextes');
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
        $this->modeltest->insert_data($data, 'pemohon');
        redirect(base_url(). 'tampilan/indextes');


    }
    public function search(){


        $keyword = $this->input->post('keyword');
        $data['pencarian']=$this->modeltest->get_pencarian($keyword);
        $this->load->view('search',$data);


    }
    public function tracking(){
        $this->load->view('tracking');
    }
    public function landing(){
        $this->load->view('landing');
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