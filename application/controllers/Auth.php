<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pengguna_model');
    }

    public function login() {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $pengguna = $this->Pengguna_model->login($username, $password);

            if ($pengguna) {
                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('username', $pengguna['username']);
                redirect('barang');
            } else {
                $this->session->set_flashdata('error', 'Username atau Password salah');
                redirect('auth/login');
            }
        }

        $this->load->view('auth/login');
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        redirect('auth/login');
    }
}
?>
