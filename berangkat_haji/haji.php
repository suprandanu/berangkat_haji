<?php
	$name = test_input($_POST["haji"]);
	$url = 'https://sites.google.com/macros/exec?service=AKfycbyfd-1n79k0TDYFbcI4XI28zDdiK8aeCcWzLtNH97jfr3xoPpg&nomor='.$_POST['haji'];
	$content = file_get_contents($url);
	$json = json_decode($content, true);

	if ($json['status']=='error'){
		exit("Data tidak ditemukan");
	}
	
	
	$name="<br/>
			<table>
				<h3>Hasil</h3>
				<tr>
					<th></th>
				</tr>
				<tr>
					<td>Nama Porsi</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['nomor_porsi']."</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['nama']."</td>
				</tr>
				<tr>
					<td>Kabupaten/Kota</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['kab_kot']."</td>
				</tr>
				<tr>
					<td>Provinsi</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['provinsi']."</td>
				</tr>
				<tr>
					<td>Kuota</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['kuota']."</td>
				</tr>
				<tr>
					<td>Posisi Porsi</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['posisi_porsi']."</td>
				</tr>
				<tr>
					<th>Perkiraan Berangkat</th>
				</tr>
				<tr>
					<td>Hijriah</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['perkiraan_berangkat']['hijriah']."</td>
				</tr>
				<tr>
					<td>Masehi</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['perkiraan_berangkat']['masehi']."</td>
				</tr>
			</table>
			
		";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $name;
?>