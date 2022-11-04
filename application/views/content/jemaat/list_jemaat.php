
<div style="width: 1200px;" class="card">
	<div class="card-header bg-white text-dark">
		<h3 class="card-title">Data Jemaat</h3>
	</div>
	<div  class="card-body">
		<a href="<?=site_url('jemaat/tambah')?>" class="btn btn-outline-dark btn-sm mb-3">
			<i class="fa fa-plus"></i> Tambah Data Jemaat
		</a>
		<a href="<?=site_url('jemaat/print')?>" class="btn btn-outline-dark btn-sm mb-3">
			<i class="fa fa-print"></i> Print
		</a>
<!--		<a href="--><?//=site_url('jemaat/pdf')?><!--" class="btn btn-primary btn-sm mb-3">-->
<!--			<i class="fa fa-file-pdf-o"></i> Export PDF-->
<!--		</a>-->
		<table class="table table-bordered table-hover table-sm">
			<thead>
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>Nomor Keluarga</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Pekerjaan</th>
				<th>Status</th>
				<th>Foto</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$no = 1;
			foreach ($jemaats as $j) {
				?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $j->nik ?></td>
					<td><?= $j->nomor_keluarga ?></td>
					<td><?= $j->nama_jemaat ?></td>
					<td><?= $j->tempat_lahir_jemaat ?></td>
					<td><?= $j->tanggal_lahir_jemaat ?></td>
					<td><?= $j->jenis_kelamin_jemaat ?></td>
					<td><?= $j->alamat_jemaat ?></td>
					<td><?= $j->pekerjaan_jemaat ?></td>
					<td><?= $j->status_jemaat ?></td>
					<td><img src="<?= base_url().'/foto/' . $j->foto ?>" width="100px;"></td>
					<td>
						<a href="<?=site_url("jemaat/ubah/$j->nik")?>" class="btn btn-warning btn-sm">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="#" data-id="<?=$j->nik?>" class="btn btn-danger btn-sm btn-delete-jemaat">
							<i class="fa fa-trash"></i>
						</a>
					</td>
				</tr>
				<?php
			}
			?>

			</tbody>
		</table>
	</div>
</div>
<div class="modal" id="modal-confirm-delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h4>Anda Yakin Hapus data ini?</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Tidak</button>
				<button type="button" class="btn btn-danger" id="btn-delete">Hapus</button>
			</div>
		</div>
	</div>
</div>
<form id="form-delete" method="post" action="<?= site_url('jemaat/delete') ?>">

</form>
    <script>
        $(function() {
            let idJemaat = 0
            $(".btn-delete-jemaat").on("click", function() {
                idJemaat = $(this).data("id");
                console.log(idJemaat);
                $("#modal-confirm-delete").modal('show');
            });
            $("#btn-delete").on("click", function() {
                //panggil url untuk hapus data
                let inputId = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "id_jemaat")
                    .val(idJemaat);
                let formDelete = $("#form-delete");
                formDelete.empty().append(inputId);
                formDelete.submit();
                $("#modal-confirm-delete").modal('hide');
            });
        })
    </script>
