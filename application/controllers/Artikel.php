<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data');
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->helper('html');
    }
    public function page()
    {
        // $id = null
        $slug = $this->uri->segment(3);
        $query = $this->data->get($slug);
        $latest = $this->data->view_recent_artikel()->result();
        if ($query->row() == NULL) {
            $this->session->set_flashdata('feedback', 'not_found');
            redirect(base_url(''));
        }
        $data = array(
            'artikel' => $query->row(),
            'latest' => $latest
        );
        $info = $query->row();
        $head = array(
            'title' => $info->judul_artikel,
            'description' => "Menyediakan artikel tentang " . $info->judul_artikel,
            'keyword' => $info->judul_artikel . ", Ravi Artikel, Artikel" . $info->nama_kategori
        );
        $this->load->view('heading', $head);
        $this->load->view('page-main', $data);
        $this->load->view('footer');
    }
}
