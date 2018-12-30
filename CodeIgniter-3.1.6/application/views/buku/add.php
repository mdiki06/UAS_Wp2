<section class="content">
<div class="row">
<div class="col-sm-12">
<div class="box box-success">
<div class="box-header">
<h3 class="box-title"> Tambah Buku </h3>
</div>
	<div class="box-body">
	<form action="<?=site_url('buku/create');?>" method="post" accept-charset="utf-8">
		<div class="box-body">
			<div class="form-group">
			<label>Judul Buku</label>
			<input type="text" name="judul_buku" class="form-control" value="" placeholder="Masukkan Judul Buku" required="required">
			</div>

			<div class="form-group">
			<label>Kategori</label>
			<select name="id_kategori" size="1" class="form-control">
				<?php 
				foreach ($show_kategori as $key => $data_kategori) {
					echo '<option value="'.$data_kategori->id_kategori.'">'.$data_kategori->nama_kategori.'</option>';
				}
				?>
			</select>
			</div>
		
			<div class="form-group">
			<label>Pengarang</label>
			<input type="text" name="pengarang" class="form-control" value="" placeholder="Masukkan Nama Pengarang" required="required">
			</div>

			<div class="form-group">
			<label>Tahun Terbit</label>
			<input type="number" name="tahun_terbit" class="form-control" value="" min="0">
			</div>

			<div class="form-group">
			<label for="exampleInputtext1">Penerbit</label>
			<input type="text" name="penerbit" class="form-control" id="exampleInputtext1" placeholder="Penerbit" required="required">
			</div>

			<div class="form-group">
			<label for="exampleInputtext1">ISBN</label>
			<input type="text" name="isbn" class="form-control" id="exampleInputtext1" placeholder="ISBN" required="required">
			</div>

			<div class="form-group">
			<label for="exampleInputtext1">Jumlah</label>
			<input type="text" name="jumlah_buku" class="form-control" value="" placeholder="0" required="required" min="0">
			</div>

			<div class="form-group">
			<label for="exampleInputPassword1">Rak</label>
			<select name="lokasi" size="1" class="form-control">
				<option value="1">Rak 1</option>
				<option value="2">Rak 2</option>
				<option value="3">Rak 3</option>
				<option value="4">Rak 4</option>
				<option value="5">Rak 5</option>
			</select>
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