<body style="padding: 1% 2% 2% 1%">
<center><h2>Kategori</h2></center>
<hr>

<table id="tmbh" class="table table-hover table-stripped">
	<thead>
		<tr>
			<td>ID Kategori</td>
			<td>Nama Kategori</td>
		</tr>
	</thead>
	<tbody>
		<?php $no = 0;foreach ($tampil_kategori as $kat):
			$no++;?>
		<tr>
			<td><?=$kat->id_kategori?></td>
			<td><?=$kat->nama_kategori?></td>
		</tr>
	<?php endforeach?>
	<?php
    if($this->session->flashdata('pesan')!= null){
      echo"<div class='alert alert-success' style='width:200px'>".$this->session->flashdata('pesan')."</div";
       }?>
	</tbody>
</table>
</body>