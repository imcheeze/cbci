<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('template/header');
        $this->load->view('v_login');
        $this->load->view('template/footer');
    }

    public function validasi() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        if($user) {
            if(password_verify($password, $user ['password'])) {
                $data=['username' => $user['username']];

                $this->session->set_userdata($data);
                redirect('Beranda');
            } else {
                $this->session->set_flashdata('message', '<h2>Password Salah</h2>');
                redirect('Login');
            }
            } else {
                $this->session->set_flashdata('message', '<h2>Username Salah</h2>');
                redirect('Login');
            }
        }

        public function logut() {
            $this->session->unset_userdata('username');
            $this->session->set_flashdata('message', '<h2>Logut Berhasil</h2>');
        }

    }

?>