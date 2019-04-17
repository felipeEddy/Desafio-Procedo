<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	function __construct()  {
        parent::__construct();
        $this->load->model('clientModel');
	}
    
    public function index(){
        $clients = $this->clientModel->getAllUsers();
        $data['clients'] = $clients;

        $this->load->view('client-list', $data);

    }

    public function deleteClient($id){
        $this->db->query("DELETE FROM tbl_client WHERE id_client = '$id'");
        redirect(base_url('client-list'));
    }

    public function editClient($id){
        $data['client'] = $this->clientModel->getInfoUserById($id);
        $this->load->view('updateClient', $data);

    }

    public function updateClient($id){
        $this->clientModel->updateClient($id);
        redirect(base_url('Cliente/editClient/' . $id));
        
    }
}
