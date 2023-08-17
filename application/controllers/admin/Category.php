<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
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
            'page' => "Manage Category"
        );

        $data['category'] = $this->data->view_kategori_artikel()->result();
        $this->load->view('admin-view/dashboard-navbar');
        $this->load->view('admin-view/dashboard-sidebar', $page_active);
        $this->load->view('admin-view/manage-category', $data);
        $this->load->view('admin-view/dashboard-footer');
    }

    public function add()
    {
        $page_active = array(
            'page' => "Manage Category",
        );
        $this->load->view('admin-view/dashboard-navbar');
        $this->load->view('admin-view/dashboard-sidebar', $page_active);
        $this->load->view('admin-view/add-category');
        $this->load->view('admin-view/dashboard-footer');
    }

    public function create()
    {
        date_default_timezone_set("Asia/Jakarta");
        $judul = $this->input->post('nama_kategori');
        $slug_lower = strtolower($judul);
        $slug = url_title($slug_lower,  'dash',  TRUE);
        // cek data
        $cek = $this->data->cek_data($slug)->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('message_data', 'found');
            redirect('admin/category/add');
        }

        if (isset($_FILES['foto_kategori']['name'])) {
            $config['file_name'] = $slug;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 1024;
            $config['max_width'] = 1920;
            $config['max_height'] = 1280;
            $config['encrypt_name'] = FALSE;
            $config['upload_path'] = 'img/kategori/';

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('foto_kategori')) {
                $this->session->set_flashdata('error_img', 'error');
                redirect(base_url('admin/category/add/'));
            } else {
                $data = $this->upload->data();
            }
        } else {
            $this->session->set_flashdata('message_img', 'not_found');
            redirect('admin/category/add/');
        }

        $data = array(
            'nama_kategori' => $judul,
            'slug_kategori' => $slug,
            'foto_kategori' => $data['file_name']
        );
        $data = $this->data->input_data_kategori($data, 'artikel');
        if ($data > 0) {
            $this->session->set_flashdata('message_add', 'success');
            redirect('admin/category');
        } else {
            $this->session->set_flashdata('message_add', 'failed');
            redirect('admin/category');
        }
    }

    public function edit($id = null)
    {
        $page_active = array(
            'page' => "Manage Category",
        );
        $query = $this->data->get_kategori($id);
        $data = array(
            'kategori' => $query->row()
        );
        $this->load->view('admin-view/dashboard-navbar');
        $this->load->view('admin-view/dashboard-sidebar', $page_active);
        $this->load->view('admin-view/edit-category', $data);
        $this->load->view('admin-view/dashboard-footer');
    }

    public function update()
    {
        date_default_timezone_set("Asia/Jakarta");
        $id = $this->input->post('id_kategori');
        $judul = $this->input->post('nama_kategori');
        $slug_lower = strtolower($judul);
        $slug = url_title($slug_lower,  'dash',  TRUE);
        $fotolama = $this->input->post('foto_lama');

        // cek data
        $cek = $this->data->cek_data($slug)->num_rows();
        $query = $this->data->cek_data($slug);
        $data = $query->row();
        if ($cek > 0 && $id != $data->id_kategori) {
            $this->session->set_flashdata('message_data', 'found');
            redirect('admin/category/');
        }
        if ($_FILES['foto_kategori']['error'] === 4) {
            $foto = $fotolama;
        } else {
            $config['file_name'] = $slug;
            $config['overwrite'] = TRUE;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 1024;
            $config['max_width'] = 1920;
            $config['max_height'] = 1280;
            $config['encrypt_name'] = FALSE;
            $config['upload_path'] = 'img/kategori/';

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('foto_kategori')) {
                $this->session->set_flashdata('error_img', 'error');
                redirect(base_url('admin/category/'));
            } else {
                $foto = $this->upload->data();
                $foto =  $foto['file_name'];
                if ($fotolama != $foto['file_name']) {
                    $dtsfoto = 'img/kategori/' . $fotolama;
                    // hak akses
                    chmod($dtsfoto, 0777);
                    // 
                    unlink($dtsfoto);
                }
            }
        }
        $data = array(
            'id_kategori' => $id,
            'nama_kategori' => $judul,
            'slug_kategori' => $slug,
            'foto_kategori' => $foto
        );
        $data = $this->data->update_kategori($data, 'kategori');
        if ($data > 0) {
            $this->session->set_flashdata('message_edit', 'success');
            redirect('admin/category');
        } else {
            $this->session->set_flashdata('message_edit', 'failed');
            redirect('admin/category');
        }
        redirect('admin/category');
    }


    public function delete($id)
    {
        // cek file
        $cek = $this->data->cek_data($id);
        if (!empty($cek)) {
            $ambil_data = $cek->row();
            // hapus file
            $foto = 'img/kategori/' . $ambil_data->foto_kategori;
            // hak akses
            chmod($foto, 0777);
            // 
            unlink($foto);
            // alert hapus data
            $this->data->delete_category($id);
            $this->session->set_flashdata('message', 'success');
            redirect('admin/category');
        } else {
            $this->session->set_flashdata('message', 'error');
            redirect('admin/category');
        }
    }

    
}
