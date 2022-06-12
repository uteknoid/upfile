<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unggah extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));      
    }

    public function index()
    {
        $this->load->view('index');
    }

    function upload()
    {
        $config['upload_path']  = './files/';
        $config['allowed_types']  = 'jpg|jpeg|png|zip|rar|mp3|mp4|avi|ppt|xlsx|xls|iso|mkv|pdf|doc|docx|webp|svg|psd|ai|flp|sql|apk|aia|aix|abb';
        $this->load->library('upload', $config);
    }
}
