<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="gaya.css">
	<title>Import Excel To MySQL</title>
</head>
<div class="content-table">

	<body>
		<form class="" action="" method="post" enctype="multipart/form-data">
			<input type="file" name="excel" required value="">
			<button type="submit" name="import">Import</button>
		</form>
		<hr>
		<div class="tabel">
			<table border="1" width="1000px" height="200px">
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Pesanan</td>
					<td>Tanggal</td>
				</tr>
		</div>
		<?php
		$i = 1;
		$rows = mysqli_query($conn, "SELECT * FROM tb_data");
		foreach ($rows as $row) :
		?>
			<tr>
				<td>
					<?php echo $row["nom"]; ?>
				</td>
				<td>
					<?php echo $row["nama"]; ?>
				</td>
				<td>
					<?php echo $row["email"]; ?>
				</td>
				<td>
					<?php echo $row["pesanan"]; ?>
				</td>
				<td>
					<?php echo $row["tanggal"]; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
		<?php
		if (isset($_POST["import"])) {
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
			$fileExtension = strtolower(end($fileExtension));
			$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excelReader/excel_reader2.php';
			require 'excelReader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach ($reader as $key => $row) {
				$nom = $row[0];
				$nama = $row[1];
				$email = $row[2];
				$pesanan = $row[3];
				$tanggal = $row[4];
				mysqli_query($conn, "INSERT INTO tb_data VALUES('$nom', '$nama', '$email', '$pesanan', '$tanggal')");
			}

			echo
			"
			<script>
			alert('Succesfully Imported');
			document.location.href = '';
			</script>
			";
		}
		?>
	</body>

</html>