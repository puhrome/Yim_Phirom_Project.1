<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function index(){
        $this->load->view('logout_view'); //load navigation view
    }

    function signout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('/index.php/logout/logout_view', 'refresh');
    }

}