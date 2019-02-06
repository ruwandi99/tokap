<?php 
// $_GET
$mahasiswa = [
	[
		"nama" => "Ruwandi", 
	 	"nrp" => "043040023",
	 	"email" => "ruwandi@rpl.ac.id",
	 	"jurusan" => "Rekayasa Perangkat Lunak",
	 	"gambar" => "ruwandi.jpg" 
	  ],
	  [
		"nama" => "Ardiansyah", 
	 	"nrp" => "033040001",
	 	"email" => "ardiansyah@gmail.com",
	 	"jurusan" => "Tekhik Informatika",
	 	"gambar" => "ardiansyah.jpg" 
	  ]
];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>GET</title>
 </head>
 <body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"];  ?>&nrp=<?= $mhs["nrp"];  ?>&email=<?= $mhs["email"];  ?>&jurusan=<?= $mhs["jurusan"];  ?>&gambar=<?= $mhs["gambar"];  ?>"><?= $mhs["nama"];  ?></a>	
	</li>
<?php endforeach; ?>
</ul>
 
 </body>
 </html>