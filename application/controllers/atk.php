<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login')!=TRUE) {
			redirect('admin/login','refresh');
		}
		$this->load->model('atk_models','atk');
	}

	public function index()
	{
		$data['tampil_barang']=$this->atk->tampil();
		$data['kategori']=$this->atk->data_kategori();
		$data['konten']="v_atk";
		$data['judul']="Daftar Barang";
		$this->load->view('template', $data);
	}
	public function barang_user()
	{
		$data['tampil_barang']=$this->atk->tampil();
		$data['kategori']=$this->atk->data_kategori();
		$data['konten']="v_atk_user";
		$data['judul']="Daftar Barang";
		$this->load->view('template', $data);
	}
	public function toko()
	{
		$data['tampil_barang']=$this->atk->tampil();
		$data['kategori']=$this->atk->data_kategori();
		$data['konten']="toko";
		$data['judul']="Toko AESOFIS";
		$this->load->view('template', $data);
	}
	public function tambah()
	{
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'trim|required');
		$this->form_validation->set_rules('merek', 'merek', 'trim|required');
		$this->form_validation->set_rules('harga_barang', 'harga_barang', 'trim|required');
		$this->form_validation->set_rules('stok', 'stok', 'trim|required');
		$this->form_validation->set_rules('warna', 'warna', 'trim|required');
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');
		if ($this->form_validation->run()==TRUE) {
			$config['upload_path'] = './asset/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000';
			$config['max_width']  = '5000';
			$config['max_height']  = '5000';
			if ($_FILES['foto_cover']['name']!="") {
				$this->load->library('upload', $config);

				if (! $this->upload->do_upload('foto_cover')) {
					$this->session->set_flashdata('pesan', $this->upload->display_errors());
				}else {
					if ($this->atk->simpan_barang($this->upload->data('file_name'))) {
						$this->session->set_flashdata('pesan', 'Sukses menambah ');
					}else{
						$this->session->set_flashdata('pesan', 'Gagal menambah');
					}
					redirect('atk','refresh');
				}
			}else{
				if ($this->atk->simpan_barang('')) {
					$this->session->set_flashdata('pesan', 'Sukses menambah');
				}else{
					$this->session->set_flashdata('pesan', 'Gagal menambah');
				}
				redirect('atk','refresh');
			}
			
		}else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('atk','refresh');
		}
	}
	public function edit_barang($id)
	{
		$data=$this->atk->detail($id);
		echo json_encode($data);
	}
	public function barang_update()
	{
		if($this->input->post('edit')){
			if($_FILES['foto_cover']['name']==""){
				if($this->atk->edit_barang()){
					$this->session->set_flashdata('pesan', 'Sukses update');
					redirect('atk');
				} else {
					$this->session->set_flashdata('pesan', 'Gagal update');
					redirect('atk');
				}
			} else {
				$config['upload_path'] = './asset/img/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']  = '20000';
				$config['max_width']  = '5024';
				$config['max_height']  = '5768';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('foto_cover')){
					$this->session->set_flashdata('pesan', 'Gagal Upload');
					redirect('atk');
				}
				else{
					if($this->atk->edit_barang_dengan_foto($this->upload->data('file_name'))){
						$this->session->set_flashdata('pesan', 'Sukses update');
						redirect('atk');
					} else {
						$this->session->set_flashdata('pesan', 'Gagal update');
						redirect('atk');
					}
				}
			}
			
		}

	}
	public function hapus($id_barang='')
	{
		if ($this->atk->hapus_barang($id_barang)) {
			$this->session->set_flashdata('pesan', 'Sukses Hapus barang');
			redirect('atk','refresh');
		}else{
			$this->session->set_flashdata('pesan', 'Gagal Hapus barang');
			redirect('atk','refresh');
		}
	}

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */