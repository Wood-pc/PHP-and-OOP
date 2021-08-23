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


<h1>1.Uloha</h1>
<?php
	function anchor($url, $text)
	{
		echo '<a href="'.$url.'"> '.$text.'</a>';
	}

?>
<html>
	<p>Ked chces googlit, pouzi tento kvalitny <?php anchor('http://bing.hu ' , ' Vyhledavac') ?></p>
</html>


<h1>2.Uloha</h1>

<?php

	

	function anchore_two($url, $text, $array){
	if($array){
		echo '<a href="'.$url.'" ';
		foreach ($array as $key => $value) {
			echo $key.'="'.$value.'"';
		}
		echo '>'.$text.'</a>';
	}
	else{
		echo '<a href="'.$url.'">'.$text.'</a>';
	}
}

$atts = [
	'title' => 'toto je link',
	'class' => 'red'
];
?>
<html>
<p>ked chces googlit, pouzi tento kvalitny <?php anchore_two('http://brm.sk', 'Kvalitný blog', $atts); ?></p>
</html>

<h1>3.Uloha</h1>
<?php 
function redirect($add) {
	$base_url = "http://localhost:8888/Zadanie8";
	
	if(strpos($add,'.')!= false && strpos($add,'/')== false){
		echo $base_url .'/'.$add;
		}
	elseif(strpos($add,'/')== false && strpos($add, '.')== false){
		echo $base_url .'/'.$add .'.php';
	}
	elseif(strpos($add,'localhost:8888')== true && strpos($add, '.')!= false){
		echo $add;
	}
	elseif(strpos($add, 'edit')== true && strpos($add, '.')== false) {
		echo $add . '.php';
		};
	};
	
	
	
	echo redirect('edit.php').'<br>';
	echo redirect('edit').'<br>';
	echo redirect('http://localhost:8888/Zadanie8/edit.php').'<br>';
	echo redirect('http://localhost:8888/Zadanie8/edit').'<br>';
	
	
?>

<h1>4.Uloha </h1>
<?php 
	function format_date($date) 
	{
		return str_replace('-', '/', $date);
	}
	
	echo format_date('12-05-1987');
	echo '<br><br>';
	
	function format_date2($date, $arg) 
	{
		switch ($arg)
		{
			case 'sk':
				$new_date = date('d.m.Y', strtotime($date));
				break;
			case 'us':
				$new_date = date('m/d/Y', strtotime($date));
				break;
			case 'ja':
				$new_date = date('Y-m-d', strtotime($date));
				break;
		}
		return $new_date;
	}
	
	echo format_date2('25-01-2018', 'us');
?>

<h1>5.Uloha </h1>
<?php
function push_to_array1() 
{
    $new_data = func_get_args()[0];
    $i = 1;
        
    while (isset(func_get_args()[$i])) 
    {
        $new_data[] = func_get_args()[$i];
        $i +=1;
    }
        
    return $new_data;
}

$data = [1, 2, 3, 4];
$data = push_to_array1($data, 'a', 'b', 'c');
echo 'push_to_array1:<br>';
echo '<pre>';
print_r($data);
echo '</pre>';


function push_to_array2(&$data)
{
    $i = 1;
    
    while (isset(func_get_args()[$i]))
    {
        $data[] = func_get_args()[$i];
        $i +=1;
    }
         
}

$data = ['one', 'two', 'balls'];
push_to_array2($data, 'four', 'fiver');

echo 'push_to_array2:<br>';
echo '<pre>';
print_r($data);
echo '</pre>';

?>

</body>