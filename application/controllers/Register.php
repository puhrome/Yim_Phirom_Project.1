<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->database(); //automatically load db

        $this->load->model('Items'); //automatically load Items model
        $this->load->model('Users'); //automatically load Users model
        $this->load->model('User_model'); //automatically load User_model

        $this->load->model('Login_model');

        $this->load->helper('security'); //security helper for xss_clean

    }

    public function index(){
        $this->load->view('registration_view');

    }

    public function register(){

    }
}
