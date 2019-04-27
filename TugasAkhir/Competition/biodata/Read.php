<?php
	include "../connect.php";
	
	$NIS = $_POST["NIS"];
	$NamaPeserta = $_POST["NamaPeserta"];
	$TanggalLahir = $_POST["TanggalLahir"];
	$NoHP = $_POST["NoHP"];
	$Sekolah = $_POST["Sekolah"];

	if(!empty($NIS) && 
	!empty( $NamaPeserta)  &&
	!empty( $TanggalLahir) &&
	!empty( $NoHP) &&
	!empty($Sekolah))
	{
		$query = "INSERT INTO biodata (NIS, NamaPeserta, TanggalLahir, NoHP, Sekolah)
				VALUES ('$NIS','$NamaPeserta','$TanggalLahir','$NoHP','$Sekolah')";
				
		$result = mysqli_query($connect,$query);
		
		$num = mysqli_affected_rows($connect);
		
		if($num > 0){
			echo "<div class='ptext'>
				<span class='border'>
				Berhasil tambah data
				</span>
				</div>";
		}else{
			echo "<div class='ptext'>
				<span class='border'>
				Gagal tambah data
				</span>
				</div>";
		}
	}
	else {
		echo "<div class='ptext'>
			<span class='border'>
			Isi semua data dengan benar
			</span>
			</div>";
	}
?>
<?php
	$query = "SELECT * FROM biodata";
	$result = mysqli_query($connect, $query);
	$num = mysqli_num_rows($result);
?>

<html>
<body>
	<table border="1">
	<thead>
		<tr>
			<th>NIS</th>
			<th>Nama Peserta</th>
			<th>Tanggal Lahir</th>
			<th>No HP</th>
			<th>Sekolah</th>
		</tr>
	</thead>
		<?php
			if($num > 0){
				$no = 1;
				while($data = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo 	"<td>" . $data['NIS'] . "</td>";
					echo 	"<td>" . $data['NamaPeserta'] . "</td>";
					echo 	"<td>" . $data['TanggalLahir'] . "</td>";
					echo 	"<td>" . $data['NoHP'] . "</td>";
					echo 	"<td>" . $data['Sekolah'] . "</td>";
					echo "</tr>";
					$no++;
				}
			}else{
				echo "<td colspan='3'>Tidak ada data</td>";
			}
		?>
	</table>
	<diV class="positionborder">
	<a class="bg-blue" href="<?=$url.'index.html'?>">
        Kembali
	</a>
	</div>
</body>
</html>
<style>
	body{
	background-image:url('../img/image1.jpg');
	background-size:100%;
	}
	table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	background: #fff;
	font-family: 'Helvetica', sans-serif;
	}

	tr:nth-of-type(odd) { 
	background: #eee; 
	}

	th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

	td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

	.ptext{
  	text-align:center;
  	color:#000;
  	font-size:17px;
  	letter-spacing:3px;
	text-transform:uppercase;
	font-family: 'Helvetica', sans-serif;
	}

	.ptext .border{
	border-radius: 10px;
  	background-color:#3498db;
  	color:#fff;
	padding:20px;
	letter-spacing:1px;
	}

	.bg-blue{
  	background: #3498db;
  	color: #fff;
  	padding: 8px 12px;
  	border-radius: 3px;
  	cursor: pointer;
	text-decoration: none;
	letter-spacing:1px;
	text-transform:uppercase;
	font-family: 'Helvetica', sans-serif;
	}

	.positionborder{
	text-align:center;
	}
</style>