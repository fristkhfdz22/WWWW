<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

    public function get_all_transaksi() {
        $this->db->join('barang', 'barang.kode_barang = transaksi.kode_barang');
        return $this->db->get('transaksi')->result_array();
    }

    public function insert_transaksi($data) {
        $this->db->insert('transaksi', $data);
    }
}
?>
        