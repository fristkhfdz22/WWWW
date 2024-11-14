<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->model('Transaksi_model');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $data['barang'] = $this->Barang_model->get_all_barang();
        $this->load->view('barang/index', $data);
    }

    public function tambah() {
        if ($this->input->post()) {
            $data = [
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'merk' => $this->input->post('merk'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok')
            ];
            $this->Barang_model->insert_barang($data);
            redirect('barang');
        }
        $this->load->view('barang/tambah');
    }

    public function edit($id) {
        $data['barang'] = $this->Barang_model->get_barang($id);
        if ($this->input->post()) {
            $update = [
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'merk' => $this->input->post('merk'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok')
            ];
            $this->Barang_model->update_barang($id, $update);
            redirect('barang');
        }
        $this->load->view('barang/edit', $data);
    }

    public function hapus($id) {
        $this->Barang_model->delete_barang($id);
        redirect('barang');
    }
}
?>
