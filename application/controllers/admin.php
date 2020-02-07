<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CSVModel');
        $this->load->model('modelresponden');
        $this->load->model('modelupload');
        $this->load->model('LoginModel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
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


        // if ($jopsi1a == 'Sangat Setuju') {
        //     $data['dataindex1a'] = $jopsi1a->count * 3;
        //     if ($jopsi1a == 'Setuju') {
        //         $data['dataindex1a'] = $jopsi1a->count * 2;
        //         if ($jopsi1a == 'Kurang Setuju') {
        //             $data['dataindex1a'] = $jopsi1a->count;
        //             if ($jopsi1a == 'Tidak Setuju') {
        //                 $data['dataindex1a'] = $jopsi1a->count * 0;
        //             }
        //         }
        //     }
        // }

        foreach ($jopsi1a as $j1a) {
            $data['labeljopsi1a'][] = $j1a->jopsi1a;
            $data['datajopsi1a'][] = $j1a->count;
            if ($j1a->jopsi1a == 'Sangat Setuju') {
                $test1[] = $j1a->count * 4;
            }
            if ($j1a->jopsi1a == 'Setuju') {
                $test1[] = $j1a->count * 3;
            }
            if ($j1a->jopsi1a == 'Kurang Setuju') {
                $test1[] = $j1a->count * 2;
            }
            if ($j1a->jopsi1a == 'Tidak Setuju') {
                $test1[] = $j1a->count * 1;
            }
        }
        $testsum = array_sum($test1);


        $data['jopsi1b'] = $this->db->query("select Jopsi1b as jopsi1b,COUNT(jopsi1b) as count from jawaban group by jopsi1b")->result();
        $jopsi1b = $data['jopsi1b'];
        foreach ($jopsi1b as $j1b) {
            $data['labeljopsi1b'][] = $j1b->jopsi1b;
            $data['datajopsi1b'][] = $j1b->count;
            if ($j1b->jopsi1b == 'Sangat Penting') {
                $test1b[] = $j1b->count * 4;
            }
            if ($j1b->jopsi1b == 'Penting') {
                $test1b[] = $j1b->count * 3;
            }
            if ($j1b->jopsi1b == 'Kurang Penting') {
                $test1b[] = $j1b->count * 2;
            }
            if ($j1b->jopsi1b == 'Tidak Penting') {
                $test1b[] = $j1b->count * 1;
            }
        }
        $testsum1b = array_sum($test1b);

        $data['jopsi2a'] = $this->db->query("select Jopsi2a as jopsi2a,COUNT(jopsi2a) as count from jawaban group by jopsi2a")->result();
        $jopsi2a = $data['jopsi2a'];

        foreach ($jopsi2a as $j2a) {
            $data['labeljopsi2a'][] = $j2a->jopsi2a;
            $data['datajopsi2a'][] = $j2a->count;
            if ($j2a->jopsi2a == 'Sangat Setuju') {
                $test2[] = $j2a->count * 4;
            }

            if ($j2a->jopsi2a == 'Setuju') {
                $test2[] = $j2a->count * 3;
            }

            if ($j2a->jopsi2a == 'Kurang Setuju') {
                $test2[] = $j2a->count * 2;
            }

            if ($j2a->jopsi2a == 'Tidak Setuju') {
                $test2[] = $j2a->count * 1;
            }
        }
        $testsum2 = array_sum($test2);



        $data['jopsi2b'] = $this->db->query("select Jopsi2b as jopsi2b,COUNT(jopsi2b) as count from jawaban group by jopsi2b")->result();
        $jopsi2b = $data['jopsi2b'];

        foreach ($jopsi2b as $j2b) {
            $data['labeljopsi2b'][] = $j2b->jopsi2b;
            $data['datajopsi2b'][] = $j2b->count;
            if ($j2b->jopsi2b == 'Sangat Penting') {
                $test2b[] = $j2b->count * 4;
            }
            if ($j2b->jopsi2b == 'Penting') {
                $test2b[] = $j2b->count * 3;
            }
            if ($j2b->jopsi2b == 'Kurang Penting') {
                $test2b[] = $j2b->count * 2;
            }
            if ($j2b->jopsi2b == 'Tidak Penting') {
                $test2b[] = $j2b->count * 1;
            }
        }
        $testsum2b = array_sum($test2b);

        $data['jopsi3a'] = $this->db->query("select Jopsi3a as jopsi3a,COUNT(jopsi3a) as count from jawaban group by jopsi3a")->result();
        $jopsi3a = $data['jopsi3a'];

        foreach ($jopsi3a as $j3a) {
            $data['labeljopsi3a'][] = $j3a->jopsi3a;
            $data['datajopsi3a'][] = $j3a->count;
            if ($j3a->jopsi3a == 'Sangat Setuju') {
                $test3[] = $j3a->count * 4;
            }

            if ($j3a->jopsi3a == 'Setuju') {
                $test3[] = $j3a->count * 3;
            }

            if ($j3a->jopsi3a == 'Kurang Setuju') {
                $test3[] = $j3a->count * 2;
            }

            if ($j3a->jopsi3a == 'Tidak Setuju') {
                $test3[] = $j3a->count * 1;
            }
        }
        $testsum3 = array_sum($test3);


        $data['jopsi3b'] = $this->db->query("select Jopsi3b as jopsi3b,COUNT(jopsi3b) as count from jawaban group by jopsi3b")->result();
        $jopsi3b = $data['jopsi3b'];

        foreach ($jopsi3b as $j3b) {
            $data['labeljopsi3b'][] = $j3b->jopsi3b;
            $data['datajopsi3b'][] = $j3b->count;
            if ($j3b->jopsi3b == 'Sangat Penting') {
                $test3b[] = $j3b->count * 4;
            }
            if ($j3b->jopsi3b == 'Penting') {
                $test3b[] = $j3b->count * 3;
            }
            if ($j3b->jopsi3b == 'Kurang Penting') {
                $test3b[] = $j3b->count * 2;
            }
            if ($j3b->jopsi3b == 'Tidak Penting') {
                $test3b[] = $j3b->count * 1;
            }
        }
        $testsum3b = array_sum($test3b);

        $data['jopsi4a'] = $this->db->query("select Jopsi4a as jopsi4a,COUNT(jopsi4a) as count from jawaban group by jopsi4a")->result();
        $jopsi4a = $data['jopsi4a'];

        foreach ($jopsi4a as $j4a) {
            $data['labeljopsi4a'][] = $j4a->jopsi4a;
            $data['datajopsi4a'][] = $j4a->count;
            if ($j4a->jopsi4a == 'Sangat Setuju') {
                $test4[] = $j4a->count * 4;
            }

            if ($j4a->jopsi4a == 'Setuju') {
                $test4[] = $j4a->count * 3;
            }

            if ($j4a->jopsi4a == 'Kurang Setuju') {
                $test4[] = $j4a->count * 2;
            }

            if ($j4a->jopsi4a == 'Tidak Setuju') {
                $test4[] = $j4a->count * 1;
            }
        }
        $testsum4 = array_sum($test4);

        $data['jopsi4b'] = $this->db->query("select Jopsi4b as jopsi4b,COUNT(jopsi4b) as count from jawaban group by jopsi4b")->result();
        $jopsi4b = $data['jopsi4b'];

        foreach ($jopsi4b as $j4b) {
            $data['labeljopsi4b'][] = $j4b->jopsi4b;
            $data['datajopsi4b'][] = $j4b->count;
            if ($j4b->jopsi4b == 'Sangat Penting') {
                $test4b[] = $j4b->count * 4;
            }
            if ($j4b->jopsi4b == 'Penting') {
                $test4b[] = $j4b->count * 3;
            }
            if ($j4b->jopsi4b == 'Kurang Penting') {
                $test4b[] = $j4b->count * 2;
            }
            if ($j4b->jopsi4b == 'Tidak Penting') {
                $test4b[] = $j4b->count * 1;
            }
        }
        $testsum4b = array_sum($test4b);

        $data['jopsi5a'] = $this->db->query("select Jopsi5a as jopsi5a,COUNT(jopsi5a) as count from jawaban group by jopsi5a")->result();
        $jopsi5a = $data['jopsi5a'];

        foreach ($jopsi5a as $j5a) {
            $data['labeljopsi5a'][] = $j5a->jopsi5a;
            $data['datajopsi5a'][] = $j5a->count;
            if ($j5a->jopsi5a == 'Sangat Setuju') {
                $test5[] = $j5a->count * 4;
            }

            if ($j5a->jopsi5a == 'Setuju') {
                $test5[] = $j5a->count * 3;
            }

            if ($j5a->jopsi5a == 'Kurang Setuju') {
                $test5[] = $j5a->count * 2;
            }

            if ($j5a->jopsi5a == 'Tidak Setuju') {
                $test5[] = $j5a->count * 1;
            }
        }
        $testsum5 = array_sum($test5);

        $data['jopsi5b'] = $this->db->query("select Jopsi5b as jopsi5b,COUNT(jopsi5b) as count from jawaban group by jopsi5b")->result();
        $jopsi5b = $data['jopsi5b'];

        foreach ($jopsi5b as $j5b) {
            $data['labeljopsi5b'][] = $j5b->jopsi5b;
            $data['datajopsi5b'][] = $j5b->count;
            if ($j5b->jopsi5b == 'Sangat Penting') {
                $test5b[] = $j5b->count * 4;
            }
            if ($j5b->jopsi5b == 'Penting') {
                $test5b[] = $j5b->count * 3;
            }
            if ($j5b->jopsi5b == 'Kurang Penting') {
                $test5b[] = $j5b->count * 2;
            }
            if ($j5b->jopsi5b == 'Tidak Penting') {
                $test5b[] = $j5b->count * 1;
            }
        }
        $testsum5b = array_sum($test5b);

        $data['jopsi6a'] = $this->db->query("select Jopsi6a as jopsi6a,COUNT(jopsi6a) as count from jawaban group by jopsi6a")->result();
        $jopsi6a = $data['jopsi6a'];

        foreach ($jopsi6a as $j6a) {
            $data['labeljopsi6a'][] = $j6a->jopsi6a;
            $data['datajopsi6a'][] = $j6a->count;
            if ($j6a->jopsi6a == 'Sangat Setuju') {
                $test6[] = $j6a->count * 4;
            }

            if ($j6a->jopsi6a == 'Setuju') {
                $test6[] = $j6a->count * 3;
            }

            if ($j6a->jopsi6a == 'Kurang Setuju') {
                $test6[] = $j6a->count * 2;
            }

            if ($j6a->jopsi6a == 'Tidak Setuju') {
                $test6[] = $j6a->count * 1;
            }
        }
        $testsum6 = array_sum($test6);
        $data['jopsi6b'] = $this->db->query("select Jopsi6b as jopsi6b,COUNT(jopsi6b) as count from jawaban group by jopsi6b")->result();
        $jopsi6b = $data['jopsi6b'];

        foreach ($jopsi6b as $j6b) {
            $data['labeljopsi6b'][] = $j6b->jopsi6b;
            $data['datajopsi6b'][] = $j6b->count;
            if ($j6b->jopsi6b == 'Sangat Penting') {
                $test6b[] = $j6b->count * 4;
            }
            if ($j6b->jopsi6b == 'Penting') {
                $test6b[] = $j6b->count * 3;
            }
            if ($j6b->jopsi6b == 'Kurang Penting') {
                $test6b[] = $j6b->count * 2;
            }
            if ($j6b->jopsi6b == 'Tidak Penting') {
                $test6b[] = $j6b->count * 1;
            }
        }
        $testsum6b = array_sum($test6b);

        $data['jopsi7a'] = $this->db->query("select Jopsi7a as jopsi7a,COUNT(jopsi7a) as count from jawaban group by jopsi7a")->result();
        $jopsi7a = $data['jopsi7a'];

        foreach ($jopsi7a as $j7a) {
            $data['labeljopsi7a'][] = $j7a->jopsi7a;
            $data['datajopsi7a'][] = $j7a->count;
            if ($j7a->jopsi7a == 'Sangat Setuju') {
                $test7[] = $j7a->count * 4;
            }

            if ($j7a->jopsi7a == 'Setuju') {
                $test7[] = $j7a->count * 3;
            }

            if ($j7a->jopsi7a == 'Kurang Setuju') {
                $test7[] = $j7a->count * 2;
            }

            if ($j7a->jopsi7a == 'Tidak Setuju') {
                $test7[] = $j7a->count * 1;
            }
        }

        $testsum7 = array_sum($test7);

        $data['jopsi7b'] = $this->db->query("select Jopsi7b as jopsi7b,COUNT(jopsi7b) as count from jawaban group by jopsi7b")->result();
        $jopsi7b = $data['jopsi7b'];

        foreach ($jopsi7b as $j7b) {
            $data['labeljopsi7b'][] = $j7b->jopsi7b;
            $data['datajopsi7b'][] = $j7b->count;
            if ($j7b->jopsi7b == 'Sangat Penting') {
                $test7b[] = $j7b->count * 4;
            }
            if ($j7b->jopsi7b == 'Penting') {
                $test7b[] = $j7b->count * 3;
            }
            if ($j7b->jopsi7b == 'Kurang Penting') {
                $test7b[] = $j7b->count * 2;
            }
            if ($j7b->jopsi7b == 'Tidak Penting') {
                $test7b[] = $j7b->count * 1;
            }
        }
        $testsum7b = array_sum($test7b);

        $data['jopsi8'] = $this->db->query("select Jopsi8 as jopsi8,COUNT(jopsi8) as count from jawaban group by jopsi8")->result();
        $jopsi8 = $data['jopsi8'];

        foreach ($jopsi8 as $j8) {
            $data['labeljopsi8'][] = $j8->jopsi8;
            $data['datajopsi8'][] = $j8->count;
            if ($j8->jopsi8 == 'Sangat Setuju') {
                $test8[] = $j8->count * 4;
            }

            if ($j8->jopsi8 == 'Setuju') {
                $test8[] = $j8->count * 3;
            }

            if ($j8->jopsi8 == 'Kurang Setuju') {
                $test8[] = $j8->count * 2;
            }

            if ($j8->jopsi8 == 'Tidak Setuju') {
                $test8[] = $j8->count * 1;
            }
        }

        $testsum8 = array_sum($test8);

        $data['jopsi9'] = $this->db->query("select Jopsi9 as jopsi9,COUNT(jopsi9) as count from jawaban group by jopsi9")->result();
        $jopsi9 = $data['jopsi9'];

        foreach ($jopsi9 as $j9) {
            $data['labeljopsi9'][] = $j9->jopsi9;
            $data['datajopsi9'][] = $j9->count;
            if ($j9->jopsi9 == 'Sangat Setuju') {
                $test9[] = $j9->count * 4;
            }

            if ($j9->jopsi9 == 'Setuju') {
                $test9[] = $j9->count * 3;
            }

            if ($j9->jopsi9 == 'Kurang Setuju') {
                $test9[] = $j9->count * 2;
            }

            if ($j9->jopsi9 == 'Tidak Setuju') {
                $test9[] = $j9->count * 1;
            }
        }

        $testsum9 = array_sum($test9);

        $data['jopsi10a'] = $this->db->query("select Jopsi10a as jopsi10a,COUNT(jopsi10a) as count from jawaban group by jopsi10a")->result();
        $jopsi10a = $data['jopsi10a'];

        foreach ($jopsi10a as $j10a) {
            $data['labeljopsi10a'][] = $j10a->jopsi10a;
            $data['datajopsi10a'][] = $j10a->count;
            if ($j10a->jopsi10a == 'Sangat Setuju') {
                $test10[] = $j10a->count * 4;
            }

            if ($j10a->jopsi10a == 'Setuju') {
                $test10[] = $j10a->count * 3;
            }

            if ($j10a->jopsi10a == 'Kurang Setuju') {
                $test10[] = $j10a->count * 2;
            }

            if ($j10a->jopsi10a == 'Tidak Setuju') {
                $test10[] = $j10a->count * 1;
            }
        }

        $testsum10 = array_sum($test10);

        $data['jopsi10b'] = $this->db->query("select Jopsi10b as jopsi10b,COUNT(jopsi10b) as count from jawaban group by jopsi10b")->result();
        $jopsi10b = $data['jopsi10b'];

        foreach ($jopsi10b as $j10b) {
            $data['labeljopsi10b'][] = $j10b->jopsi10b;
            $data['datajopsi10b'][] = $j10b->count;
            if ($j10b->jopsi10b == 'Sangat Penting') {
                $test10b[] = $j10b->count * 4;
            }
            if ($j10b->jopsi10b == 'Penting') {
                $test10b[] = $j10b->count * 3;
            }
            if ($j10b->jopsi10b == 'Kurang Penting') {
                $test10b[] = $j10b->count * 2;
            }
            if ($j10b->jopsi10b == 'Tidak Penting') {
                $test10b[] = $j10b->count * 1;
            }
        }
        $testsum10b = array_sum($test10b);

        $data['jopsi11a'] = $this->db->query("select Jopsi11a as jopsi11a,COUNT(jopsi11a) as count from jawaban group by jopsi11a")->result();
        $jopsi11a = $data['jopsi11a'];

        foreach ($jopsi11a as $j11a) {
            $data['labeljopsi11a'][] = $j11a->jopsi11a;
            $data['datajopsi11a'][] = $j11a->count;
            if ($j11a->jopsi11a == 'Sangat Setuju') {
                $test11[] = $j11a->count * 4;
            }

            if ($j11a->jopsi11a == 'Setuju') {
                $test11[] = $j11a->count * 3;
            }

            if ($j11a->jopsi11a == 'Kurang Setuju') {
                $test11[] = $j11a->count * 2;
            }

            if ($j11a->jopsi11a == 'Tidak Setuju') {
                $test11[] = $j11a->count * 1;
            }
        }

        $testsum11 = array_sum($test11);
        $data['jopsi11b'] = $this->db->query("select Jopsi11b as jopsi11b,COUNT(jopsi11b) as count from jawaban group by jopsi11b")->result();
        $jopsi11b = $data['jopsi11b'];

        foreach ($jopsi11b as $j11b) {
            $data['labeljopsi11b'][] = $j11b->jopsi11b;
            $data['datajopsi11b'][] = $j11b->count;
            if ($j11b->jopsi11b == 'Sangat Penting') {
                $test11b[] = $j11b->count * 4;
            }
            if ($j11b->jopsi11b == 'Penting') {
                $test11b[] = $j11b->count * 3;
            }
            if ($j11b->jopsi11b == 'Kurang Penting') {
                $test11b[] = $j11b->count * 2;
            }
            if ($j11b->jopsi11b == 'Tidak Penting') {
                $test11b[] = $j11b->count * 1;
            }
        }
        $testsum11b = array_sum($test11b);

        $data['jopsi12a'] = $this->db->query("select Jopsi12a as jopsi12a,COUNT(jopsi12a) as count from jawaban group by jopsi12a")->result();
        $jopsi12a = $data['jopsi12a'];

        foreach ($jopsi12a as $j12a) {
            $data['labeljopsi12a'][] = $j12a->jopsi12a;
            $data['datajopsi12a'][] = $j12a->count;
            if ($j12a->jopsi12a == 'Sangat Setuju') {
                $test12[] = $j12a->count * 4;
            }

            if ($j12a->jopsi12a == 'Setuju') {
                $test12[] = $j12a->count * 3;
            }

            if ($j12a->jopsi12a == 'Kurang Setuju') {
                $test12[] = $j12a->count * 2;
            }

            if ($j12a->jopsi12a == 'Tidak Setuju') {
                $test12[] = $j12a->count * 1;
            }
        }

        $testsum12 = array_sum($test12);

        $data['jopsi12b'] = $this->db->query("select Jopsi12b as jopsi12b,COUNT(jopsi12b) as count from jawaban group by jopsi12b")->result();
        $jopsi12b = $data['jopsi12b'];

        foreach ($jopsi12b as $j12b) {
            $data['labeljopsi12b'][] = $j12b->jopsi12b;
            $data['datajopsi12b'][] = $j12b->count;
            if ($j12b->jopsi12b == 'Sangat Penting') {
                $test12b[] = $j12b->count * 4;
            }
            if ($j12b->jopsi12b == 'Penting') {
                $test12b[] = $j12b->count * 3;
            }
            if ($j12b->jopsi12b == 'Kurang Penting') {
                $test12b[] = $j12b->count * 2;
            }
            if ($j12b->jopsi12b == 'Tidak Penting') {
                $test12b[] = $j12b->count * 1;
            }
        }
        $testsum12b = array_sum($test12b);

        $data['jopsi13a'] = $this->db->query("select Jopsi13a as jopsi13a,COUNT(jopsi13a) as count from jawaban group by jopsi13a")->result();
        $jopsi13a = $data['jopsi13a'];

        foreach ($jopsi13a as $j13a) {
            $data['labeljopsi13a'][] = $j13a->jopsi13a;
            $data['datajopsi13a'][] = $j13a->count;
            if ($j13a->jopsi13a == 'Sangat Setuju') {
                $test13[] = $j13a->count * 4;
            }

            if ($j13a->jopsi13a == 'Setuju') {
                $test13[] = $j13a->count * 3;
            }

            if ($j13a->jopsi13a == 'Kurang Setuju') {
                $test13[] = $j13a->count * 2;
            }

            if ($j13a->jopsi13a == 'Tidak Setuju') {
                $test13[] = $j13a->count * 1;
            }
        }
        $testsum13 = array_sum($test13);

        $data['jopsi13b'] = $this->db->query("select Jopsi13b as jopsi13b,COUNT(jopsi13b) as count from jawaban group by jopsi13b")->result();
        $jopsi13b = $data['jopsi13b'];

        foreach ($jopsi13b as $j13b) {
            $data['labeljopsi13b'][] = $j13b->jopsi13b;
            $data['datajopsi13b'][] = $j13b->count;
            if ($j13b->jopsi13b == 'Sangat Penting') {
                $test13b[] = $j13b->count * 4;
            }
            if ($j13b->jopsi13b == 'Penting') {
                $test13b[] = $j13b->count * 3;
            }
            if ($j13b->jopsi13b == 'Kurang Penting') {
                $test13b[] = $j13b->count * 2;
            }
            if ($j13b->jopsi13b == 'Tidak Penting') {
                $test13b[] = $j13b->count * 1;
            }
        }
        $testsum13b = array_sum($test13b);

        $data['jopsi14a'] = $this->db->query("select Jopsi14a as jopsi14a,COUNT(jopsi14a) as count from jawaban group by jopsi14a")->result();
        $jopsi14a = $data['jopsi14a'];

        foreach ($jopsi14a as $j14a) {
            $data['labeljopsi14a'][] = $j14a->jopsi14a;
            $data['datajopsi14a'][] = $j14a->count;
            if ($j14a->jopsi14a == 'Sangat Setuju') {
                $test14[] = $j14a->count * 4;
            }

            if ($j14a->jopsi14a == 'Setuju') {
                $test14[] = $j14a->count * 3;
            }

            if ($j14a->jopsi14a == 'Kurang Setuju') {
                $test14[] = $j14a->count * 2;
            }

            if ($j14a->jopsi14a == 'Tidak Setuju') {
                $test14[] = $j14a->count * 1;
            }
        }

        $testsum14 = array_sum($test14);

        $data['jopsi14b'] = $this->db->query("select Jopsi14b as jopsi14b,COUNT(jopsi14b) as count from jawaban group by jopsi14b")->result();
        $jopsi14b = $data['jopsi14b'];

        foreach ($jopsi14b as $j14b) {
            $data['labeljopsi14b'][] = $j14b->jopsi14b;
            $data['datajopsi14b'][] = $j14b->count;
            if ($j14b->jopsi14b == 'Sangat Penting') {
                $test14b[] = $j14b->count * 4;
            }
            if ($j14b->jopsi14b == 'Penting') {
                $test14b[] = $j14b->count * 3;
            }
            if ($j14b->jopsi14b == 'Kurang Penting') {
                $test14b[] = $j14b->count * 2;
            }
            if ($j14b->jopsi14b == 'Tidak Penting') {
                $test14b[] = $j14b->count * 1;
            }
        }
        $testsum14b = array_sum($test14b);

        $data['jopsi15a'] = $this->db->query("select Jopsi15a as jopsi15a,COUNT(jopsi15a) as count from jawaban group by jopsi15a")->result();
        $jopsi15a = $data['jopsi15a'];

        foreach ($jopsi15a as $j15a) {
            $data['labeljopsi15a'][] = $j15a->jopsi15a;
            $data['datajopsi15a'][] = $j15a->count;
            if ($j15a->jopsi15a == 'Sangat Setuju') {
                $test15[] = $j15a->count * 4;
            }

            if ($j15a->jopsi15a == 'Setuju') {
                $test15[] = $j15a->count * 3;
            }

            if ($j15a->jopsi15a == 'Kurang Setuju') {
                $test15[] = $j15a->count * 2;
            }

            if ($j15a->jopsi15a == 'Tidak Setuju') {
                $test15[] = $j15a->count * 1;
            }
        }

        $testsum15 = array_sum($test15);

        $data['jopsi15b'] = $this->db->query("select Jopsi15b as jopsi15b,COUNT(jopsi15b) as count from jawaban group by jopsi15b")->result();
        $jopsi15b = $data['jopsi15b'];

        foreach ($jopsi15b as $j15b) {
            $data['labeljopsi15b'][] = $j15b->jopsi15b;
            $data['datajopsi15b'][] = $j15b->count;
            if ($j15b->jopsi15b == 'Sangat Penting') {
                $test15b[] = $j15b->count * 4;
            }
            if ($j15b->jopsi15b == 'Penting') {
                $test15b[] = $j15b->count * 3;
            }
            if ($j15b->jopsi15b == 'Kurang Penting') {
                $test15b[] = $j15b->count * 2;
            }
            if ($j15b->jopsi15b == 'Tidak Penting') {
                $test15b[] = $j15b->count * 1;
            }
        }
        $testsum15b = array_sum($test15b);

        $data['jopsi16a'] = $this->db->query("select Jopsi16a as jopsi16a,COUNT(jopsi16a) as count from jawaban group by jopsi16a")->result();
        $jopsi16a = $data['jopsi16a'];

        foreach ($jopsi16a as $j16a) {
            $data['labeljopsi16a'][] = $j16a->jopsi16a;
            $data['datajopsi16a'][] = $j16a->count;
            if ($j16a->jopsi16a == 'Sangat Setuju') {
                $test16[] = $j16a->count * 4;
            }

            if ($j16a->jopsi16a == 'Setuju') {
                $test16[] = $j16a->count * 3;
            }

            if ($j16a->jopsi16a == 'Kurang Setuju') {
                $test16[] = $j16a->count * 2;
            }

            if ($j16a->jopsi16a == 'Tidak Setuju') {
                $test16[] = $j16a->count * 1;
            }
        }
        $testsum16 = array_sum($test16);

        $data['jopsi16b'] = $this->db->query("select Jopsi16b as jopsi16b,COUNT(jopsi16b) as count from jawaban group by jopsi16b")->result();
        $jopsi16b = $data['jopsi16b'];

        foreach ($jopsi16b as $j16b) {
            $data['labeljopsi16b'][] = $j16b->jopsi16b;
            $data['datajopsi16b'][] = $j16b->count;
            if ($j16b->jopsi16b == 'Sangat Penting') {
                $test16b[] = $j16b->count * 4;
            }
            if ($j16b->jopsi16b == 'Penting') {
                $test16b[] = $j16b->count * 3;
            }
            if ($j16b->jopsi16b == 'Kurang Penting') {
                $test16b[] = $j16b->count * 2;
            }
            if ($j16b->jopsi16b == 'Tidak Penting') {
                $test16b[] = $j16b->count * 1;
            }
        }
        $testsum16b = array_sum($test16b);

        $data['jopsi17a'] = $this->db->query("select Jopsi17a as jopsi17a,COUNT(jopsi17a) as count from jawaban group by jopsi17a")->result();
        $jopsi17a = $data['jopsi17a'];

        foreach ($jopsi17a as $j17a) {
            $data['labeljopsi17a'][] = $j17a->jopsi17a;
            $data['datajopsi17a'][] = $j17a->count;
            if ($j17a->jopsi17a == 'Sangat Setuju') {
                $test17[] = $j17a->count * 4;
            }

            if ($j17a->jopsi17a == 'Setuju') {
                $test17[] = $j17a->count * 3;
            }

            if ($j17a->jopsi17a == 'Kurang Setuju') {
                $test17[] = $j17a->count * 2;
            }

            if ($j17a->jopsi17a == 'Tidak Setuju') {
                $test17[] = $j17a->count * 1;
            }
        }

        $testsum17 = array_sum($test17);

        $data['jopsi17b'] = $this->db->query("select Jopsi17b as jopsi17b,COUNT(jopsi17b) as count from jawaban group by jopsi17b")->result();
        $jopsi17b = $data['jopsi17b'];

        foreach ($jopsi17b as $j17b) {
            $data['labeljopsi17b'][] = $j17b->jopsi17b;
            $data['datajopsi17b'][] = $j17b->count;
            if ($j17b->jopsi17b == 'Sangat Penting') {
                $test17b[] = $j17b->count * 4;
            }
            if ($j17b->jopsi17b == 'Penting') {
                $test17b[] = $j17b->count * 3;
            }
            if ($j17b->jopsi17b == 'Kurang Penting') {
                $test17b[] = $j17b->count * 2;
            }
            if ($j17b->jopsi17b == 'Tidak Penting') {
                $test17b[] = $j17b->count * 1;
            }
        }
        $testsum17b = array_sum($test17b);

        $data['jopsi18a'] = $this->db->query("select Jopsi18a as jopsi18a,COUNT(jopsi18a) as count from jawaban group by jopsi18a")->result();
        $jopsi18a = $data['jopsi18a'];

        foreach ($jopsi18a as $j18a) {
            $data['labeljopsi18a'][] = $j18a->jopsi18a;
            $data['datajopsi18a'][] = $j18a->count;
            if ($j18a->jopsi18a == 'Sangat Setuju') {
                $test18[] = $j18a->count * 4;
            }

            if ($j18a->jopsi18a == 'Setuju') {
                $test18[] = $j18a->count * 3;
            }

            if ($j18a->jopsi18a == 'Kurang Setuju') {
                $test18[] = $j18a->count * 2;
            }

            if ($j18a->jopsi18a == 'Tidak Setuju') {
                $test18[] = $j18a->count * 1;
            }
        }

        $testsum18 = array_sum($test18);
        $data['jopsi18b'] = $this->db->query("select Jopsi18b as jopsi18b,COUNT(jopsi18b) as count from jawaban group by jopsi18b")->result();
        $jopsi18b = $data['jopsi18b'];

        foreach ($jopsi18b as $j18b) {
            $data['labeljopsi18b'][] = $j18b->jopsi18b;
            $data['datajopsi18b'][] = $j18b->count;
            if ($j18b->jopsi18b == 'Sangat Penting') {
                $test18b[] = $j18b->count * 4;
            }
            if ($j18b->jopsi18b == 'Penting') {
                $test18b[] = $j18b->count * 3;
            }
            if ($j18b->jopsi18b == 'Kurang Penting') {
                $test18b[] = $j18b->count * 2;
            }
            if ($j18b->jopsi18b == 'Tidak Penting') {
                $test18b[] = $j18b->count * 1;
            }
        }
        $testsum18b = array_sum($test18b);

        $data['jopsi19a'] = $this->db->query("select Jopsi19a as jopsi19a,COUNT(jopsi19a) as count from jawaban group by jopsi19a")->result();
        $jopsi19a = $data['jopsi19a'];

        foreach ($jopsi19a as $j19a) {
            $data['labeljopsi19a'][] = $j19a->jopsi19a;
            $data['datajopsi19a'][] = $j19a->count;
            if ($j19a->jopsi19a == 'Sangat Setuju') {
                $test19[] = $j19a->count * 4;
            }

            if ($j19a->jopsi19a == 'Setuju') {
                $test19[] = $j19a->count * 3;
            }

            if ($j19a->jopsi19a == 'Kurang Setuju') {
                $test19[] = $j19a->count * 2;
            }

            if ($j19a->jopsi19a == 'Tidak Setuju') {
                $test19[] = $j19a->count * 1;
            }
        }

        $testsum19 = array_sum($test19);
        $data['jopsi19b'] = $this->db->query("select Jopsi19b as jopsi19b,COUNT(jopsi19b) as count from jawaban group by jopsi19b")->result();
        $jopsi19b = $data['jopsi19b'];

        foreach ($jopsi19b as $j19b) {
            $data['labeljopsi19b'][] = $j19b->jopsi19b;
            $data['datajopsi19b'][] = $j19b->count;
            if ($j19b->jopsi19b == 'Sangat Penting') {
                $test19b[] = $j19b->count * 4;
            }
            if ($j19b->jopsi19b == 'Penting') {
                $test19b[] = $j19b->count * 3;
            }
            if ($j19b->jopsi19b == 'Kurang Penting') {
                $test19b[] = $j19b->count * 2;
            }
            if ($j19b->jopsi19b == 'Tidak Penting') {
                $test19b[] = $j19b->count * 1;
            }
        }
        $testsum19b = array_sum($test19b);

        $data['jopsi20a'] = $this->db->query("select Jopsi20a as jopsi20a,COUNT(jopsi20a) as count from jawaban group by jopsi20a")->result();
        $jopsi20a = $data['jopsi20a'];

        foreach ($jopsi20a as $j20a) {
            $data['labeljopsi20a'][] = $j20a->jopsi20a;
            $data['datajopsi20a'][] = $j20a->count;
            if ($j20a->jopsi20a == 'Sangat Setuju') {
                $test20[] = $j20a->count * 4;
            }

            if ($j20a->jopsi20a == 'Setuju') {
                $test20[] = $j20a->count * 3;
            }

            if ($j20a->jopsi20a == 'Kurang Setuju') {
                $test20[] = $j20a->count * 2;
            }

            if ($j20a->jopsi20a == 'Tidak Setuju') {
                $test20[] = $j20a->count * 1;
            }
        }

        $testsum20 = array_sum($test20);

        $data['jopsi20b'] = $this->db->query("select Jopsi20b as jopsi20b,COUNT(jopsi20b) as count from jawaban group by jopsi20b")->result();
        $jopsi20b = $data['jopsi20b'];

        foreach ($jopsi20b as $j20b) {
            $data['labeljopsi20b'][] = $j20b->jopsi20b;
            $data['datajopsi20b'][] = $j20b->count;
            if ($j20b->jopsi20b == 'Sangat Penting') {
                $test20b[] = $j20b->count * 4;
            }
            if ($j20b->jopsi20b == 'Penting') {
                $test20b[] = $j20b->count * 3;
            }
            if ($j20b->jopsi20b == 'Kurang Penting') {
                $test20b[] = $j20b->count * 2;
            }
            if ($j20b->jopsi20b == 'Tidak Penting') {
                $test20b[] = $j20b->count * 1;
            }
        }
        $testsum20b = array_sum($test20b);

        $arraysum = array(
            0 => "$testsum", 1 => "$testsum2", 2 => "$testsum3", 3 => "$testsum4", 4 => "$testsum5", 5 => "$testsum6", 6 => "$testsum7",
            7 => "$testsum8", 8 => "$testsum9", 9 => "$testsum10", 10 => "$testsum11", 11 => "$testsum12", 12 => "$testsum13", 13 => "$testsum14", 14 => "$testsum15", 15 => "$testsum16",
            16 => "$testsum17", 17 => "$testsum18", 18 => "$testsum19", 19 => "$testsum20",
        );
        $data['Total'] = $arraysum;
        $arraysum2 = array(
            0 => "$testsum1b", 1 => "$testsum2b", 2 => "$testsum3b", 3 => "$testsum4b", 4 => "$testsum5b", 5 => "$testsum6b", 6 => "$testsum7b",
            7 => "0", 8 => "0", 9 => "$testsum10b", 10 => "$testsum11b", 11 => "$testsum12b", 12 => "$testsum13b", 13 => "$testsum14b", 14 => "$testsum15b", 15 => "$testsum16b",
            16 => "$testsum17b", 17 => "$testsum18b", 18 => "$testsum19b", 19 => "$testsum20b",
        );
        $data['Total2'] = $arraysum2;

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
        $data["data_hujan"] = $this->CSVModel->getAll();
        $this->load->view("list_data", $data);
    }

    // public function load_csv(){
    //     $this->load->database();

    //     $data['csv'] = $this->db->query("select CSV as csv,COUNT(csv) as count from data_hujan group by csv")->result();
    //     $csv = $data['csv'];
    //     $data = [];

    //     foreach($csv as $c){
    //         $data['csv'][]=$c->csv;
    //         $data['datacsv'][]=$c->count;
    //     }
    // $data['csv_data'] = json_encode($data);
    // $this->load->view('list_data',$data);
    // }

    public function upload_data()
    {
        $data_hujan = $this->CSVModel;
        $validation = $this->form_validation;
        $validation->set_rules($data_hujan->rules());

        if ($validation->run()) {
            $data_hujan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("upload_data");
    }

    public function edit_data($id = null)
    {
        $data_hujan = $this->CSVModel;
        $validation = $this->form_validation;
        $validation->set_rules($data_hujan->rules());

        if ($validation->run()) {
            $data_hujan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/list_data'));
        }

        $data["data_hujan"] = $data_hujan->getById($id);
        if (!$data["data_hujan"]) show_404();
        $this->load->view("edit_data", $data);
    }

    public function detail_data($id = null)
    {
        $data_hujan = $this->CSVModel;
        $validation = $this->form_validation;
        $validation->set_rules($data_hujan->rules());
        $data["data_hujan"] = $this->CSVModel->getAll();
        $data["data_hujan"] = $data_hujan->getById($id);

        $this->load->view("detail_data", $data);
    }

    public function delete_data($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->CSVModel->delete($id)) {
            redirect(site_url('admin/list_data'));
        }
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
        $data = array();
        // $data['kritik'] = $this->modelupload->getRows();
        if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
            // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
            $upload = $this->modelupload->upload();

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                $this->modelupload->save($upload);

                redirect(base_url() . 'admin/kritik'); // Redirect kembali ke halaman awal / halaman view data
            } else { // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }
        $this->load->view('kritik', $data);
    }

    // public function tambah_kritik()
    // {
    //     $data = array();
    //     if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
    //         // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
    //         $upload = $this->modelupload->upload();

    //         if ($upload['result'] == "success") { // Jika proses upload sukses
    //             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
    //             $this->modelupload->save($upload);

    //             redirect(base_url() . 'admin/kritik'); // Redirect kembali ke halaman awal / halaman view data
    //         } else { // Jika proses upload gagal
    //             $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
    //             redirect(base_url() . 'admin/skm');
    //         }
    //     }
    // }

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

    public function export_hasil_survey()
    {
        $this->load->library('mypdf.php');
        $data['data_responden'] = $this->db->query('select * from data_responden')->result();
        $data['data_responden'] = $this->modelresponden->get_data('data_responden')->result();
        $this->mypdf->generate_hasil_survey('export_hasil_survey', $data);
    }

    public function export_hasil_pengaduan()
    {
        $this->load->library('mypdf.php');
        $data['kritik'] = $this->db->query('select * from kritik')->result();
        $data['kritik'] = $this->modelresponden->get_data('kritik')->result();
        $this->mypdf->generate_hasil_pengaduan('export_hasil_pengaduan', $data);
    }

    public function export_detail_responden($id)
    {
        $this->load->library('mypdf.php');
        $data['data_responden'] = $this->db->query("select * from data_responden where ID=$id")->result();
        $data['jawaban'] = $this->db->query("select * from jawaban where ID=$id")->result();
        $this->mypdf->generate_detail_responden('export_detail_responden', $data);
    }
    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->modelupload->download($id);
        $file = 'upload/kritik/' . $fileinfo['File'];
        force_download($file, NULL);
    }

    public function excel()
    {
        $data['umur'] = $this->db->query("select Umur as umur,COUNT(umur) as count from data_responden group by umur")->result();
        $umur = $data['umur'];

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPexcel();

        $object->getProperties()->setCreator("Team Turu");
        $object->getProperties()->setLastModifiedBy("Team Turu");
        $object->getProperties()->setTitle("Statistika_hasil");

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'Dibawah 15 Tahun');
        $object->getActiveSheet()->setCellValue('C1', '16 Tahun - 25 Tahun');
        $object->getActiveSheet()->setCellValue('D1', '26 Tahun - 35 Tahun');
        $object->getActiveSheet()->setCellValue('E1', '36 Tahun - 45 Tahun');
        $object->getActiveSheet()->setCellValue('F1', 'Diatas 46 Tahun');

        $baris = 2;
        $no = 1;

        foreach ($umur as $u) {

            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue($baris, $u->count);
            $baris++;
        }
        $filename = "Statistika_hasil" . '.xlsx';

        $object->getActiveSheet()->setTitle("Statistika_hasil");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}
