<body style="padding: 1% 2% 2% 1%;">
<center><h2>Daftar barang</h2></center>
<hr>
<?= $this->session->flashdata('pesan'); ?>
<table id="example" class="table table-hover table-striped">
  <thead>
    <tr>
      <td>No</td>
      <td>Foto Barang</td>
      <td>Nama Barang</td>
      <td>Merek</td>
      <td>Harga Barang</td>
      <td>Stok</td>
      <td>Warna</td>
      <td>Kategori</td>
      <td>Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php $no=0; foreach($tampil_barang as $barang):
    $no++; ?>
    <tr>
      <td><?= $no ?></td>
      <td><img src="<?=base_url('asset/img/'.$barang->foto_cover )?>" style="width: 40px"></td>
      <td><?= $barang->nama_barang ?></td>
      <td><?= $barang->merek ?></td>
      <td><?= $barang->harga_barang ?></td>
      <td><?= $barang->stok ?></td>
      <td><?= $barang->warna ?></td>
      <td><?= $barang->nama_kategori ?></td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
</body>