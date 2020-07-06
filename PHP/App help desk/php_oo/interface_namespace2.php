<?php
	// 'Apelidando' recursos, classes e interfaces
	require "./Bibliotecas/Lib1/lib1.php";
	require "./Bibliotecas/Lib2/lib2.php";
	
	use A\Cliente as C1;
	use B\Cliente;
	 
	$c = new C1();
	print_r($c);
	echo $c->__get('nome');
	// outra maneira de se fazer:
	$c = new Cliente();
	print_r($c);
	echo $c->__get('nome');

?>