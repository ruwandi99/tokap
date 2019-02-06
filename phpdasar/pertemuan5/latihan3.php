<?php 
$mahasiswa = [
	["Ruwandi","043040023", "Rekayasa Perangkat Lunak", "Ruwandi@RPL.ac.id"],
	["Ardiansyah","033040001", "Tekhnik Informatika", "Ardiansyah@yahoo.com"],
	["Ariksa", "023040123", "Tekhnik Planologi", "Ariksa@gmail.com"] 
];
 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 
<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>
<ul>
	<li>Nama 	: <?= $mhs[0]; ?></li>
	<li>NRP  	: <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email 	: <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


 </body>
 </html>