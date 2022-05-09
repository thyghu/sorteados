<?php
	$sorteados = array();
	
	for($i=1;$i<=20;$i++)
	{
		$sorteio = rand(1,10);
		array_push($sorteados, $sorteio);
		
	}
	
	
	$valores = array_count_values($sorteados);

	$naorepete = array();
	foreach ($valores as $k => $v){
		if($v === 1) $naorepete[] = $k;
	}

	print_r($sorteados);	
	asort($naorepete);
	echo "Os números que não repetem são: ";
	print_r($naorepete);
?>