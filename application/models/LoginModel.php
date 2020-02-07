<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LoginModel extends CI_Model {
    
    public function get($Username){
        $this->db->where('Username', $Username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
}