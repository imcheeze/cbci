<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    public function index() {
        $this->load->view('template/header');
        $this->load->view('v_daftar');
        $this->load->view('template/footer');
    }

    public function tambah() {
        $data = [
            "nama" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "password" => password_hash ($this->input->post('password', true), PASSWORD_DEFAULT)
        ];
        $this->db->insert('tb_user', $data);
        $this->session->set_flashdata('message', '<h2>Berhasil Daftar</h2>');
        redirect('Login');
    }
}