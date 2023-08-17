<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
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

    public function edit_view($id = null)
    {
        $kategori = $this->data->view_kategori_artikel()->result();
        $page_active = array(
            'page' => "Manage",
            'kategori' => $kategori
        );
        $query = $this->data->get($id);
        $data = array(
            'artikel' => $query->row()
        );
        $this->load->view('admin-view/dashboard-navbar');
        $this->load->view('admin-view/dashboard-sidebar', $page_active);
        $this->load->view('admin-view/edit-artikel', $data);
        $this->load->view('admin-view/dashboard-footer');
    }


    public function edit_artikel()
    {
        date_default_timezone_set("Asia/Jakarta");
        $id = $this->input->post('id_artikel');
        $judul = $this->input->post('judul_artikel');
        $slug_lower = strtolower($judul);
        $slug = url_title($slug_lower,  'dash',  TRUE);
        $penulis = $this->input->post('id_user');
        $isi = $this->input->post('isi_artikel');
        $kategori = $this->input->post('kategori_artikel');
        $fotolama = $this->input->post('foto_lama');
        $thumblama = $this->input->post('foto_thumbnail_lama');

        // cek data
        $cek = $this->data->cek_data($slug)->num_rows();
        $query = $this->data->cek_data($slug);
        $data = $query->row();
        if ($cek > 0 && $id != $data->id_artikel) {
            $this->session->set_flashdata('message_data', 'found');
            redirect('admin/manage/');
        }
        if ($_FILES['foto_thumbnail']['error'] === 4) {
            $foto = $fotolama;
            $thumb = $thumblama;
        } else {
            $config['file_name'] = $slug;
            $config['overwrite'] = TRUE;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 1024;
            $config['max_width'] = 1920;
            $config['max_height'] = 1280;
            $config['encrypt_name'] = FALSE;
            $config['upload_path'] = 'img/artikel-img/';

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('foto_thumbnail')) {
                $this->session->set_flashdata('error_img', 'error');
                redirect(base_url('admin/manage/'));
            } else {
                $data = $this->upload->data();
                if ($fotolama != $data['file_name']) {
                    $dtsfoto = 'img/artikel-img/' . $fotolama;
                    $dtstmb = 'img/artikel-img/thumbnail/' . $thumblama;
                    // hak akses
                    chmod($dtsfoto, 0777);
                    chmod($dtstmb, 0777);
                    // 
                    unlink($dtsfoto);
                    unlink($dtstmb);
                }
                // membuat thumbnail
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'img/artikel-img/' . $data['file_name'];
                $config['create_thumb'] = TRUE;
                $config['width'] = "546";
                $config['height'] = "351";
                $config['maintain_ratio'] = FALSE;

                $thumb = $data['raw_name'] . '_thumb' . $data['file_ext'];
                $foto = $data['file_name'];
                $config['new_image'] = 'img/artikel-img/thumbnail/' . $data['file_name'];

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
            }
        }
        $data = array(
            'id_artikel' => $id,
            'judul_artikel' => $judul,
            'id_user' => $penulis,
            'slug' => $slug,
            'isi_artikel' => $isi,
            'id_kategori' => $kategori,
            'update_artikel' => NULL,
            'foto' => $foto,
            'thumbnail' => $thumb
        );
        $data = $this->data->update_data($data, 'artikel');
        if ($data > 0) {
            $this->session->set_flashdata('message_edit', 'success');
            redirect('admin/manage');
        } else {
            $this->session->set_flashdata('message_edit', 'failed');
            redirect('admin/manage');
        }
        redirect('admin/manage');
    }
}
