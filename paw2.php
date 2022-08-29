<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Output PAW pertemuan 2</title>
	<style>
		body{
			background-color:#0AA1DD;
			color: #3A5BA0;
		}


		.box{
			width: 250px;
			background-color:#79DAE8 ;
			padding: 15px;
			border-radius: 15px;
			margin: 5% auto;
		}
		.box img{
			border-radius: 50px;
			width: 100px;
			margin: 0 60px 0 60px;


		}
		.box h1{
			font-size: 20px;
			font-family: "Copperplate",fantasy;
			font-weight: bold;
			border-bottom: 5px solid blue;	
			text-align: center;
		}
		.box p{
			font-size: 14px;
			font-family: "Courier New",monospace;
			font-weight: bold;
			text-align: left;
		}
		h6{
			text-align: center;
		}
	</style>
	<script>
		var name = window.prompt('Siapa nama kamu?','');
		window.alert("Halo" + " " + name + " " + "Selamat Datang di websiteku🙌")
	</script>
</head>
<body>
	<?php
		$myname = "DESTI FITROTUN NISA";
		$mynim = 210411100182;
		$faculty = " Teknik";
		$majors ="Teknik Informatika";
		$myheight = 155.7
	?>
	<div class="box">
		<h1>My Identity</h1>
		<img src="img/desti.jpg" alt="Foto Desti">
		<p>Nama: <?php echo($myname); ?></p>
		<p>NIM: <?php echo($mynim); ?></p>
		<p>Fakultas: <?php echo($faculty); ?></p>
		<p>Prodi: <?php echo($majors); ?></p>
		<p>Tinggi Badan: <?php echo($myheight); ?></p>
	</div>
	<h6>
		<?php echo(" apakah tipe data dari" ." " . $myname. " ". " == ". "tipe data dari "." " .$mynim. " ". "? jawabanya adalah  ");  var_dump($myname == $mynim); ?> 
	</h6>
	<h6>
		<?php 
			echo("tipe data dari" ." ". $myname ." "."adalah"." " ); 
			var_dump($myname) ;
			echo("dan tipe data dari". " ".$mynim." ". "adalah"." ");  
			var_dump($mynim);
			echo("tipe data dari" ." ". $myheight ." "."adalah"." " ); 
			var_dump($myheight) ;
		?>
	</h6>

</body>
</html>