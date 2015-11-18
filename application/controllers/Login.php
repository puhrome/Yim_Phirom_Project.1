<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->database(); //automatically load db

        $this->load->model('Items'); //automatically load Items model
        $this->load->model('Users'); //automatically load Users model
        $this->load->model('User_model'); //automatically load User_model

        $this->load->helper('security'); //security helper for xss_clean

        if(!empty($_SESSION['id']))
            redirect('home');

    }

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->load->view('login_form'); //load login form view

        if($_POST) {
            $result = $this->login->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'id' => $result->id,
                    'username' => $result->username
                ];

                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect('login');
            }
        }

//
//        if($this->session->userdata('logged_in'))
//        {
//            $session_data = $this->session->userdata('logged_in');
//            $data['username'] = $session_data['username'];
//            $this->load->view('members_area', $data);
//        }
//        else
//        {
//            //If no session, redirect to login page
//            redirect('login_form', 'refresh');
//        }

    }

    public function login_user(){ //method to tell what to view with login model

    {
        $this->load->model('user_model');
        $this->load->view('login_form'); //load login form view

    }
}

    public function login_validation()
    {
//        $this->Users->login();

        //This method will have the credentials validation
        $this->load->library('form_validation');

        //set rules to validate username and callback
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');

        //if it validation is FALSE
        if($this->form_validation->run() == FALSE)
            //load this view for redirect and login
        {

            $this->load->view('login_form', 'login_validation'); //load template with two parameters, template and $data(main_content) variable

        }
        //or else route to members page
        else
        {
//            $data['username'] = $this->input->post('username');

            //Go to private area
            $data['username'] = $this->input->post('username');

            $this->load->view('welcome_view', $data);
        }

    }

    public function check_database()
        //this method checks database
    {
        $this->load->library('form_validation');


//      Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

//      query the database
//        $result = $this->user->login($username, $password);

        $result = $this->db->get('user');

        if ($result->num_rows() == 1) {
            return $result->row(0)->id;

        } else {
            return FALSE;
        }
    }



    public function create(){


    }
//    function logout()
//    {
//        $this->session->unset_userdata('logged_in');
//        session_destroy();
//        redirect('/index.php/logout_view', 'refresh');
//    }

}