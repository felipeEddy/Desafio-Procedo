<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getAllUsers(){
        $result = $this->db->query("SELECT * FROM tbl_client");
        return $result->result();
    }
    
    public function getInfoUserById($id){
        $result = $this->db->query("SELECT * FROM tbl_client WHERE id_client = '$id'");
        return $result->result();
    }

    public function updateClient($id){
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $cnpj = $this->input->post('cnpj');
        $telefone = $this->input->post('telefone');
        $origem = $this->input->post('origem');
        $estado = $this->input->post('estado');
        $cidade = $this->input->post('cidade');
        $situacao = $this->input->post('situacao');
        $observacao = $this->input->post('observacao');

        $this->db->query("UPDATE tbl_client SET nome = '$nome', email = '$email', cnpj = '$cnpj', telefone = '$telefone', origem = '$origem', estado = '$estado', cidade = '$cidade', situacao = '$situacao', observacao = '$observacao' WHERE id_client = '$id'");
        
    }

}

?>