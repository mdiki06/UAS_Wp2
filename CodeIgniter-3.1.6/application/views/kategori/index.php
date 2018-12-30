<section class="content">
<div class="row">
<div class="col-sm-12">
<div class="box box-success">
<div class="box-header">
<h3 class="box-title"> Lihat Kategori </h3>
</div>
<div class="box-body">
	<div class="table.responsive">
		<table class="table table.striped" id="example1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($show as $key => $data) {
		?>
		<tr>
			<td><?=$key+1;?></td>
			<td><?=$data->nama_kategori;?></td>
			<td>
				<a href="#" class="btn btn-xs btn-success">Detail</a>
				<a href="<?=site_url('kategori/edit/'.$data->id_kategori);?>" class="btn btn-xs btn-warning">Edit</a>
				<a href="<?=site_url('kategori/delete/'.$data->id_kategori);?>" class="btn btn-xs btn-danger">Delete</a>
			</td>
		</tr>
		<?php
		}	
		?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>