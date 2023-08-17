<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data');
        $this->load->helper('url');
        $this->load->helper('text');
    }
    public function index()
    {
        $recent = $this->data->view_recent_artikel()->result();
        $artikel = $this->data->view_top_artikel()->result();
        $kategori = $this->data->view_kategori_artikel()->result();
        $data = array(
            'recent' => $recent,
            'artikel' => $artikel,
            'kategori' => $kategori
        );
        $head = array(
            'title' => "Ravi Artikel",
            'description' => "Menyediakan Berbagai Jenis Artikel",
            'keyword' => "Artikel",
            'kategori' => $kategori,
        );
        $this->load->view('heading', $head);
        $this->load->view('main', $data);
        $this->load->view('footer');
    }
}
