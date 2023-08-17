<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data');
        $this->load->helper('url');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    public function index()
    {
        $jml_flora = $this->data->jumlah_data_flora();
        $jml_fauna = $this->data->jumlah_data_fauna();
        $jml_iklim = $this->data->jumlah_data_iklim();
        $jml_umri = $this->data->jumlah_data_umri();
        $data = array(
            'flora' => $jml_flora,
            'fauna' => $jml_fauna,
            'iklim' => $jml_iklim,
            'umri' => $jml_umri
        );
        $page_active = array(
            'page' => "Dashboard"
        );
        $this->load->view('admin-view/dashboard-navbar');
        $this->load->view('admin-view/dashboard-sidebar', $page_active);
        $this->load->view('admin-view/dashboard-menu', $data);
        $this->load->view('admin-view/dashboard-footer');
    }
}
