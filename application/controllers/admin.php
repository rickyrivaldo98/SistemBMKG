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
        $data = [];
        $data['umur'] = $this->db->query("select Umur as umur,COUNT(umur) as count from data_responden group by umur")->result();
        $umur = $data['umur'];


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
        $pekerjaan = $data['pekerjaan'];


        foreach ($pekerjaan as $pj) {
            $data['labelpekerjaan'][] = $pj->pekerjaan;
            $data['datapekerjaan'][] = $pj->count;
        }

        $data['jopsi1a'] = $this->db->query("select Jopsi1a as jopsi1a,COUNT(jopsi1a) as count from jawaban group by jopsi1a")->result();
        $jopsi1a = $data['jopsi1a'];

        foreach ($jopsi1a as $j1a) {
            $data['labeljopsi1a'][] = $j1a->jopsi1a;
            $data['datajopsi1a'][] = $j1a->count;
        }
        $data['jopsi1b'] = $this->db->query("select Jopsi1b as jopsi1b,COUNT(jopsi1b) as count from jawaban group by jopsi1b")->result();
        $jopsi1b = $data['jopsi1b'];

        foreach ($jopsi1b as $j1b) {
            $data['labeljopsi1b'][] = $j1b->jopsi1b;
            $data['datajopsi1b'][] = $j1b->count;
        }

        $data['jopsi2a'] = $this->db->query("select Jopsi2a as jopsi2a,COUNT(jopsi2a) as count from jawaban group by jopsi2a")->result();
        $jopsi2a = $data['jopsi2a'];

        foreach ($jopsi2a as $j2a) {
            $data['labeljopsi2a'][] = $j2a->jopsi2a;
            $data['datajopsi2a'][] = $j2a->count;
        }

        $data['jopsi2b'] = $this->db->query("select Jopsi2b as jopsi2b,COUNT(jopsi2b) as count from jawaban group by jopsi2b")->result();
        $jopsi2b = $data['jopsi2b'];

        foreach ($jopsi2b as $j2b) {
            $data['labeljopsi2b'][] = $j2b->jopsi2b;
            $data['datajopsi2b'][] = $j2b->count;
        }

        $data['jopsi3a'] = $this->db->query("select Jopsi3a as jopsi3a,COUNT(jopsi3a) as count from jawaban group by jopsi3a")->result();
        $jopsi3a = $data['jopsi3a'];

        foreach ($jopsi3a as $j3a) {
            $data['labeljopsi3a'][] = $j3a->jopsi3a;
            $data['datajopsi3a'][] = $j3a->count;
        }
        $data['jopsi3b'] = $this->db->query("select Jopsi3b as jopsi3b,COUNT(jopsi3b) as count from jawaban group by jopsi3b")->result();
        $jopsi3b = $data['jopsi3b'];

        foreach ($jopsi3b as $j3b) {
            $data['labeljopsi3b'][] = $j3b->jopsi3b;
            $data['datajopsi3b'][] = $j3b->count;
        }

        $data['jopsi4a'] = $this->db->query("select Jopsi4a as jopsi4a,COUNT(jopsi4a) as count from jawaban group by jopsi4a")->result();
        $jopsi4a = $data['jopsi4a'];

        foreach ($jopsi4a as $j4a) {
            $data['labeljopsi4a'][] = $j4a->jopsi4a;
            $data['datajopsi4a'][] = $j4a->count;
        }
        $data['jopsi4b'] = $this->db->query("select Jopsi4b as jopsi4b,COUNT(jopsi4b) as count from jawaban group by jopsi4b")->result();
        $jopsi4b = $data['jopsi4b'];

        foreach ($jopsi4b as $j4b) {
            $data['labeljopsi4b'][] = $j4b->jopsi4b;
            $data['datajopsi4b'][] = $j4b->count;
        }

        $data['jopsi5a'] = $this->db->query("select Jopsi5a as jopsi5a,COUNT(jopsi5a) as count from jawaban group by jopsi5a")->result();
        $jopsi5a = $data['jopsi5a'];

        foreach ($jopsi5a as $j5a) {
            $data['labeljopsi5a'][] = $j5a->jopsi5a;
            $data['datajopsi5a'][] = $j5a->count;
        }
        $data['jopsi5b'] = $this->db->query("select Jopsi5b as jopsi5b,COUNT(jopsi5b) as count from jawaban group by jopsi5b")->result();
        $jopsi5b = $data['jopsi5b'];

        foreach ($jopsi5b as $j5b) {
            $data['labeljopsi5b'][] = $j5b->jopsi5b;
            $data['datajopsi5b'][] = $j5b->count;
        }

        $data['jopsi6a'] = $this->db->query("select Jopsi6a as jopsi6a,COUNT(jopsi6a) as count from jawaban group by jopsi6a")->result();
        $jopsi6a = $data['jopsi6a'];

        foreach ($jopsi6a as $j6a) {
            $data['labeljopsi6a'][] = $j6a->jopsi6a;
            $data['datajopsi6a'][] = $j6a->count;
        }
        $data['jopsi6b'] = $this->db->query("select Jopsi6b as jopsi6b,COUNT(jopsi6b) as count from jawaban group by jopsi6b")->result();
        $jopsi6b = $data['jopsi6b'];

        foreach ($jopsi6b as $j6b) {
            $data['labeljopsi6b'][] = $j6b->jopsi6b;
            $data['datajopsi6b'][] = $j6b->count;
        }

        $data['jopsi7a'] = $this->db->query("select Jopsi7a as jopsi7a,COUNT(jopsi7a) as count from jawaban group by jopsi7a")->result();
        $jopsi7a = $data['jopsi7a'];

        foreach ($jopsi7a as $j7a) {
            $data['labeljopsi7a'][] = $j7a->jopsi7a;
            $data['datajopsi7a'][] = $j7a->count;
        }
        $data['jopsi7b'] = $this->db->query("select Jopsi7b as jopsi7b,COUNT(jopsi7b) as count from jawaban group by jopsi7b")->result();
        $jopsi7b = $data['jopsi7b'];

        foreach ($jopsi7b as $j7b) {
            $data['labeljopsi7b'][] = $j7b->jopsi7b;
            $data['datajopsi7b'][] = $j7b->count;
        }

        $data['jopsi8'] = $this->db->query("select Jopsi8 as jopsi8,COUNT(jopsi8) as count from jawaban group by jopsi8")->result();
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

        $data['jopsi10a'] = $this->db->query("select Jopsi10a as jopsi10a,COUNT(jopsi10a) as count from jawaban group by jopsi10a")->result();
        $jopsi10a = $data['jopsi10a'];

        foreach ($jopsi10a as $j10a) {
            $data['labeljopsi10a'][] = $j10a->jopsi10a;
            $data['datajopsi10a'][] = $j10a->count;
        }
        $data['jopsi10b'] = $this->db->query("select Jopsi10b as jopsi10b,COUNT(jopsi10b) as count from jawaban group by jopsi10b")->result();
        $jopsi10b = $data['jopsi10b'];

        foreach ($jopsi10b as $j10b) {
            $data['labeljopsi10b'][] = $j10b->jopsi10b;
            $data['datajopsi10b'][] = $j10b->count;
        }

        $data['jopsi11a'] = $this->db->query("select Jopsi11a as jopsi11a,COUNT(jopsi11a) as count from jawaban group by jopsi11a")->result();
        $jopsi11a = $data['jopsi11a'];

        foreach ($jopsi11a as $j11a) {
            $data['labeljopsi11a'][] = $j11a->jopsi11a;
            $data['datajopsi11a'][] = $j11a->count;
        }
        $data['jopsi11b'] = $this->db->query("select Jopsi11b as jopsi11b,COUNT(jopsi11b) as count from jawaban group by jopsi11b")->result();
        $jopsi11b = $data['jopsi11b'];

        foreach ($jopsi11b as $j11b) {
            $data['labeljopsi11b'][] = $j11b->jopsi11b;
            $data['datajopsi11b'][] = $j11b->count;
        }

        $data['jopsi12a'] = $this->db->query("select Jopsi12a as jopsi12a,COUNT(jopsi12a) as count from jawaban group by jopsi12a")->result();
        $jopsi12a = $data['jopsi12a'];

        foreach ($jopsi12a as $j12a) {
            $data['labeljopsi12a'][] = $j12a->jopsi12a;
            $data['datajopsi12a'][] = $j12a->count;
        }
        $data['jopsi12b'] = $this->db->query("select Jopsi12b as jopsi12b,COUNT(jopsi12b) as count from jawaban group by jopsi12b")->result();
        $jopsi12b = $data['jopsi12b'];

        foreach ($jopsi12b as $j12b) {
            $data['labeljopsi12b'][] = $j12b->jopsi12b;
            $data['datajopsi12b'][] = $j12b->count;
        }

        $data['jopsi13a'] = $this->db->query("select Jopsi13a as jopsi13a,COUNT(jopsi13a) as count from jawaban group by jopsi13a")->result();
        $jopsi13a = $data['jopsi13a'];

        foreach ($jopsi13a as $j13a) {
            $data['labeljopsi13a'][] = $j13a->jopsi13a;
            $data['datajopsi13a'][] = $j13a->count;
        }
        $data['jopsi13b'] = $this->db->query("select Jopsi13b as jopsi13b,COUNT(jopsi13b) as count from jawaban group by jopsi13b")->result();
        $jopsi13b = $data['jopsi13b'];

        foreach ($jopsi13b as $j13b) {
            $data['labeljopsi13b'][] = $j13b->jopsi13b;
            $data['datajopsi13b'][] = $j13b->count;
        }

        $data['jopsi14a'] = $this->db->query("select Jopsi14a as jopsi14a,COUNT(jopsi14a) as count from jawaban group by jopsi14a")->result();
        $jopsi14a = $data['jopsi14a'];

        foreach ($jopsi14a as $j14a) {
            $data['labeljopsi14a'][] = $j14a->jopsi14a;
            $data['datajopsi14a'][] = $j14a->count;
        }
        $data['jopsi14b'] = $this->db->query("select Jopsi14b as jopsi14b,COUNT(jopsi14b) as count from jawaban group by jopsi14b")->result();
        $jopsi14b = $data['jopsi14b'];

        foreach ($jopsi14b as $j14b) {
            $data['labeljopsi14b'][] = $j14b->jopsi14b;
            $data['datajopsi14b'][] = $j14b->count;
        }

        $data['jopsi15a'] = $this->db->query("select Jopsi15a as jopsi15a,COUNT(jopsi15a) as count from jawaban group by jopsi15a")->result();
        $jopsi15a = $data['jopsi15a'];

        foreach ($jopsi15a as $j15a) {
            $data['labeljopsi15a'][] = $j15a->jopsi15a;
            $data['datajopsi15a'][] = $j15a->count;
        }
        $data['jopsi15b'] = $this->db->query("select Jopsi15b as jopsi15b,COUNT(jopsi15b) as count from jawaban group by jopsi15b")->result();
        $jopsi15b = $data['jopsi15b'];

        foreach ($jopsi15b as $j15b) {
            $data['labeljopsi15b'][] = $j15b->jopsi15b;
            $data['datajopsi15b'][] = $j15b->count;
        }

        $data['jopsi16a'] = $this->db->query("select Jopsi16a as jopsi16a,COUNT(jopsi16a) as count from jawaban group by jopsi16a")->result();
        $jopsi16a = $data['jopsi16a'];

        foreach ($jopsi16a as $j16a) {
            $data['labeljopsi16a'][] = $j16a->jopsi16a;
            $data['datajopsi16a'][] = $j16a->count;
        }
        $data['jopsi16b'] = $this->db->query("select Jopsi16b as jopsi16b,COUNT(jopsi16b) as count from jawaban group by jopsi16b")->result();
        $jopsi16b = $data['jopsi16b'];

        foreach ($jopsi16b as $j16b) {
            $data['labeljopsi16b'][] = $j16b->jopsi16b;
            $data['datajopsi16b'][] = $j16b->count;
        }

        $data['jopsi17a'] = $this->db->query("select Jopsi17a as jopsi17a,COUNT(jopsi17a) as count from jawaban group by jopsi17a")->result();
        $jopsi17a = $data['jopsi17a'];

        foreach ($jopsi17a as $j17a) {
            $data['labeljopsi17a'][] = $j17a->jopsi17a;
            $data['datajopsi17a'][] = $j17a->count;
        }
        $data['jopsi17b'] = $this->db->query("select Jopsi17b as jopsi17b,COUNT(jopsi17b) as count from jawaban group by jopsi17b")->result();
        $jopsi17b = $data['jopsi17b'];

        foreach ($jopsi17b as $j17b) {
            $data['labeljopsi17b'][] = $j17b->jopsi17b;
            $data['datajopsi17b'][] = $j17b->count;
        }

        $data['jopsi18a'] = $this->db->query("select Jopsi18a as jopsi18a,COUNT(jopsi18a) as count from jawaban group by jopsi18a")->result();
        $jopsi18a = $data['jopsi18a'];

        foreach ($jopsi18a as $j18a) {
            $data['labeljopsi18a'][] = $j18a->jopsi18a;
            $data['datajopsi18a'][] = $j18a->count;
        }
        $data['jopsi18b'] = $this->db->query("select Jopsi18b as jopsi18b,COUNT(jopsi18b) as count from jawaban group by jopsi18b")->result();
        $jopsi18b = $data['jopsi18b'];

        foreach ($jopsi18b as $j18b) {
            $data['labeljopsi18b'][] = $j18b->jopsi18b;
            $data['datajopsi18b'][] = $j18b->count;
        }

        $data['jopsi19a'] = $this->db->query("select Jopsi19a as jopsi19a,COUNT(jopsi19a) as count from jawaban group by jopsi19a")->result();
        $jopsi19a = $data['jopsi19a'];

        foreach ($jopsi19a as $j19a) {
            $data['labeljopsi19a'][] = $j19a->jopsi19a;
            $data['datajopsi19a'][] = $j19a->count;
        }
        $data['jopsi19b'] = $this->db->query("select Jopsi19b as jopsi19b,COUNT(jopsi19b) as count from jawaban group by jopsi19b")->result();
        $jopsi19b = $data['jopsi19b'];

        foreach ($jopsi19b as $j19b) {
            $data['labeljopsi19b'][] = $j19b->jopsi19b;
            $data['datajopsi19b'][] = $j19b->count;
        }

        $data['jopsi20a'] = $this->db->query("select Jopsi20a as jopsi20a,COUNT(jopsi20a) as count from jawaban group by jopsi20a")->result();
        $jopsi20a = $data['jopsi20a'];

        foreach ($jopsi20a as $j20a) {
            $data['labeljopsi20a'][] = $j20a->jopsi20a;
            $data['datajopsi20a'][] = $j20a->count;
        }

        $data['jopsi20b'] = $this->db->query("select Jopsi20b as jopsi20b,COUNT(jopsi20b) as count from jawaban group by jopsi20b")->result();
        $jopsi20b = $data['jopsi20b'];

        foreach ($jopsi20b as $j20b) {
            $data['labeljopsi20b'][] = $j20b->jopsi20b;
            $data['datajopsi20b'][] = $j20b->count;
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

        $this->modelresponden->delete_data($where, 'data_responden');


        redirect(base_url() . 'admin/hasil_survey');
    }

    public function tambah_responden()
    {


        $email = $this->input->post('Email');
        $umur = $this->input->post('Umur');
        $jeniskelamin = $this->input->post('Jenis_kelamin');
        $pendidikan = $this->input->post('Pendidikan');
        $pekerjaan = $this->input->post('Pekerjaan');
        $pelayanan = $this->input->post('Pelayanan');
        $data = array(
            'Pelayanan' => implode(",", $pelayanan),
            'Pekerjaan' => $pekerjaan,
            'Pendidikan' => $pendidikan,
            'Jenis_kelamin' => $jeniskelamin,
            'Umur' => $umur,
            'Email' => $email,
        );
        $this->modelresponden->insert_data($data, 'data_responden');

        $jopsi1a = $this->input->post('Jopsi1a');
        $jopsi2a = $this->input->post('Jopsi2a');
        $jopsi3a = $this->input->post('Jopsi3a');
        $jopsi4a = $this->input->post('Jopsi4a');
        $jopsi5a = $this->input->post('Jopsi5a');
        $jopsi6a = $this->input->post('Jopsi6a');
        $jopsi7a = $this->input->post('Jopsi7a');
        $jopsi8 = $this->input->post('Jopsi8');
        $jopsi9 = $this->input->post('Jopsi9');
        $jopsi10a = $this->input->post('Jopsi10a');
        $jopsi11a = $this->input->post('Jopsi11a');
        $jopsi12a = $this->input->post('Jopsi12a');
        $jopsi13a = $this->input->post('Jopsi13a');
        $jopsi14a = $this->input->post('Jopsi14a');
        $jopsi15a = $this->input->post('Jopsi15a');
        $jopsi16a = $this->input->post('Jopsi16a');
        $jopsi17a = $this->input->post('Jopsi17a');
        $jopsi18a = $this->input->post('Jopsi18a');
        $jopsi19a = $this->input->post('Jopsi19a');
        $jopsi20a = $this->input->post('Jopsi20a');
        $jopsi1b = $this->input->post('Jopsi1b');
        $jopsi2b = $this->input->post('Jopsi2b');
        $jopsi3b = $this->input->post('Jopsi3b');
        $jopsi4b = $this->input->post('Jopsi4b');
        $jopsi5b = $this->input->post('Jopsi5b');
        $jopsi6b = $this->input->post('Jopsi6b');
        $jopsi7b = $this->input->post('Jopsi7b');
        $jopsi10b = $this->input->post('Jopsi10b');
        $jopsi11b = $this->input->post('Jopsi11b');
        $jopsi12b = $this->input->post('Jopsi12b');
        $jopsi13b = $this->input->post('Jopsi13b');
        $jopsi14b = $this->input->post('Jopsi14b');
        $jopsi15b = $this->input->post('Jopsi15b');
        $jopsi16b = $this->input->post('Jopsi16b');
        $jopsi17b = $this->input->post('Jopsi17b');
        $jopsi18b = $this->input->post('Jopsi18b');
        $jopsi19b = $this->input->post('Jopsi19b');
        $jopsi20b = $this->input->post('Jopsi20b');
        $jawaban = array(
            'Jopsi1a' => $jopsi1a,
            'Jopsi2a' => $jopsi2a,
            'Jopsi3a' => $jopsi3a,
            'Jopsi4a' => $jopsi4a,
            'Jopsi5a' => $jopsi5a,
            'Jopsi6a' => $jopsi6a,
            'Jopsi7a' => $jopsi7a,
            'Jopsi8' => $jopsi8,
            'Jopsi9' => $jopsi9,
            'Jopsi10a' => $jopsi10a,
            'Jopsi11a' => $jopsi11a,
            'Jopsi12a' => $jopsi12a,
            'Jopsi13a' => $jopsi13a,
            'Jopsi14a' => $jopsi14a,
            'Jopsi15a' => $jopsi15a,
            'Jopsi16a' => $jopsi16a,
            'Jopsi17a' => $jopsi17a,
            'Jopsi18a' => $jopsi18a,
            'Jopsi19a' => $jopsi19a,
            'Jopsi20a' => $jopsi20a,
            'Jopsi1b' => $jopsi1b,
            'Jopsi2b' => $jopsi2b,
            'Jopsi3b' => $jopsi3b,
            'Jopsi4b' => $jopsi4b,
            'Jopsi5b' => $jopsi5b,
            'Jopsi6b' => $jopsi6b,
            'Jopsi7b' => $jopsi7b,
            'Jopsi10b' => $jopsi10b,
            'Jopsi11b' => $jopsi11b,
            'Jopsi12b' => $jopsi12b,
            'Jopsi13b' => $jopsi13b,
            'Jopsi14b' => $jopsi14b,
            'Jopsi15b' => $jopsi15b,
            'Jopsi16b' => $jopsi16b,
            'Jopsi17b' => $jopsi17b,
            'Jopsi18b' => $jopsi18b,
            'Jopsi19b' => $jopsi19b,
            'Jopsi20b' => $jopsi20b,


        );
        $this->modelresponden->insert_data($jawaban, 'jawaban');

        redirect(base_url() . 'admin/skm');
        // $this->load->view('skm');
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
    public function test()
    {
        $this->load->view('test');
    }
}
