<?php
class modellayanan extends CI_Model
{


    private $_table = "pemohon1";

    public $idpemohon;
    public $suratpengantar;
    public $proposal;
    public $suratpernyataan;
    public $nama;
    public $alamat;
    public $nohp;
    public $instansi;
    public $email;
    public $informasi;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ]
        ];
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }


    public function get_pencarian($keyword)
    {
        $keyword = array(
            'idpemohon' => $keyword
        );

        $this->db->select('*');
        $this->db->from('pemohon');
        $this->db->where($keyword);
        return $this->db->get()->result();
    }

    function get_data($table)
    {
        return $this->db->get($table);
    }

    // fungsi untuk menginput data ke database
    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    // fungsi untuk mengedit data
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    // fungsi untuk mengupdate atau mengubah data di database
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // fungsi untuk menghapus data dari database
    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }

    function delete_all($table)
    {
        $this->db->empty_table($table);
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function insert_multiple($data, $table)
    {
        $this->db->insert_batch($table, $data);
    }


    public function save()
    {
        $post = $this->input->post();
        $this->idpemohon = $post["idpemohon"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->email = $post["email"];
        $this->instansi = $post["instansi"];

        $this->nohp = $post["nohp"];
        $this->informasi = $post["informasi"];


        $this->suratpengantar = $this->_uploadPDF();
        return $this->db->insert($this->_table, $this);
    }



    public function _uploadPDF()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = $this->idpemohon;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        // if ($this->upload->do_upload('CSV')) {
        //     return $this->upload->data("file_name");
        // }
        if (!$this->upload->do_upload('PDF')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('page/upload_data1', 'refresh');
        } else {
            return $this->upload->data("file_name");
        }

        // return "data_kosong.csv";
    }



    public function save1()
    {
        $post = $this->input->post();
        $this->idpemohon = $post["idpemohon"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->email = $post["email"];
        $this->instansi = $post["instansi"];

        $this->nohp = $post["nohp"];
        $this->informasi = $post["informasi"];


        $this->suratpengantar = $this->uploadPDF1();
        $this->proposal = $this->uploadPDF2();
        $this->suratpernyataan = $this->uploadPDF3();



        return $this->db->insert($this->_table, $this);
    }
    public function uploadPDF1()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = $this->nama;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        // if ($this->upload->do_upload('CSV')) {
        //     return $this->upload->data("file_name");
        // }
        if (!$this->upload->do_upload('PDF1')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('page/upload_data1', 'refresh');
        } else {
            return $this->upload->data("file_name");
        }

        // return "data_kosong.csv";
    }
    public function uploadPDF2()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = $this->alamat;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        // if ($this->upload->do_upload('CSV')) {
        //     return $this->upload->data("file_name");
        // }
        if (!$this->upload->do_upload('PDF2')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('page/upload_data1', 'refresh');
        } else {
            return $this->upload->data("file_name");
        }

        // return "data_kosong.csv";
    }
    public function uploadPDF3()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = $this->nohp;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        // if ($this->upload->do_upload('CSV')) {
        //     return $this->upload->data("file_name");
        // }
        if (!$this->upload->do_upload('PDF3')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('page/upload_data1', 'refresh');
        } else {
            return $this->upload->data("file_name");
        }

        // return "data_kosong.csv";
    }
}
