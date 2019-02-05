<body style="padding: 1% 2% 2% 1%;">
<center><h2>Daftar barang</h2></center>
<hr>
<?= $this->session->flashdata('pesan'); ?>
<center>
  <a href="#tambah" data-toggle="modal" class="btn btn-warning">+Tambah</a>
</center>
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
      <td><a href="#edit" onclick="edit('<?= $barang->id_barang ?>')" data-toggle="modal" class="btn btn-success">Ubah</a>
        <a href="<?=base_url('index.php/atk/hapus/'.$barang->id_barang)?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Hapus</a></td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>

<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span></button>
 <center>       <h4 class="modal-titile">Tambah barang</h4></center>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/atk/tambah')?>" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td><input type="hidden" name="id_barang" class="form-control"></td>
            </tr>
            <tr>
              <td>Nama barang</td>
              <td><input type="text" name="nama_barang" required class="form-control"></td>
            </tr>
            <tr>
              <td>Merek</td>
              <td><input type="text" name="merek" required class="form-control"></td>
            </tr>
            <tr>
              <td>Harga</td>
              <td><input type="text" name="harga_barang" required class="form-control"></td>
            </tr>
            <tr>
              <td>Stok</td>
              <td><input type="text" name="stok" required class="form-control"></td>
            </tr>
            <tr>
              <td>Warna</td>
              <td><input type="text" name="warna" required class="form-control"></td>
            </tr>
            <tr>
              <td>Kategori</td>
              <td><select name="id_kategori" class="form-control">
                <option></option>
                <?php foreach($kategori as $kat): ?>
                <option value="<?=$kat->id_kategori?>"><?=$kat->nama_kategori?></option>
                <?php endforeach ?>
              </select></td>
            </tr>
            <tr>
              <td>Foto Cover</td>
              <td><input type="file" name="foto_cover" class="form-control"></td>
            </tr>
          </table>
          <input type="submit" name="create" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <center><h4 class="modal-titile">Edit barang</h4></center>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/atk/barang_update')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_barang_lama" id="id_barang_lama">
          <table>
            <tr>
              <td><input type="hidden" name="id_barang" id="id_barang" class="form-control"></td>
            </tr>
            <tr>
              <td>Nama barang</td>
              <td><input type="text" name="nama_barang" id="nama_barang" required class="form-control"></td>
            </tr>
            <tr>
              <td>Merek</td>
              <td><input type="text" name="merek" required id="merek" class="form-control"></td>
            </tr>
            <tr>
              <td>Harga</td>
              <td><input type="text" name="harga_barang" required id="harga_barang" class="form-control"></td>
            </tr>
            <tr>
              <td>Stok</td>
              <td><input type="text" name="stok" required id="stok" class="form-control"></td>
            </tr>
            <tr>
              <td>Warna</td>
              <td><input type="text" name="warna" required id="warna" class="form-control"></td>
            </tr>
            <tr>
              <td>Kategori</td>
              <td><select name="id_kategori" class="form-control" id="id_kategori">
                <option></option>
                <?php foreach($kategori as $kat): ?>
                <option value="<?=$kat->id_kategori?>"><?=$kat->nama_kategori?></option>
                <?php endforeach ?>
              </select></td>
            </tr>
            <tr>
              <td>Foto Cover</td>
              <td><input type="file" name="foto_cover" id="foto_cover" class="form-control"></td>
            </tr>
          </table>
          <input type="submit" name="edit" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function edit(a){
    $.ajax({
      type:"post",
      url:"<?=base_url()?>index.php/atk/edit_barang/"+a,
      dataType:"json",
      success:function(data){
        $("#id_barang").val(data.id_barang);
        $("#nama_barang").val(data.nama_barang);
        $("#merek").val(data.merek);
        $("#harga_barang").val(data.harga_barang);
        $("#stok").val(data.stok);
        $("#warna").val(data.warna);
        $("#id_kategori").val(data.id_kategori);
        $("#id_barang_lama").val(data.id_barang);
      }
    })
  }
</script>
</body>