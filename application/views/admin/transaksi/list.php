
		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
		<tr>
			<th>NO</th>
			<th>Pelanggan</th>
			<th>Kode Order</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>Jumlah Item</th>
			<th>Status</th>
			<th></th>

		</tr>
		</thead>
		<tbody>
		<?php $i=1; foreach($header_transaksi as $header_transaksi) { ?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $header_transaksi->nama_pelanggan ?>
				<br><small>
					Telepon : <?php echo $header_transaksi->telepon ?>
					<br>
					Email : <?php echo $header_transaksi->email ?>
					<br>
					Alamat Kirim : <?php echo $header_transaksi->alamat ?>
				</small>
			</td>
			<td><?php echo $header_transaksi->kode_transaksi ?></td>
			<td><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>
			<td><?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
			<td><?php echo $header_transaksi->total_item ?></td>
			<td><?php echo $header_transaksi->status_bayar ?></td>
			<td>
				<a class="btn btn-success" href="<?php echo base_url('admin/transaksi/detail/' .$header_transaksi->kode_transaksi) ?>">Detail</a>
				<a class="btn btn-warning" href="<?php echo base_url('admin/transaksi/pdf/' .$header_transaksi->kode_transaksi) ?>">Cetak</a>
				
			</td>
		</tr>
		<?php $i++; } ?>
		</tbody>
		</table>
	</div>
</div>
</div>