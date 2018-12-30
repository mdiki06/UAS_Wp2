<section class="content">
<div class="row">
<div class="col-sm-12">
<div class="box box-success">
<div class="box-header">
<h3 class="box-title"> Tambah Anggota </h3>
</div>
	<div class="box-body">
	<form action="<?=site_url('anggota/create');?>" method="post" accept-charset="utf-8">
		<div class="box-body">
			<div class="form-group">
			<label>Nama Anggota</label>
			<input type="text" name="nama_anggota" class="form-control" value="" placeholder="Masukkan Nama Anggota" required="required">
			</div>

			<div class="form-group">
			<label>Gender</label>
			<select name="gender" size="1" class="form-control">
				<option value="Laki - Laki">Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
			</div>
		
			<div class="form-group">
			<label>No Telepon</label>
			<input type="number" name="no_telepon" class="form-control" value="" placeholder="Masukkan No Telepon" required="required" min="0">
			</div>

			<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control" value="" placeholder="Masukkan Alamat" min="0">
			</div>

			<div class="form-group">
			<label for="exampleInputtext1">E-mail</label>
			<input type="email" name="email" class="form-control" id="exampleInputtext1" placeholder="E-mail" required="required">
			</div>

			<div class="form-group">
			<label for="exampleInputtext1">Password</label>
			<input type="text" name="password" class="form-control" id="exampleInputtext1" placeholder="Password" required="required">
			</div>

			<div class="box-footer">
			<button type="button" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i>Batal</button>
			<button type="submit" class="btn btn-success pull-right"><i class="fa fa-send"></i>Kirim</button>
			</div>
		</div>
	</form>
</div>
</div>
</div>
</div>
</section>