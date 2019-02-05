<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class kategori_models extends CI_Model
{

	public function menampilkan()
		{
			$tampil= $this->db->get('tb_kategori')->result();
			return $tampil;
		}	
		public function simpan_kat()
		{
			$object=array(
				'id_kategori'=>$this->input->post('id_kategori'),
				'nama_kategori'=>$this->input->post('nama_kategori'),
				);
			return $this->db->insert('tb_kategori', $object);
		}

	public function hapus($id_kategori)
	{
		return $this->db->where('id_kategori',$id_kategori)->delete('tb_kategori');
	}
	
	public function detail($a)
	{
		return $this->db->where('id_kategori', $a)->get('tb_kategori')->row();
	}
	public function edit_kat()
	{
		$object=array(
			'id_kategori'=>$this->input->post('id_kategori'),
			'nama_kategori'=>$this->input->post('nama_kategori')
		);
		return $this->db->where('id_kategori',$this->input->post('id_kategori_lama'))->update('tb_kategori',$object);
	}
}

/* End of file m_kategori.php */
?>