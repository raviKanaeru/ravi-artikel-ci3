<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url');
    }
    public function index()
    {
        
        if ($this->session->userdata('status') == "login") {
            redirect(base_url("admin/dashboard"));
        }
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|max_length[50]|required',
            array(
                'required'       =>  'Silahkan Masukkan Username.',
                'max_length'     =>  'Username tidak boleh lebih dari 20 kata.'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required',
            array(
                'required'       =>  'Silahkan Masukkan Password.',
            )
        );
        if ($this->form_validation->run() == FALSE) {
                $head = array(
                'title' => "Login",
                'description' => "Halaman Login",
                'keyword' => "Login, Ravi Artikel"
            );
            $this->load->view('login-view', $head);
        } else {
            $this->auth();
        }
    }
    private function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->login_model->cek_login($username)->num_rows();
        if ($cek > 0) {
            $query = $this->login_model->cek_login($username);
            $data = $query->row();
            if (password_verify($password, $data->password)) {
                $data_session = array(
                    'user' => $username,
                    'status' => "login",
                    'id_user' => $data->id_user,
                    'profil' => $data->foto_user,
                    'role' => $data->role_user,
                    'nama' => $data->nama_user
                );

                $this->session->set_userdata($data_session);
                redirect('admin/dashboard');
            }
            $this->session->set_flashdata('message_login', 'wrong');
            redirect('login');
        }
        $this->session->set_flashdata('message_login', 'wrong');
        redirect('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
