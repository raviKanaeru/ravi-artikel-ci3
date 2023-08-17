<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sitemap_model');
    }

    public function index()
    {

        $post = $this->Sitemap_model->create();

        $data = [
            'post'   => $post
        ];

        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view('sitemap/index', $data);
    }
}
