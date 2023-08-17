<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutme extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data');
        $this->load->helper('url');
    }
    public function index()
    {
        $head = array(
            'title' => "About Me - Ravi Artikel",
            'description' => "Berisi tentang informasi pembuat website Ravi Artikel",
            'keyword' => "About Me, Ravi Artikel, About Us, Umri, Artikel"
        );
        $this->load->view('heading', $head);
        $this->load->view('about-me');
        $this->load->view('footer');
    }
}
