<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		check_not_login(); 
        // load modelnya
        $this->load->model('user_m');
        // kita bisa tampung Didalam variabel data dan lembar kan ke
        $data['row'] = $this->user_m->get();
		$this->template->load('template','user/user_data', $data); // sini
	}

    public function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]'); // is_u
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
        array('matches' => ' %s tidak sesuai dengan password')); // Konfirmasi Password tidak sesuai dengan password
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', ' %s masih kosong, silahkan isi'); 
        $this->form_validation->set_message('min_length', ' {field} minimal 5 karakter'); 

        if ($this->form_validation->run('signup') == FALSE)
            {
                $this->template->load('template','user/user_form_add');
            }
            else
            {
                   echo "Proses Simpan data User baru";
            }

        
    }
}
