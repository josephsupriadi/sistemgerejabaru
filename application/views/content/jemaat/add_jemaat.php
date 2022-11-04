<body>
<div style="width: 1200px;" class="card ">
	<div class="card-header ">
		<h3>Form Add Jemaat</h3>
	</div>
	<div class="card-body">
		<form id="form-tambah-jemaat" method="post" action="<?= site_url('jemaat/insert') ?>"
			  enctype="multipart/form-data">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label class="form-label">NIK</label>
						<input required maxlength="16" class="form-control" name="nik">
					</div>
					<div class="form-group">
						<label class="form-label">Nomor Keluarga</label>
						<input required maxlength="16" class="form-control" name="nomor_keluarga">
					</div>
					<div class="form-group">
						<label class="form-label">Nama</label>
						<input required type="text" class="form-control" name="nama_jemaat">
					</div>
					<div class="form-group">
						<label class="form-label">Tempat Lahir</label>
						<input required type="text" class="form-control" name="tempat_lahir_jemaat">
					</div>
					<div class="form-group">
						<label class="form-label">Tanggal Lahir</label>
						<input required type="date" class="form-control" name="tanggal_lahir_jemaat">
					</div>
					<div class="form-group">
						<label for="jenis_kelamin_jemaat">Jenis Kelamin</label>
						<select required name="jenis_kelamin_jemaat" id="jenis_kelamin_jemaat" class="form-control">
							<option value="" disabled selected>-- PILIH --</option>
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label class="form-label">Alamat</label>
						<input required type="text" class="form-control" name="alamat_jemaat">
					</div>
					<div class="form-group">
						<label class="form-label">Pekerjaan</label>
						<input required type="text" class="form-control" name="pekerjaan_jemaat">
					</div>
					<div class="form-group">
						<label class="form-label">Status</label>
						<select required name="status_jemaat" class="form-control">
							<option value="" disabled selected>-- PILIH --</option>
							<option value="Belum Menikah">Belum Menikah</option>
							<option value="Sudah Menikah">Sudah Menikah</option>
							<option value="Janda">Janda</option>
							<option value="Duda">Duda</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Foto</label>
						<input type="file" name="userfile" class="form-control">
					</div>
				</div>
			</div>

	</div>
		<div class="card-footer">
			<button type="submit" id="btn-save-jemaat" class="btn btn-success btn-sm">
				<i class="fa fa-save"></i> Simpan
			</button>
			<a href="<?= site_url('jemaat') ?>" class="btn btn-primary btn-sm">
				<i class="fa fa-reply"></i> Kembali
			</a>
		</div>
	</form>
</div>
</body>