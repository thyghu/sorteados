<?php

	//declarando array para armazenar números sorteados
	$sorteados = array();
	
	//populando o array com números aleatórios (20 posições)
	for($i=1;$i<=20;$i++)
	{
		//sorteando número de 1 a 10
		$sorteio = rand(1,10);
		
		//adicionando ao array
		array_push($sorteados, $sorteio);
		
	}
	
	
	//contando repetição de valores no array
	$valores = array_count_values($sorteados);

	$naorepete = array();
	
	//verificando quais números que não repetem no array
	foreach ($valores as $k => $v)
	{
		if($v === 1) 
			$naorepete[] = $k;
	}

	//exibindo sorteados
	print_r($sorteados);	
	
	//organizando em ordem crescente os número que não repetem
	asort($naorepete);
	
	//exibindo resultado
	echo "Os números que não repetem são: ";
	print_r($naorepete);
?>