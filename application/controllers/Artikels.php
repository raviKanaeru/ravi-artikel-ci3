<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikels extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data');
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->helper('html');
    }
    public function q()
    {
        // $id = null
        $slug = $this->uri->segment(3);
        if ($slug == NULL) {
            $data = $this->data->view_all()->result();
            $info = "Artikel";
            $data = array(
                'artikel' => $data,
                'subtitle' => $info
            );
        } else {
            $data = $this->data->getArtikelBySlug($slug);
            $info = $slug;
            $data = array(
                'artikel' => $data,
                'subtitle' => $info
            );
        }
        $head = array(
            'title' => $info,
            'description' => "Menyediakan artikel tentang " . $slug,
            'keyword' => $slug . ", Ravi Artikel, Artikel" . $slug,
        );

        $this->load->view('heading', $head);
        $this->load->view('artikels-view', $data);
        $this->load->view('footer');
    }
}
