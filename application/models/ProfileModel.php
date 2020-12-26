<?php defined('BASEPATH') or exit('No direct script access allowed');

class ProfileModel extends CI_Model
{
    private $_table = "user";

    public $Id_user;
    public $Username;
    public $Password;
    public $Level;

    public function rules()
    {
        return [
            [
                'field' => 'Password',
                'label' => 'Password',
                'rules' => 'required'
            ],

            [
                'field' => 'Username',
                'label' => 'Username',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($Id_user)
    {
        return $this->db->get_where($this->_table, ["Id_user" => $Id_user])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->Id_user = $post["Id_user"];
        $this->Username = $post["Username"];
        $this->Password = md5($post["Password"]);
        return $this->db->update($this->_table, $this, array('Id_user' => $post['Id_user']));
    }
}