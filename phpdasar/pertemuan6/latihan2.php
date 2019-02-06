<?php 
// $mahasiswa = [
// 	["Ruwandi" ,"043040023", "ruwandi@rpl.ac.id" ,"Rekayasa Perangkat Lunak"],
// 	["Ardiansyah" ,"033040001", "ardiansyah@gmail.com" ,"Tekhik Informatika"]
// ];

// Array Associative
// definisi nya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 	<?php foreach( $mahasiswa as $mhs ) : ?>
 		<ul>
 			<li>
 				<img src="img/<?= $mhs["gambar"];  ?>">	
 			</li>
 			<li>Nama : <?= $mhs["nama"]; ?></li>
 			<li>NRP : <?= $mhs["nrp"];  ?></li>
 			<li>Jurusan : <?= $mhs["jurusan"];  ?></li>
 			<li>Email : <?= $mhs["email"];  ?></li>
 		</ul>
 	<?php endforeach; ?>


 
 </body>
 </html>