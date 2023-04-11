<?php
include '../../function/connect.php';

if (isset($_GET['tahun'])) {
	$tgl = $_GET['tahun'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Print Data Alat Tahun <?php echo $tgl; ?>
	</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="../../assets/img/favicon.png" rel="icon">
	<link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="../../https://fonts.gstatic.com" rel="preconnect">
	<link href="../../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="../../assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>


	<br>
	<h1 style="text-align: center">
		Laporan Alat Tahun <?php echo $tgl; ?>

	</h1>

	<div class="col-md-12">
		<div class="card info-card sales-card">
			<div class="card-body">
				<h5 class="card-title">Grafik Alat</h5>

				<div class="d-flex align-items-center">
					<div class="w-100">
						<canvas id="myChart"></canvas>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<table class="table datatable">
		<thead>
			<tr>
				<th scope="col">No.</th>
				<th scope="col">Nama User</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Nama Alat</th>
				<th scope="col">HM</th>
				<th scope="col">Status</th>
				<th scope="col">Keterangan</th>
			</tr>
		</thead>
		<?php
		$no = 1;
		$query = mysqli_query($koneksi, "SELECT * FROM alat WHERE YEAR(tanggal) = '$tgl' ");
		$chart = mysqli_query($koneksi, "SELECT status, COUNT(*) as jumlah FROM alat WHERE YEAR(tanggal) = '$tgl' GROUP BY status");

        $chart_data = array();
        while ($row = mysqli_fetch_array($chart)) {
            $chart_data['status'][] = $row['status'];
            $chart_data['jumlah'][] = $row['jumlah'];
        }
		while ($data = mysqli_fetch_array($query)) {
		?>
			<tbody>
				<tr>
					<th scope="row"><?php echo $no++; ?></th>
					<td><?php echo $data['nama_user']; ?></td>
					<td><?php echo $data['tanggal']; ?></td>
					<td><?php echo $data['nama_alat']; ?></td>
					<td><?php echo $data['hm'] ?? ' '; ?></td>
					<td><?php echo $data['status']; ?></td>
					<td><?php echo $data['keterangan']; ?></td>
				</tr>
			</tbody>
		<?php
		}



		?>

	</table>

	
	<script>
		const ctx = document.getElementById('myChart');

		new Chart(ctx, {
			type: 'pie',
			data: {
				labels: <?php echo json_encode($chart_data['status']); ?>,
				datasets: [{
					label: '# Jumlah',
					data: <?php echo json_encode($chart_data['jumlah']); ?>,
					borderWidth: 1
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false
			}
		});
	</script>

	<script type="text/javascript">
		setTimeout(function() {
			window.print();
		}, 1500);
	</script>