<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class m_data extends CI_Model {

    public function getData() {
        return $this->db->get('tb_jnslomba')->result_array();
    }

    public function getDataById($id) {
        return $this->db->get_where('tb_jnslomba', ['id_lomba' => $id])->row_array();
    }
}