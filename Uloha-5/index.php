<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

<h1>1-Uloha </h1>
<?php
function pozdrav($Vašo){
   
   echo " Ahoj, $Vašo , ty truľo.";
}
 pozdrav('Vašo')

?>

<h1>2-Uloha</h1>
<?php
function  pre_r( $adventure){
    
   echo '<pre>';
   	print_r($adventure);
   echo '</pre>';
 
}
$data = [
	1 => 'Auto',
	2=> 'ponorka'
];
pre_r($data)
?>

<h1>3-Uloha</h1>
<?php
function links($data)
		{
			echo '<ul>';
			foreach ($data as $value) {
				echo '<li><a href="'.$value.'.php?page='.strtoupper($value).'">'.ucfirst($value).'</a></li>';
			}
			echo '</ul>';

		}

		$arr = ['web', 'gule', 'vajcia'];

		links($arr);
?>

<h1>4-Uloha</h1>
<?php
 
function how_much( $pocet_produktov, $cena_jedneho){


	$x=$pocet_produktov * $cena_jedneho;
	return $x;
}
	$pocet_produktov = 5;
	$cena_jedneho = 300;


	echo '<p>';
    echo 'Kupil si ' .$pocet_produktov. ' predmetov za ' . how_much( $pocet_produktov, $cena_jedneho) . '€ dokopy.';
	echo '</p>';



	
	how_much($pocet_produktov, $cena_jedneho)
	?>

<h1>5-Uloha</h1>
	<?php

     function more($a,$b){
	
       if($a>$b){
		echo' <p>'.$a.'</p> ';
	   }
	   if ($a<$b){
		   echo' <p>'.$b.'</p> ';
	   }
	   if($a==$b) {
		echo' <p>'."Čísla sa rovnajú".'</p> ';
	}
	
	 }
	 $a=4;
	 $b=4;
	  more($a,$b)
	 ?>
<h1>6-Uloha</h1>
<?php

function sum($ahoj) {
		$cookies=0;
		foreach($ahoj as $datel){
 			$cookies += $datel;
		}
		return $cookies;
		}
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo '<p>'.'Vysledok suctu  je : ' .sum($numbers).' </p>'


?>
<h1>7-Uloha</h1>
	<?php
	function second_item($data)
		{
			$item = 0;
			foreach ($data as $value) {
				if ( $item%2 )
	            {
	                echo '<p>'.$value.'</p>';
	            }
	            $item++;
			}
		}

		$letters = ['1', '2', '3', '4', '5', '6'];

		 second_item($letters);
		
	 ?>
	

	<h1>8-Uloha</h1>
	<?php
	
	function largest_number($data)
	{

		$i = 0;
		foreach ($data as $value)
		{

			if ($i < $value) {
				$i = $value;
			}
		}

		return $i;
	}

	$num = [8, 4, 6, 12, 9, 2];
	 echo'<p>'.largest_number($num).'</p>';
	

	 ?>

<h1>9-Uloha</h1>
	<?php
		function money($peniaz)
		{
			$peniaz = number_format($peniaz,2,',',' ');
			return $peniaz.'€';
		}

		$cislo = 15321.35;

		echo '<p>'.money($cislo).'</p>';
		
	 ?>

<h1>10-Uloha</h1>
	<?php
	function discount($suma, $zlava)
	{
		$result = $suma - ($suma/100)*$zlava;
		return $result;
	}

	$suma = 124.12;
	$zlava = 13;

	echo '<p>'.discount($suma, $zlava). " penazi to je po zlave ".'</p>';

	 ?>







   
</body>