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
<div class="page-header">
<h1 class="text-muted">fun times php</h1>
</div>
<h1 class="color">Foreach </h1>
<?php
		include 'fun_stuff.php' ;
		foreach ($directors as $director){
		echo $director['id'].'<br>';
		echo $director['first_name']." ".$director['last_name'].'<br>';
		echo $director['country'].'<br>';
    	echo  str_replace('-',' ',$director['birthdate']) .'<br><br>';
}
?>

<h1>For</h1>
<?php
		include 'fun_stuff.php' ;
		for ($i=0; $i< count($directors); $i++ ){
		echo $directors [$i]['id'].'<br>';
		echo $directors [$i]['first_name']." ".$directors [$i]['last_name'].'<br>';
		echo $directors [$i]['country'].'<br>';
		echo $directors [$i]['birthdate'].'<br><br>';
}
?>

<h1>While</h1>
<?php
		include 'fun_stuff.php';
		$i=0;
		$length=count($directors);


	
		while ($i < $length) {
	
		echo  $directors[$i]['id'].'<br>';
		echo	$directors[$i]['first_name']." ".$directors[$i]['last_name'].'<br>';
		echo	$directors[$i]['country'].'<br>';
		echo	str_replace('-', ' ', $directors[$i]['birthdate']) . '<br><br>';
		$i++;
    }
?>
<h1>Druha cast ulohy foreach</h1>
<?php
		foreach($directors as $director){
		echo $director['first_name']." ". $director['last_name'].'<br><br>';
	}

?>
<h1>Select with php</h1>
<select name="chose" id="">
<?php
require_once 'fun_stuff.php';
foreach ($directors as $takeone){

echo '<option value="option">'.$takeone['id'].' '.$takeone['first_name'].' '.$takeone['last_name'].'</option>';
}

?>

</select>

</html>