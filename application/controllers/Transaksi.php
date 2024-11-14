<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->model('Barang_model');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $data['transaksi'] = $this->Transaksi_model->get_all_transaksi();
        $this->load->view('transaksi/index', $data);
    }

    public function tambah() {
        $data['barang'] = $this->Barang_model->get_all_barang();
        if ($this->input->post()) {
            $data_transaksi = [
                'kode_transaksi' => $this->input->post('kode_transaksi'),
                'kode_barang' => $this->input->post('kode_barang'),
                'jumlah_beli' => $this->input->post('jumlah_beli'),
                'total_bayar' => $this->input->post('total_bayar')
            ];
            $this->Transaksi_model->insert_transaksi($data_transaksi);
            redirect('transaksi');
        }
        $this->load->view('transaksi/tambah', $data);
    }
}
?>
