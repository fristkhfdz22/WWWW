<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function get_all_barang() {
        return $this->db->get('barang')->result_array();
    }

    public function insert_barang($data) {
        $this->db->insert('barang', $data);
    }

    public function get_barang($id) {
        return $this->db->get_where('barang', ['id' => $id])->row_array();
    }

    public function update_barang($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('barang', $data);
    }

    public function delete_barang($id) {
        $this->db->delete('barang', ['id' => $id]);
    }
}
?>
