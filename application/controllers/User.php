<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        $this->load->database(); //automatically load db

        $this->load->model('user_model');

        $this->load->helper('email');
        $this->load->helper('security');

        $this->load->library('form_validation');
    }

    public function index()
    {
        if(($this->session->userdata('username')!=""))
        {
            $this->welcome();
        }
        else{
            $this->load->view('login_view'); //load login form view
        }
    }

    public function welcome()
    {
        $this->load->view('welcome_view');

    }

    public function login()
    {

        $this->load->library('form_validation');

        $email=$this->input->post('email');
        $enc_password=md5($this->input->post('password'));

        $result=$this->Users->login($email,$enc_password);

        if($result) $this->welcome();
        else        $this->load->view('login_form');
    }

    public function thank()
    {
        $data['title']= 'Thank';
        $this->load->view('header_view',$data);
        $this->load->view('thank_view.php', $data);
        $this->load->view('footer_view',$data);
    }

    public function registration()

    {
        $this->user_model->add_user();

        $this->load->library('form_validation');

        //set rules to validate username and callback
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5|callback_check_database');


        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('registration_view');
        }
        else
        {
            $this->load->view('thank_view');
        }
    }

    public function create()
    {

        $this->load->model('user_model');
        //method to load members page
        $this->load->view('registration_view');
    }


}