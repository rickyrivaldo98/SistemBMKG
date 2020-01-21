<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelresponden');
        $this->load->helper('url');
    }


    public function index()
    {
        $data['data_responden'] = $this->db->query('select ID as id,COUNT(ID) as count from data_responden')->result();
        $data['kritik'] = $this->db->query('select ID as id,COUNT(ID) as count from kritik')->result();
        $this->load->view('admin', $data);
    }

    public function hasil_survey()
    {
        $this->load->database();
        $data['jawaban'] = $this->db->query('select * from jawaban')->result();
        $data['data_responden'] = $this->db->query('select * from data_responden')->result();

        $this->load->view('hasil_survey', $data);
    }



    public function statistika_hasil()
    {
        $this->load->database();


        // $query = $this->db->query("select Umur as umur,COUNT(umur) as count from data_responden group by umur");
        // $record = $query->result();
        // $data = [];

        // foreach($record as $row){
        //     $data['label'][]=$row->umur;
        //     $data['data'][]=$row->count;
        // }

        $data['umur'] = $this->db->query("select Umur as umur,COUNT(umur) as count from data_responden group by umur")->result();
        $umur = $data['umur'];
        $data = [];

        foreach ($umur as $u) {
            $data['labelumur'][] = $u->umur;
            $data['dataumur'][] = $u->count;
        }



        $data['jeniskelamin'] = $this->db->query("select Jenis_kelamin as jenis_kelamin,COUNT(jenis_kelamin) as count from data_responden group by jenis_kelamin")->result();
        $jeniskelamin = $data['jeniskelamin'];


        foreach ($jeniskelamin as $j) {
            $data['labeljeniskelamin'][] = $j->jenis_kelamin;
            $data['datajeniskelamin'][] = $j->count;
        }

        $data['pendidikan'] = $this->db->query("select Pendidikan as pendidikan,COUNT(pendidikan) as count from data_responden group by pendidikan")->result();
        $pendidikan = $data['pendidikan'];


        foreach ($pendidikan as $p) {
            $data['labelpendidikan'][] = $p->pendidikan;
            $data['datapendidikan'][] = $p->count;
        }

        $data['pekerjaan'] = $this->db->query("select Pekerjaan as pekerjaan,COUNT(pekerjaan) as count from data_responden group by pekerjaan")->result();
        $jeniskelamin = $data['pekerjaan'];


        foreach ($jeniskelamin as $j) {
            $data['labelpekerjaan'][] = $j->pekerjaan;
            $data['datapekerjaan'][] = $j->count;
        }

        $data['jopsi1'] = $this->db->query("select Jopsi1 as jopsi1,COUNT(jopsi1) as count from jawaban group by jopsi1")->result();
        $jopsi1 = $data['jopsi1'];

        foreach ($jopsi1 as $j1) {
            $data['labeljopsi1'][] = $j1->jopsi1;
            $data['datajopsi1'][] = $j1->count;
        }

        $data['jopsi2'] = $this->db->query("select Jopsi2 as jopsi2,COUNT(jopsi2) as count from jawaban group by jopsi2")->result();
        $jopsi2 = $data['jopsi2'];

        foreach ($jopsi2 as $j2) {
            $data['labeljopsi2'][] = $j2->jopsi2;
            $data['datajopsi2'][] = $j2->count;
        }

        $data['jopsi3'] = $this->db->query("select Jopsi3 as jopsi3,COUNT(jopsi3) as count from jawaban group by jopsi3")->result();
        $jopsi3 = $data['jopsi3'];

        foreach ($jopsi3 as $j3) {
            $data['labeljopsi3'][] = $j3->jopsi3;
            $data['datajopsi3'][] = $j3->count;
        }

        $data['jopsi4'] = $this->db->query("select Jopsi4 as jopsi4,COUNT(jopsi4) as count from jawaban group by jopsi4")->result();
        $jopsi4 = $data['jopsi4'];

        foreach ($jopsi4 as $j4) {
            $data['labeljopsi4'][] = $j4->jopsi4;
            $data['datajopsi4'][] = $j4->count;
        }

        $data['jopsi5'] = $this->db->query("select Jopsi5 as jopsi5,COUNT(jopsi5) as count from jawaban group by jopsi5")->result();
        $jopsi5 = $data['jopsi5'];

        foreach ($jopsi5 as $j5) {
            $data['labeljopsi5'][] = $j5->jopsi5;
            $data['datajopsi5'][] = $j5->count;
        }

        $data['jopsi6'] = $this->db->query("select Jopsi6 as jopsi6,COUNT(jopsi6) as count from jawaban group by jopsi6")->result();
        $jopsi6 = $data['jopsi6'];

        foreach ($jopsi6 as $j6) {
            $data['labeljopsi6'][] = $j6->jopsi6;
            $data['datajopsi6'][] = $j6->count;
        }

        $data['jopsi7'] = $this->db->query("select Jopsi7 as jopsi7,COUNT(jopsi7) as count from jawaban group by jopsi7")->result();
        $jopsi7 = $data['jopsi7'];

        foreach ($jopsi7 as $j7) {
            $data['labeljopsi7'][] = $j7->jopsi7;
            $data['datajopsi7'][] = $j7->count;
        }

        $data['jopsi8'] = $this->db->query("select Jopsi8 as jopsi8,COUNT(jopsi1) as count from jawaban group by jopsi8")->result();
        $jopsi8 = $data['jopsi8'];

        foreach ($jopsi8 as $j8) {
            $data['labeljopsi8'][] = $j8->jopsi8;
            $data['datajopsi8'][] = $j8->count;
        }

        $data['jopsi9'] = $this->db->query("select Jopsi9 as jopsi9,COUNT(jopsi9) as count from jawaban group by jopsi9")->result();
        $jopsi9 = $data['jopsi9'];

        foreach ($jopsi9 as $j9) {
            $data['labeljopsi9'][] = $j9->jopsi9;
            $data['datajopsi9'][] = $j9->count;
        }

        $data['jopsi10'] = $this->db->query("select Jopsi10 as jopsi10,COUNT(jopsi10) as count from jawaban group by jopsi10")->result();
        $jopsi10 = $data['jopsi10'];

        foreach ($jopsi10 as $j10) {
            $data['labeljopsi10'][] = $j10->jopsi10;
            $data['datajopsi10'][] = $j10->count;
        }

        $data['jopsi11'] = $this->db->query("select Jopsi11 as jopsi11,COUNT(jopsi11) as count from jawaban group by jopsi11")->result();
        $jopsi11 = $data['jopsi11'];

        foreach ($jopsi11 as $j11) {
            $data['labeljopsi11'][] = $j11->jopsi11;
            $data['datajopsi11'][] = $j11->count;
        }

        $data['jopsi12'] = $this->db->query("select Jopsi12 as jopsi12,COUNT(jopsi12) as count from jawaban group by jopsi12")->result();
        $jopsi12 = $data['jopsi12'];

        foreach ($jopsi12 as $j12) {
            $data['labeljopsi12'][] = $j12->jopsi12;
            $data['datajopsi12'][] = $j12->count;
        }

        $data['jopsi13'] = $this->db->query("select Jopsi1 as jopsi13,COUNT(jopsi13) as count from jawaban group by jopsi13")->result();
        $jopsi13 = $data['jopsi13'];

        foreach ($jopsi13 as $j13) {
            $data['labeljopsi13'][] = $j13->jopsi13;
            $data['datajopsi13'][] = $j13->count;
        }

        $data['jopsi14'] = $this->db->query("select Jopsi14 as jopsi14,COUNT(jopsi14) as count from jawaban group by jopsi14")->result();
        $jopsi14 = $data['jopsi14'];

        foreach ($jopsi14 as $j14) {
            $data['labeljopsi14'][] = $j14->jopsi14;
            $data['datajopsi14'][] = $j14->count;
        }


        $data['chart_data'] = json_encode($data);
        $data['data_responden'] = $this->db->query('select ID as id,COUNT(ID) as count from data_responden')->result();

        $this->load->view('statistika_hasil', $data);
        // $cek = json_encode($data);
        // print_r($cek);
        // exit();
    }
    // public function statisumur(){
    //     $this->load->database();
    //     $data['data_responden'] = $this->db->query('select Umur as umur from data_responden')->result();
    //     echo json_encode($data);
    // }

    public function list_permintaan_data()
    {
        $this->load->view('list_permintaan_data');
    }

    public function list_ketersediaan_data()
    {
        $this->load->view('list_ketersediaan_data');
    }

    public function list_data()
    {
        $this->load->view('list_data');
    }

    public function upload_data()
    {
        $this->load->view('upload_data');
    }

    public function skm()
    {
        $data['jawaban'] = $this->db->query('select * from jawaban')->result();
        $data['data_responden'] = $this->db->query('select * from data_responden')->result();

        $this->load->view('skm');
    }

    public function detail_responden($id)
    {
        $this->load->database();
        $data['jawaban'] = $this->db->query("select * from jawaban where ID= $id")->result();
        $data['data_responden'] = $this->db->query("select * from data_responden where ID=$id")->result();

        $this->load->view('detail_responden', $data);
    }

    public function hapus_responden($id)
    {
        $where = array(
            'ID' => $id
        );
        $this->modelresponden->delete_data($where, 'jawaban');
        $this->modelresponden->delete_data($where, 'data_responden');


        redirect(base_url() . 'admin/hasil_survey');
    }

    public function tambah_responden()
    {

        $nama = $this->input->post('Nama');
        $email = $this->input->post('Email');
        $umur = $this->input->post('Umur');
        $jeniskelamin = $this->input->post('Jenis_kelamin');
        $pendidikan = $this->input->post('Pendidikan');
        $pekerjaan = $this->input->post('Pekerjaan');
        $data = array(
            'Pekerjaan' => $pekerjaan,
            'Pendidikan' => $pendidikan,
            'Jenis_kelamin' => $jeniskelamin,
            'Umur' => $umur,
            'Email' => $email,
            'Nama' => $nama

        );
        $this->modelresponden->insert_data($data, 'data_responden');

        $jopsi1 = $this->input->post('Jopsi1');
        $jopsi2 = $this->input->post('Jopsi2');
        $jopsi3 = $this->input->post('Jopsi3');
        $jopsi4 = $this->input->post('Jopsi4');
        $jopsi5 = $this->input->post('Jopsi5');
        $jopsi6 = $this->input->post('Jopsi6');
        $jopsi7 = $this->input->post('Jopsi7');
        $jopsi8 = $this->input->post('Jopsi8');
        $jopsi9 = $this->input->post('Jopsi9');
        $jopsi10 = $this->input->post('Jopsi10');
        $jopsi11 = $this->input->post('Jopsi11');
        $jopsi12 = $this->input->post('Jopsi12');
        $jopsi13 = $this->input->post('Jopsi13');
        $jopsi14 = $this->input->post('Jopsi14');
        $jawaban = array(
            'Jopsi1' => $jopsi1,
            'Jopsi2' => $jopsi2,
            'Jopsi3' => $jopsi3,
            'Jopsi4' => $jopsi4,
            'Jopsi5' => $jopsi5,
            'Jopsi6' => $jopsi6,
            'Jopsi7' => $jopsi7,
            'Jopsi8' => $jopsi8,
            'Jopsi9' => $jopsi9,
            'Jopsi10' => $jopsi10,
            'Jopsi11' => $jopsi11,
            'Jopsi12' => $jopsi12,
            'Jopsi13' => $jopsi13,
            'Jopsi14' => $jopsi14,
            'ID' => $id

        );
        $this->modelresponden->insert_data($jawaban, 'jawaban');
        redirect(base_url() . 'admin/skm');
    }

    public function kritik()
    {
        $this->load->view('kritik');
    }

    public function tambah_kritik()
    {

        $nama = $this->input->post('Nama');
        $email = $this->input->post('Email');
        $kritik = $this->input->post('Kritik');
        $data = array(
            'Kritik' => $kritik,
            'Email' => $email,
            'Nama' => $nama

        );
        $this->modelresponden->insert_data($data, 'kritik');
        redirect(base_url() . 'admin/kritik');
    }

    public function hasil_pengaduan()
    {
        $this->load->database();
        $data['kritik'] = $this->db->query('select * from kritik')->result();

        $this->load->view('hasil_pengaduan', $data);
    }

    public function hapus_kritik($id)
    {
        $where = array(
            'ID' => $id
        );
        $this->modelresponden->delete_data($where, 'kritik');


        redirect(base_url() . 'admin/hasil_pengaduan');
    }
}
