<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $title ?> </title>
	<style type="text/css">
		body{
			font-family: Arial;
			font-size: 12px;
		}
		.cetak{
			width: 19cm;
			height: 30cm;
		}
		table{
			border: solid thin #000;
			border-collapse: collapse;
		}
		td, th{
			padding: 2mm 9mm;
			text-align: left;
			vertical-align: top;
		}
		th{
			background-color: #F5F5F5;
			font-weight: bold;
		}
		h1{
			text-align: center;
			font-size: 16px;
		}
	</style>


<body>

</body onload="print()">
<div class="cetak">
	<h1><img src="<?php echo base_url('asset/upload/image/' .$site->logo) ?>" width="20%"> <div class="clearfix"></div>Detail Transaksi <?php echo $site->namaweb ?></h1>
	<table class="table table-bordered" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Nama Pelanggan</th>
				<th><?php echo $header_transaksi->nama_pelanggan ?></th>
			</tr>
			<tr>
				<th width="20%">Kode Transaksi</th>
				<th><?php echo $header_transaksi->kode_transaksi ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanggal Pembelian</td>
				<td><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>

			</tr>
			<tr>
				<td>Status Pembayaran</td>
				<td><?php echo $header_transaksi->status_bayar ?></td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_bayar)) ?></td>

			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td>Rp. <?php echo number_format($header_transaksi->jumlah_bayar,'0',',','.') ?></td>
			</tr>
			<tr>
				<td>Pembayaran Dari</td>
				<td><?php echo $header_transaksi->nama_bank ?> No.Rekening <?php echo $header_transaksi->rekening_pembayaran ?> an <?php echo $header_transaksi->rekening_pelanggan ?></td>
			</tr>
			<tr>
				<td>Pembayaran Ke</td>
				<td><?php echo $header_transaksi->bank ?> No.Rekening <?php echo $header_transaksi->nomor_rekening ?> an <?php echo $header_transaksi->nama_pemilik ?></td>
			</tr>
			<tr>
				<td>Bukti Bayar</td>
				<td><?php if($header_transaksi->bukti_bayar=="") {  echo 'Belum Bayar';}else{ ?>
					<img src="<?php echo base_url('asset/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="40%">
				<?php } ?>
				</td>
			</tr>
			
		</tbody>
		
	</table>

	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>NO</th>
				<th>Kode Produk</th>
				<th>Nama Produk</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Total Harga</th>
				

			</tr>
		</thead>
		<tbody>
			<?php $i=1; foreach($transaksi as $transaksi) { ?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $transaksi->kode_produk ?></td>
				<td><?php echo $transaksi->nama_produk ?></td>
				<td><?php echo number_format($transaksi->jumlah) ?></td>
				<td><?php echo number_format($transaksi->harga) ?></td>
				<td><?php echo number_format($transaksi->total_harga) ?></td>
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>
</div>
</html>