<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    // diuser_m kita buat function baru dengan nama login
    // dan menampung variable post
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']); // jadi username ini diambil dari name di login.php
        $this->db->where('password', sha1($post['password'])); // karena kita pake SHA1 di database maka di kasi SHA1 didalamnya
        $query = $this->db->get();
        return $query;
    }
    // tambahain fungsion baru untuk menampilkan data user sesuai dgn yg terlogin
    public function get($id = null)
    {
        $this->db->from('user'); // table user
        if($id != null) { // jika idnya tidak null maka wherenya
            $this->db->where('user_id', $id);
        }
            $query = $this->db->get();
            return $query;
        }
    }
    