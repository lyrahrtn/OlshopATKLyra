<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class atk_models extends CI_Model {
    public function tampil()
    {
        $tm_barang=$this->db
                      ->join('tb_kategori','tb_kategori.id_kategori=tb_barang.id_kategori')
                      ->get('tb_barang')
                      ->result();
        return $tm_barang;
    }
    public function data_kategori()
    {
        return $this->db->get('tb_kategori')
                        ->result();
    }
    public function simpan_barang($file_cover)
    {
        if ($file_cover=="") {
             $object = array(
                'id_barang' => $this->input->post('id_barang'), 
                'nama_barang' => $this->input->post('nama_barang'), 
                'merek' => $this->input->post('merek'), 
                'harga_barang' => $this->input->post('harga_barang'),
                'stok' => $this->input->post('stok'), 
                'warna' => $this->input->post('warna'),  
                'id_kategori' => $this->input->post('id_kategori')
             );
        }else{
            $object = array(
                'id_barang' => $this->input->post('id_barang'), 
                'nama_barang' => $this->input->post('nama_barang'), 
                'merek' => $this->input->post('merek'), 
                'harga_barang' => $this->input->post('harga_barang'),
                'stok' => $this->input->post('stok'), 
                'warna' => $this->input->post('warna'),  
                'id_kategori' => $this->input->post('id_kategori'),
                'foto_cover' => $file_cover
             );
        }
        return $this->db->insert('tb_barang', $object);
    }
    public function detail($a)
    {
        $tm_barang=$this->db
                      ->join('tb_kategori', 'tb_kategori.id_kategori=tb_barang.id_kategori')
                      ->where('id_barang', $a)
                      ->get('tb_barang')
                      ->row();
        return $tm_barang;
    }
    public function edit_barang()
    {
        $data = array(
            'id_barang' => $this->input->post('id_barang'), 
            'nama_barang' => $this->input->post('nama_barang'), 
            'merek' => $this->input->post('merek'), 
            'harga_barang' => $this->input->post('harga_barang'),
            'stok' => $this->input->post('stok'), 
            'warna' => $this->input->post('warna'),  
            'id_kategori' => $this->input->post('id_kategori')
            );

        return $this->db->where('id_barang', $this->input->post('id_barang_lama'))
                        ->update('tb_barang', $data);
    }
    public function edit_barang_dengan_foto($file_cover)
    {
        $data = array(
            'id_barang' => $this->input->post('id_barang'), 
            'nama_barang' => $this->input->post('nama_barang'), 
            'merek' => $this->input->post('merek'), 
            'harga_barang' => $this->input->post('harga_barang'),
            'stok' => $this->input->post('stok'), 
            'warna' => $this->input->post('warna'),  
            'id_kategori' => $this->input->post('id_kategori'),
            'foto_cover' => $file_cover

            );

        return $this->db->where('id_barang', $this->input->post('id_barang_lama'))
                        ->update('tb_barang', $data);
    }
    public function hapus_barang($id_barang='')
    {
        return $this->db->where('id_barang', $id_barang)
                    ->delete('tb_barang');
    }
    

}

/* End of file M_barang.php */
/* Location: ./application/models/M_barang.php */