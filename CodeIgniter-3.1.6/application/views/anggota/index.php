<section class="content">
<div class="row">
<div class="col-sm-12">
<div class="box box-success">
<div class="box-header">
<h3 class="box-title"> Lihat Anggota </h3>
</div>
<div class="box-body">
	<div class="table.responsive">
		<table class="table table.striped" id="example1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Anggota</th>
			<th>Gender</th>
			<th>No Telepon</th>
			<th>Alamat</th>
			<th>E-Mail</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($show as $key => $data) {
		?>
		<tr>
			<td><?=$key+1;?></td>
			<td><?=$data->nama_anggota;?></td>
			<td><?=$data->gender;?></td>
			<td><?=$data->no_telepon;?></td>
			<td><?=$data->alamat;?></td>
			<td><?=$data->email;?></td>
			<td><?=$data->password;?></td>
			

		
			<td>
				<a href="#" class="btn btn-xs btn-success">Detail</a>
				<a href="#" class="btn btn-xs btn-warning">Edit</a>
				<a href="#" class="btn btn-xs btn-danger">Delete</a>
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