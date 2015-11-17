<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Do_upload extends CI_Controller
{
    public function index()
    {
        $this->load->view('file_view');

        $config['upload_path'] = './uploads/';

        $config['allowed_types'] = 'gif|jpg|png';

        $config['max_size'] = '100';

        $config['max_width'] = '1024';

        $config['max_height'] = '768';
    }

}