<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $this->load->database(); //automatically load db

        $this->load->model('Items'); //automatically load Items model
        $this->load->model('Users'); //automatically load Users model
        $this->load->model('User_model'); //automatically load User_model

        $this->load->helper('security'); //security helper for xss_clean

    }

    public function index(){
        $this->load->view('home'); //load login form view

    }

    public function check_database($password)
        //this method checks database
    {
        $this->load->library('form_validation');


//        Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

//        query the database
        $result = $this->Users->login($username, $password);

        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {
            return $result->row(0)->userId;

        } else {
            return FALSE;
        }
    }

    public function members()
    {
        $this->load->model('user_model');

        //if it validation is FALSE
        if ($this->add_user->run() == FALSE) //load this view for redirect and login
        {

            //$this method loads the view
            $data['main_content'] = 'login_form'; //create a new key for this variable to load in view

            $this->load->view('includes/header', $data); //load template with two parameters, template and $data(main_content) variable

        } //or else route to members page
        else {
            $data['username'] = $this->input->post('username');

            //Go to private area
            $this->load->view('welcome_view', $data);
        }

    }
}