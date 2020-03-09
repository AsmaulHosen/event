<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    //All UI level functions
    public function index()
    {
        $data = array();
        $data['page_title'] = $this->config->item('site_name').' | About Company';
        // $data["main_content"] = $this->load->view('general/about_company', $data, true);
        $this->load->view("master", $data);
    }
}