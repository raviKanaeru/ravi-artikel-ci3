<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends CI_Controller
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
        $page_active = array(
            'page' => "Manage"
        );

        $data['artikel'] = $this->data->view_all()->result();
        $this->load->view('admin-view/dashboard-navbar');
        $this->load->view('admin-view/dashboard-sidebar', $page_active);
        $this->load->view('admin-view/manage-artikel', $data);
        $this->load->view('admin-view/dashboard-footer');
    }
    public function delete($id)
    {
        // cek file
        $cek = $this->data->cek_data($id);
        if (!empty($cek)) {
            $ambil_data = $cek->row();
            // hapus file
            $foto = 'img/artikel-img/' . $ambil_data->foto;
            $thumb = 'img/artikel-img/thumbnail/' . $ambil_data->thumbnail;
            // hak akses
            chmod($foto, 0777);
            chmod($thumb, 0777);
            // 
            unlink($foto);
            unlink($thumb);
            // alert hapus data
            $this->data->delete_data($id);
            $this->session->set_flashdata('message', 'success');
            redirect('admin/manage');
        } else {
            $this->session->set_flashdata('message', 'error');
            redirect('admin/manage');
        }
    }
}
