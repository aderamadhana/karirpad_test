<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
		
		$this->load->model('modelKarirpad');
		$this->load->library(array('upload'));

		if($this->session->userdata('log') != 'in'){
			$this->session->set_flashdata('messages', '<br><div class="alert alert-danger" role="alert"> <strong> Error! </strong>Silahkan login terlebih dahulu </div>');
			redirect(base_url("login"));
		}
	}
	
	public function index()
	{
		$data['barang'] = $this->modelKarirpad->getAll('barang')->result();
		
		$this->load->view('template/header');
		$this->load->view('barang/index', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{	
		$this->load->view('template/header');
		$this->load->view('barang/tambah');
		$this->load->view('template/footer');
	}

	public function doAdd(){
		$config = ['upload_path' => './assets/img/uploads/', 'allowed_types' => 'jpg|png|jpeg', 'max_size' => 1024];            
        $this->upload->initialize($config);

		$nama_barang 		= $this->input->post('nama_barang');
		$kategori 			= $this->input->post('kategori');
		$harga 				= $this->input->post('harga');
		$foto 				= null;
		$diskon 			= 0;
		
		//cek if uploaded
		if($this->upload->do_upload('foto')){ 
			$dataUpload     = $this->upload->data();
			$foto    		= $dataUpload['file_name'];
			
			// cek harga barang
			if($harga > 40000){
				$diskon = $harga * 10 / 100;
			}else if($harga > 20000){
				$diskon = $harga * 5 / 100;
			}else{
				$diskon = 0;
			}

			$data = array(
				'nama_barang' 	=> $nama_barang,
				'kategori' 		=> $kategori,
				'harga' 		=> $harga,
				'diskon' 		=> $diskon,
				'foto' 			=> $foto
			);
			
			$this->modelKarirpad->insert('barang', $data);

			$this->session->set_flashdata('messages', '<div class="alert alert-success " role="alert"><strong>Sukses!</strong> Barang berhasil ditambah.	</div>');

			redirect('Barang');

		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-error " role="alert"><strong>Error!</strong> Foto tidak terupload.</div>');

			redirect('Barang');
		}
	}

	public function edit($kd_barang){
		$data = array('kd_barang' => $kd_barang);

		$data['barang'] = $this->modelKarirpad->getWhere('barang', $data)->result();

		$this->load->view('template/header');
		$this->load->view('barang/edit', $data);
		$this->load->view('template/footer');
	}

	public function doEdit(){
		$config = ['upload_path' => './assets/img/uploads/', 'allowed_types' => 'jpg|png|jpeg', 'max_size' => 1024];            
        $this->upload->initialize($config);

		$kd_barang 			= $this->input->post('kd_barang');
		$nama_barang 		= $this->input->post('nama_barang');
		$kategori 			= $this->input->post('kategori');
		$harga 				= $this->input->post('harga');
		$gambar 			= $this->input->post('gambar');
		$foto 				= null;
		$diskon 			= 0;
		
		// cek harga barang
		if($harga > 40000){
			$diskon = $harga * 10 / 100;
		}else if($harga > 20000){
			$diskon = $harga * 5 / 100;
		}else{
			$diskon = 0;
		}

		$where = array('kd_barang' => $kd_barang);

		//cek if uploaded
		if($this->upload->do_upload('foto')){ 
			$dataUpload     = $this->upload->data();
			$foto    		= $dataUpload['file_name'];
			
			$data_update = array(
				'nama_barang' 	=> $nama_barang,
				'kategori' 		=> $kategori,
				'harga' 		=> $harga,
				'diskon' 		=> $diskon,
				'foto' 			=> $foto
			);
		}else{
			$data_update = array(
				'nama_barang' 	=> $nama_barang,
				'kategori' 		=> $kategori,
				'harga' 		=> $harga,
				'diskon' 		=> $diskon,
				'foto' 			=> $gambar
			);
		}

		$this->modelKarirpad->update('barang', $data_update, $where);

		$this->session->set_flashdata('messages', '<div class="alert alert-success " role="alert"><strong>Sukses!</strong> Barang berhasil diubah.	</div>');

		redirect('Barang');
	}

	public function delete($kd_barang){
		$data = array('kd_barang' => $kd_barang);

		$dataBarang = $this->modelKarirpad->getWhere('barang', $data)->result();
		
		foreach($dataBarang as $dBarang){
			$foto = $dBarang->foto;
		}

		$path = base_url().'/assets/img/uploads/'.$foto;
		if (file_exists($path)) {
			chmod($path, 0644);
				unlink($path);
		}else {
			echo 'Image file does not exist';
		}

		$this->modelKarirpad->delete('barang', $data);

		$this->session->set_flashdata('messages', '<div class="alert alert-success " role="alert"><strong>Sukses!</strong> Barang berhasil dihapus.	</div>');

		redirect('Barang');
	}
}
