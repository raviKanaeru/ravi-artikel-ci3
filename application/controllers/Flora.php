<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Flora extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data');
        $this->load->helper('url');
        $this->load->helper('text');
    }
    public function index($id = NULL)
    {
        $jml = $this->data->jumlah_data_flora();

        //pengaturan pagination
        $config['base_url'] = base_url() . 'flora/index/';
        $config['total_rows'] = $jml;
        $config['per_page'] = '6';

        $config['next_link'] = '<i class="material-icons">chevron_right</i>';
        $config['prev_link'] = '<i class="material-icons">chevron_left</i>';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active teal darken-2"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';

        //inisialisasi config
        $this->pagination->initialize($config);

        //tamplikan data
        $data['artikel'] = $this->data->view_flora($config['per_page'], $id);
        $head = array(
            'title' => "Kategori Flora - Ravi Artikel",
            'description' => "Menyediakan artikel tentang informasi Flora",
            'keyword' => "Artikel, Tumbuhan, Bunga, Pohon, Flora, Ravi Artikel"
        );

        $this->load->view('heading', $head);
        $this->load->view('flora-view', $data);
        $this->load->view('footer');
    }
}
