<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Model extends CI_Model
{
    public function cek_login($username)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query;
    }

    public function cek_data_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query;
    }
}
