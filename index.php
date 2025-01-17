<?php
	include('appmvc.php');
	
	$mavar = new MaClasse();
	$mavar -> setMonAttribut(8);
	
	echo $mavar -> getMonattribut();
	
	
?>