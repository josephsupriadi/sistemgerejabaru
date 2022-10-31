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
        $this->form_validation->set_rules('username', 'username', 'required|mint_lenght[5]');


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
