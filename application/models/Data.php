<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Model
{
    // menampikan artikel berdasarkan top artikel
    public function view_top_artikel()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->join('user', ' user.id_user = artikel.id_user');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query;
    }
    // menampilkan artikel berdasarkan artikel terbaru
    public function view_recent_artikel()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->join('user', ' user.id_user = artikel.id_user');
        $this->db->limit(3);
        $this->db->order_by('id_artikel', 'desc');
        $query = $this->db->get();
        return $query;
    }
    // menampilkan kategori artikel
    public function view_kategori_artikel()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $query = $this->db->get();
        return $query;
    }

    public function view_all()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->join('user', ' user.id_user = artikel.id_user');
        $this->db->order_by('id_artikel', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function jumlah_data_fauna()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('id_kategori', 2);
        return $this->db->get()->num_rows();
    }
    public function jumlah_data_kategori($slug)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('slug_kategori', $slug);
        return $this->db->get()->num_rows();
    }

    public function view_fauna($number, $offset)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->join('user', ' user.id_user = artikel.id_user');
        $this->db->where('artikel.id_kategori', '2');
        $this->db->order_by('id_artikel', 'desc');
        $this->db->limit($number, $offset);
        $data = $this->db->get();
        return $data->result();
    }

    public function jumlah_data_flora()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('id_kategori', 1);
        return $this->db->get()->num_rows();
    }

    public function view_flora($number, $offset)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->join('user', ' user.id_user = artikel.id_user');
        $this->db->where('artikel.id_kategori', '1');
        $this->db->order_by('id_artikel', 'desc');
        $this->db->limit($number, $offset);
        $data = $this->db->get();
        return $data->result();
    }

    public function jumlah_data_iklim()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('id_kategori', 3);
        return $this->db->get()->num_rows();
    }

    public function view_iklim($number, $offset)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->join('user', ' user.id_user = artikel.id_user');
        $this->db->where('artikel.id_kategori', '3');
        $this->db->order_by('id_artikel', 'desc');
        $this->db->limit($number, $offset);
        $data = $this->db->get();
        return $data->result();
    }

    public function jumlah_data_umri()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('id_kategori', 4);
        return $this->db->get()->num_rows();
    }

    public function view_umri($number, $offset)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->join('user', ' user.id_user = artikel.id_user');
        $this->db->where('artikel.id_kategori', '4');
        $this->db->order_by('id_artikel', 'desc');
        $this->db->limit($number, $offset);
        $data = $this->db->get();
        return $data->result();
    }

    public function get($id)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->join('user', ' user.id_user = artikel.id_user');
        if ($id != null) {
            $this->db->where('slug', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getArtikelBySlug($id)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->join('user', ' user.id_user = artikel.id_user');
        if ($id != null) {
            $this->db->where('kategori.slug_kategori', $id);
        }
        $query = $this->db->get()->result();
        return $query;
    }
    public function get_kategori($id)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        if ($id != null) {
            $this->db->where('slug_kategori', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function input_data($data)
    {
        $this->db->insert('artikel', $data);
        return $this->db->affected_rows();
    }
    public function input_data_kategori($data)
    {
        $this->db->insert('kategori', $data);
        return $this->db->affected_rows();
    }

    public function update_data($data)
    {
        $this->db->where('id_artikel', $data['id_artikel']);
        $this->db->update('artikel', $data);
        return $this->db->affected_rows();
    }
    public function update_kategori($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->update('kategori', $data);
        return $this->db->affected_rows();
    }

    public function delete_data($id)
    {
        $this->db->where('slug', $id);
        $this->db->delete('artikel');
    }
    public function delete_category($id)
    {
        $this->db->where('slug_kategori', $id);
        $this->db->delete('kategori');
    }
    public function cek_data($id)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('slug', $id);
        $query = $this->db->get();
        return $query;
    }

    public function cek_login($username)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query;
    }
}
