<html>
<head>
	<title>Praktikum Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	
	<script language="javascript">
	function cekform(){
		if(document.mhs.txtnama.value==""){
			alert('Nama Harus Diisi');
			document.mhs.txtnama.focus();
			return false;
		} else if(document.mhs.txtalamat.value==""){
			alert('Alamat Harus Diisi');
			document.mhs.txtalamat.focus();
			return false;
		} else if(document.mhs.txtpekerjaan.value==""){
			alert('Pekerjaan Harus Diisi');
			document.mhs.txtpekerjaan.focus();
			return false;
		} else {
			return true;
		}
	}
	</script>
	
</head>
<body>
	<div class="judul">
		<h1>Praktikum Pemrograman Web</h1>
		<h2>Politeknik Negeri Batam</h2>
	</div>
	<br>
	<a href="index.php">Lihat Semua Data</a>
	<br>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" name="mhs" method="post" onsubmit="return cekform()">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" id="txtnama" name="nama"></td>
			<tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" id="txtalamat" name="alamat"></td>
			<tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" id="txtpekerjaan" name="pekerjaan"></td>
			<tr>
			<tr>
				<td><input type="submit" value="Simpan"></td>
			<tr>
		</table>
	</form>
</body>
</html>