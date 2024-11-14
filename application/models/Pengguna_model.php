<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

    public function login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('kata_sandi', $password);
        return $this->db->get('pengguna')->row_array();
    }

    public function get_all_pengguna() {
        return $this->db->get('pengguna')->result_array();
    }
}
?>
