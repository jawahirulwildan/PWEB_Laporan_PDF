<?php include 'config.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Siswa SMK Coding</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
        <br>
        <center><h2>Data Siswa</h2></center>
		<center><h2>Sekolah Menengah Kejurusan Negeri Coding</h2></center>
		<br>
		<div>
            <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp Tambah</a>
            <a href="" class="btn btn-warning"><i class="fa fa-edit"></i> &nbsp Edit</a>
			<a href="proses-pdf.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp Print</a>
			<br>
			<br>
		</div>

		<table class="table table-bordered">
			<thead>				
				<tr>
                    <th style="text-align: center;">No</th>    
					<th style="text-align: center;">NIS</th>
					<th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Jenis Kelamin</th>
					<th style="text-align: center;">Alamat</th>					
					<th style="text-align: center;">No Telepon</th>					
				</tr>				
			</thead>
			<tbody>
				<?php
				$no=1;
                $result = mysqli_query($db, "SELECT * FROM siswa");
				while($res = mysqli_fetch_array($result)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $res['nis'] ?></td>
                        <td><?php echo $res['nama'] ?></td>
						<td><?php echo $res['jenis_kelamin'] ?></td>						
						<td><?php echo $res['alamat'] ?></td>
                        <td><?php echo $res['telp'] ?></td>											
					</tr>
					<?php
				}
				?>				
			</tbody>
		</table>
	</div>
</body>
</html>