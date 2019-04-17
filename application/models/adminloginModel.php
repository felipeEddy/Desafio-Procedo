<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminloginModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function validation($email, $password) {

        $result = $this->db->query("SELECT * FROM tbl_user WHERE email_user = '$email' AND password_user = '$password'");
        
        return ($result->num_rows() === 1) ? $result->result() : false;

    }

    public function verifyEmail($email) {

        $result = $this->db->query("SELECT * FROM tbl_user WHERE email_user = '$email'");
        
        return ($result->num_rows() > 0) ? false : true;

    }

    public function addUser($email, $password) {

        $this->db->query("INSERT INTO tbl_user(email_user, password_user) VALUES ('$email', '$password')");

    }

    public function recoverPassword($email) {

        $result = $this->db->query("SELECT password_user FROM tbl_user WHERE email_user = '$email'");
        return $result->result();

    }

}

?>