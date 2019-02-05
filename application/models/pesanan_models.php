<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_Models extends CI_Model {
	public function tm_pesanan()
	{
		$tm_pesanan=$this->db ->get('tb_transaksi')
							  ->result();
		return $tm_pesanan;
	}
	public function detail_pesanan($a)
	{
		return $this->db->where('id_transaksi', $a)
					    ->get('tb_transaksi')
					    ->row();
	}
}

/* End of file M_pesanan.php */
/* Location: ./application/models/M_pesanan.php */