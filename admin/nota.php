
<html>
<head>
	<title>Print kwitansi</title>
	<style type="text/css">
			.lead {
				font-family: "Verdana";
				font-weight: bold;
			}
			.value {
				font-family: "Verdana";
			}
			.value-big {
				font-family: "Verdana";
				font-weight: bold;
				font-size: large;
			}
			.td {
				valign : "top";
			}
			@page {
				size: A4;
				margin : 0px;
			}
	</style>
	<!-- <script type="text/javascript">
		var beforePrint = function() {
		};
		var afterPrint = function() {
			document.location.href = '/{{hospitalName}}';
		};
		if (window.matchMedia) {
			var mediaQueryList = window.matchMedia('print');
			mediaQueryList.addListener(function(mql) {
				if (mql.matches) {
					beforePrint();
				} else {
					afterPrint();
				}
			});
		}
		window.onbeforeprint = beforePrint;
		window.onafterprint = afterPrint;
    </script> -->
</head>
<body>
<?php
include "../koneksi.php";
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM `order_detail` a LEFT JOIN pelanggan b ON b.id_pelanggan=a.id_pelanggan WHERE a.faktur='$id'");
$row = $data->fetch_array();
?>
	<table border="1" style="border-collapse: 10px;">
		<tr>
			<td width="80px"><img src="../images/logo2.png" width="80px" /></td>
			<td>
				<table cellpadding="4">
					<tr>
						<td width="200px"><div class="lead">No Faktur:</td>
						<td><div class="value"><?= $row['faktur'] ?></div></td>
					</tr>
					<tr>
						<td><div class="lead">Telah terima dari:</div></td>
						<td><div class="value"><?= $row['nama'] ?></div></td>
					</tr>
					<tr>
						<td><div class="lead">Untuk Pembayaran:</div></td>
						<td><div class="value"><?= $row['layanan'] ?></div></td>
					</tr>
					<tr>
						<td><div class="lead">Tanggal:</div></td>
						<td><div class="value"><?= date('Y-m-d') ?></div></td>
					</tr>
					<tr>
						<td><div class="lead">Rupiah:</div></td>
						<td><div class="value-big">Rp. <?= number_format($row['total']) ?></div></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><div class="lead">Kasir:</div></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>______________________________</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><div class="value">iShoes Laundry</div></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<script src="../asset/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			window.print();
		});
	</script>
</body>
</html>