<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

	function __construct()  {
		parent::__construct();
	}
	
	public function index() {
		$this->load->view('index');
	}

	public function validation() {
        $post = self::clearForm($this->input->post()); //SANETIZAÇÃO
        $result = self::verify($post);
        if ($result) :
            redirect(base_url('client-list'));
        else:
            redirect(base_url());
        endif;
	}

	public function verify($post = array()) {
		$this->load->model('adminloginModel');
		$result = $this->adminloginModel->validation($post['email'], $post['password']);
		return $result;
    }
    
    public function newAccount() {
		$this->load->view('new-account');
		
    }

    public function addUser() {
        $validEmail = self::validaEmail($this->input->post('email'));
        if ($validEmail) :
            $this->load->model('adminloginModel');
            $verEmail = $this->adminloginModel->verifyEmail($this->input->post('email'));

            if ($verEmail) :
                $this->adminloginModel->addUser($this->input->post('email'),$this->input->post('password'));
                redirect(base_url('home'));
            endif;


        else:
            $data["error"] = "Por favor, digite um e-mail válido.";
            $this->load->view('new-account', $data);    

        endif;        
    }

    public function newPassword() {
		$this->load->view('new-password');
		
    }

    public function recover() {
        $email = $this->input->post('email');
        $this->load->model('adminloginModel');
        $password = $this->adminloginModel->recoverPassword($email);
        $msg = "OLÁ, BEM VINDO AO SISTEMA DE RECUPERAÇÃO DO DESAFIO PROCEDO. <br>
                SUA SENHA DE ACESSO É:". $password[0]->password_user;
        mail($email, "Recuperação de Senha Desafio Procedo", $msg);
    }


    public function validaEmail($email){
        
        if (!preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$email)){
            
            return false;
        }
        else{
            
            $domain=explode('@',$email);
            if(!checkdnsrr($domain[1],'A')){
                
                return false;
            }
            else{return true;} 
        }
    }
     

	public function clearForm($post = array()) {

        foreach ($post as $key => $value) :
            $value = trim($value);
            $value = str_replace("=", "", $value);
            $value = str_replace("'", "", $value);
            $value = str_replace("\"", "", $value);
            $value = str_replace(" or ", "", $value);
            $value = str_replace(" and ", "", $value);
            $value = str_replace("(", "", $value);
            $value = str_replace(");", "", $value);
            $value = str_replace("<", "", $value);
            $value = str_replace(">", "", $value);
            $value = str_replace("update", "", $value);
            $value = str_replace("-shutdown", "", $value);
            $value = str_replace("--", "", $value);
            $value = str_replace("'", "", $value);
            $value = str_replace("#", "", $value);
            $value = str_replace("$", "", $value);
            $value = str_replace("%", "", $value);
            $value = str_replace("¨", "", $value);
            $value = str_replace("&", "", $value);
            $value = str_replace("'or'1'='1'", "", $value);
            $value = str_replace("--", "", $value);
            $value = str_replace("insert", "", $value);
            $value = str_replace("drop", "", $value);
            $value = str_replace("delet", "", $value);
            $value = str_replace("xp_", "", $value);
            $value = str_replace("select", "", $value);
            $value = str_replace("*", "", $value);
            $post[$key] = $value;
        endforeach;
        return $post;

    }

}
