<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pendaftaran extends CI_Model {

    public function getEvent() {
        return $this->db->get('pendaftar')->result_array();
    }
    public function tmbhpndftrn() {
        $data = [
        "id_lomba" => $this->input->post('id_lomba', true),
        "nama_pendaftar" => $this->input->post('nama_pendaftar', true),
        "kelas" => $this->input->post('kelas', true),
        "no_hp" => $this->input->post('no_hp', true),
        "tgl_daftar" => $this->input->post('tgl_daftar', true)
        ];
        $this->db->insert('pendaftar', $data);
    }
    public function getPendaftarById($id) {
        return $this->db->get_where('pendaftar', ['id' => $id])->row_array();
    }
}
