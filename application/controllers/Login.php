<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
		
		$this->load->model('modelKarirpad');
	}

	public function index()
	{
		$this->load->view('login/index');
	}

	public function doLogin(){
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$idUser			= null;
		$role			= null;

		$dataUser = array(
			'username' 	=> $username,
			'password' 	=> $password
		);

		$dataLogin = $this->modelKarirpad->getWhere('user', $dataUser)->result();

		foreach($dataLogin as $data){
			$kd_user 			= $data->kd_user;
			$role 				= $data->role;
			$nama_lengkap 		= $data->nama_lengkap;
		}

		$data_session = array(
			'username' 		=> $username,
			'kd_user' 		=> $kd_user,
			'role' 			=> $role,
			'nama_lengkap' 	=> $nama_lengkap,
			'log' 			=> 'in'
		);
 
		$this->session->set_userdata($data_session);

		if($dataLogin != null){
			$this->session->set_flashdata('messages', '<br><div class="alert alert-success" role="alert"> Berhasil Login </div>');
			if($role == 1){
				redirect('Barang');
			}else if($role == 2){
				redirect('Barang');
			}
		}else{
			$this->session->set_flashdata('messages', '<br><div class="alert alert-danger" role="alert"> Username/ Password Salah! </div>');
			redirect('Login');
		}
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('Welcome');
    }
}
