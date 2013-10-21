<html>
	<head>
	</head>
	<body>
		<br>
		<div align="center">
			<h2>Sobre su navegador</h2>
		</div>
		
		<?php
		include('browser_class_inc.php');
		$br = new browser();
		
		$br->whatBrowser();
		$version = $br->version; 
		$navegador = $br->browsertype;
		$platform = $br->platform;

		echo '<p font="arial" align="center">';
		echo "El navegador que esta utilizando es: ";		
		echo '<b> '.$navegador.' </b></br>';
		echo "En su version: ";	
		echo '<b>'.$version.' </b></br>';
		echo "La plataforma en la que lo esta ejecutando es: ";
		echo '<b>'.$platform.' </b></br>';		
		echo '</p>';	
	
		?>
	</body>
</html>
