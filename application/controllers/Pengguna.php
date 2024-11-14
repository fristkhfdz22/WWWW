<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pengguna_model');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $data['pengguna'] = $this->Pengguna_model->get_all_pengguna();
        $this->load->view('pengguna/index', $data);
    }
}
?>
