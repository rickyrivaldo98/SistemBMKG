<?php
class modellayanan extends CI_Model
{


    private $_table = "pemohon1";

    public $idpemohon;
    // public $suratpengantar;
    // public $proposal;
    // public $suratpernyataan;
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

    public function get_id()
    {
        // where LEFT(idpemohon,4)=(select date_format(CURRENT_DATE,'%y%m'))
        $id = $this->db->query("SELECT MAX(RIGHT(idpemohon,4)) as max from pemohon");
        $kd = '';

        if ($id->num_rows() > 0) {
            foreach ($id->result() as $hasil) {
                $tmp = ((int) $hasil->max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        $kd = "BMKG" . $kd;
        $kd = date('ym') . $kd;
        return $kd;
    }
    public function get_id1()
    {
        // where LEFT(idpemohon,4)=(select date_format(CURRENT_DATE,'%y%m'))
        $id = $this->db->query("SELECT MAX(RIGHT(idpemohon,4)) as max from pemohon1");
        $kd = '';

        if ($id->num_rows() > 0) {
            foreach ($id->result() as $hasil) {
                $tmp = ((int) $hasil->max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        $kd = "BMKGU" . $kd;
        $kd = date('ym') . $kd;
        return $kd;
    }
    public function get_id2()
    {
        // where LEFT(idpemohon,4)=(select date_format(CURRENT_DATE,'%y%m'))
        $id = $this->db->query("SELECT (MAX(nolayanan)) as max from pelayanan");
        $kd = '';

        if ($id->num_rows() > 0) {
            foreach ($id->result() as $hasil) {
                $tmp = ((int) $hasil->max) + 1;
                $kd = $tmp;
            }
        return $kd;
    }
}


    public function tambah()
    {
        $post = $this->input->post();
        $this->idpemohon = html_escape($post["idpemohon"]);
        $this->nama = html_escape($post["nama"]);
        $this->alamat = html_escape($post["alamat"]);
        $this->email = html_escape($post["email"]);
        $this->instansi = html_escape($post["instansi"]);
        $this->nohp = html_escape($post["nohp"]);
        $this->informasi = html_escape($post["informasi"]);
        $this->status = 'no';
        $this->db->insert('pemohon', $this);

        $id = $this->idpemohon;
        $nama = $this->nama;
        $alamat = $this->alamat;
        $email = $this->email;
        $instansi = $this->instansi;
        $nohp = $this->nohp;

        $data = array(
                    'idpemohon' => $id,
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'nohp' => $nohp,
                    'instansi' => $instansi,
                    'email' => $email
                
                );
        
        $this->db->insert('pemohon2', $data);
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idpemohon = html_escape($post["idpemohon"]);
        $this->nama = html_escape($post["nama"]);
        $this->alamat = html_escape($post["alamat"]);
        $this->email = html_escape($post["email"]);
        $this->instansi = html_escape($post["instansi"]);
        $this->nohp = html_escape($post["nohp"]);
        $this->informasi = html_escape($post["informasi"]);
        $this->status = 'no';


        $this->suratpengantar = $this->_uploadPDF();
        return $this->db->insert($this->_table, $this);
    }



    public function _uploadPDF()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = "suratpengantar-" . $this->idpemohon;
        // $config['encrypt_name']            = true;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        // if ($this->upload->do_upload('CSV')) {
        //     return $this->upload->data("file_name");
        // }
        if (!$this->upload->do_upload('PDF')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('page/upload_data', 'refresh');
        } else {
            return $this->upload->data("file_name");
        }
        // return "data_kosong.csv";
    }

    public function save1()
    {
        $post = $this->input->post();
        $this->idpemohon = html_escape($post["idpemohon"]);
        $this->nama = html_escape($post["nama"]);
        $this->alamat = html_escape($post["alamat"]);
        $this->email = html_escape($post["email"]);
        $this->instansi = html_escape($post["instansi"]);
        $this->nohp = html_escape($post["nohp"]);
        $this->informasi = html_escape($post["informasi"]);
        $this->status = 'no';

        $this->suratpernyataan = $this->_uploadPDF2();
        $this->proposal = $this->_uploadPDF3();
        $this->suratpengantar = $this->_uploadPDF1();
        return $this->db->insert($this->_table, $this);
    }



    public function _uploadPDF1()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = "suratpengantar-" . $this->idpemohon;
        // $config['encrypt_name']            = true;
        // $config['overwrite']            = true;
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
            $nama = $this->upload->data('file_name');
            return $nama;
        }
        // return "data_kosong.csv";
    }
    public function _uploadPDF2()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = "suratpernyataan-" . $this->idpemohon;
        // $config['encrypt_name']            = true;
        // $config['overwrite']            = true;
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
            $nama2 = $this->upload->data('file_name');
            return $nama2;
        }
        // return "data_kosong.csv";
    }

    public function _uploadPDF3()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = "proposal-" . $this->idpemohon;
        // $config['encrypt_name']            = true;
        // $config['overwrite']            = true;
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
            $nama3 = $this->upload->data('file_name');
            return $nama3;
        }
        // return "data_kosong.csv";
    }
}
