<?php defined('BASEPATH') or exit('No direct script access allowed');

class CSVModel extends CI_Model
{
    private $_table = "data_hujan";

    public $id;
    public $id_data;
    public $Bulan;
    public $Tahun;
    public $CSV;

    public function rules()
    {
        return [
            [
                'field' => 'Bulan',
                'label' => 'Bulan',
                'rules' => 'required'
            ],

            [
                'field' => 'Tahun',
                'label' => 'Tahun',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getByIdData($id)
    {
        return $this->db->get_where($this->_table, ["id_data" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_data = uniqid();
        $this->Bulan = $post["Bulan"];
        $this->Tahun = $post["Tahun"];
        $this->CSV = $this->_uploadCSV();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->id_data = $post["id_data"];
        $this->Bulan = $post["Bulan"];
        $this->Tahun = $post["Tahun"];
        if (!empty($_FILES["CSV"]["name"])) {
            $this->CSV = $this->_uploadCSV();
        } else {
            $this->CSV = $post["old_data"];
        }
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteCSV($id);
        return $this->db->delete($this->_table, array("id_data" => $id));
    }

    public function _uploadCSV()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'csv';
        $config['file_name']            = $this->id_data;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        // if ($this->upload->do_upload('CSV')) {
        //     return $this->upload->data("file_name");
        // }
        if (!$this->upload->do_upload('CSV')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('admin/upload_data', 'refresh');
        } else {
            return $this->upload->data("file_name");
        }

        // return "data_kosong.csv";
    }

    public function _deleteCSV($id)
    {
        $data_hujan = $this->getByIdData($id);
        if ($data_hujan->CSV != "default.csv") {
            $filename = explode(".", $data_hujan->CSV)[0];
            return array_map('unlink', glob(FCPATH . "upload/data/$filename.*"));
        }
    }
}
