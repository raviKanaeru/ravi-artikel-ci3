<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data');
        $this->load->helper('url');
        $this->load->helper('form');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    public function index()
    {
        $this->form_validation->set_rules(
            'judul_artikel',
            'judul_artikel',
            'required|max_length[100]|is_unique[artikel.judul_artikel]',
            array(
                'required'       =>  'Silahkan Isi Form Yang kosong.',
                'max_length'     =>  'Judul tidak boleh lebih dari 100 kata.',
                'is_unique'      =>  'Judul Blog Sudah Ada.'
            )
        );
        // $this->form_validation->set_rules('foto_thumbnail', 'Foto',  'callback_validate_image');
        $this->form_validation->set_rules(
            'isi_artikel',
            'isi_artikel',
            'required',
            array(
                'required'       =>  'Silahkan Isi Form Yang kosong.'
            )
        );
        $this->form_validation->set_rules(
            'kategori_artikel',
            'kategori_artikel',
            'required',
            array(
                'required'       =>  'Silahkan Pilih Kategori Yang Tepat.'
            )
        );
        if ($this->form_validation->run() == FALSE) {
            $kategori = $this->data->view_kategori_artikel()->result();
            $page_active = array(
            'page' => "Add",
            'kategori' => $kategori
        );
        $this->load->view('admin-view/dashboard-navbar');
        $this->load->view('admin-view/dashboard-sidebar', $page_active);
        $this->load->view('admin-view/add-artikel');
        $this->load->view('admin-view/dashboard-footer');
        } else {
            $this->_create();
        }
    }
    private function _create()
    {
        date_default_timezone_set("Asia/Jakarta");
        $judul = $this->input->post('judul_artikel');
        $slug_lower = strtolower($judul);
        $slug = url_title($slug_lower,  'dash',  TRUE);
        $penulis = $this->session->userdata('id_user');
        $isi = $this->input->post('isi_artikel');
        $kategori = $this->input->post('kategori_artikel');
        // cek data
        $cek = $this->data->cek_data($slug)->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('message_data', 'found');
            redirect('admin/add/');
        }

        if (isset($_FILES['foto_thumbnail']['name'])) {
            $config['file_name'] = $slug;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 1024;
            $config['max_width'] = 1920;
            $config['max_height'] = 1280;
            $config['encrypt_name'] = FALSE;
            $config['upload_path'] = 'img/artikel-img/';

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('foto_thumbnail')) {
                $this->session->set_flashdata('error_img', 'error');
                redirect(base_url('admin/add/'));
            } else {
                $data = $this->upload->data();
                // membuat thumbnail
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'img/artikel-img/' . $data['file_name'];
                $config['create_thumb'] = TRUE;
                $config['width'] = "546";
                $config['height'] = "351";
                $config['maintain_ratio'] = FALSE;

                $namathumb = $data['raw_name'] . '_thumb' . $data['file_ext'];
                $config['new_image'] = 'img/artikel-img/thumbnail/' . $data['file_name'];

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
            }
        } else {
            $this->session->set_flashdata('message_img', 'not_found');
            redirect('admin/add/');
        }

        $data = array(
            'judul_artikel' => $judul,
            'id_user' => $penulis,
            'slug' => $slug,
            'isi_artikel' => $isi,
            'id_kategori' => $kategori,
            'update_artikel' => NULL,
            'foto' => $data['file_name'],
            'thumbnail' => $namathumb
        );
        $data = $this->data->input_data($data, 'artikel');
        if ($data > 0) {
            $this->session->set_flashdata('message_add', 'success');
            redirect('admin/manage');
        } else {
            $this->session->set_flashdata('message_add', 'failed');
            redirect('admin/manage');
        }
    }
}
