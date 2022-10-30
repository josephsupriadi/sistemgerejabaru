<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login(); // ambilnya ini dari fungsi_helper.php

		$this->load->view('login');

	}
	public function process()
	{	
		// saya bikin variabel post yang isinya dia 
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			// load controller. kenapa harus diload kl tidak error nanti
			$this->load->model('user_m');
			$query = $this->user_m->login($post); // melempar post dari user_m
			if($query->num_rows() > 0) { // jika query ini di name row seperti di notif itu > 0
				$row = $query->row(); // bedanya row sama result kl result di ekstrak semua kl row cuma satu baris
				 $params = array ( // kemudian buat variabel params isinya array
				 	'userid' => $row->user_id, // hasil dari row tadi
					'level' => $row->level
				 );
				  // kemudian kita cetak sessionnya seperti apa
				  $this->session->set_userdata($params);
				  echo "<script>
				  alert('Selamat, Login Berhasil');
				   window.location='".site_url('dashboard')."';
				  </script>";
				} else {
					echo "<script>
					alert('Anda Gagal Login, username/password salah');
					 window.location='".site_url('auth/login')."';
					</script>";
			}
		}	
	}

	public function logout ()
	{
		// parameternya disesuaikan aja yang dicetak apa yg di hapus apa
		$params = array('userid','level');
		$this->session->unset_userdata($params);
		// kl sudah logout kita arahkan ke halaman login
		redirect('auth/login');
	}
}
