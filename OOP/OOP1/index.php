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
		<h1 class="text-muted">Zadanie OOP1 a/b</h1>
	</div>

	<?php

		//Zadanie OOP1a, Evidencia Userov pomocou OOP, vytvorenie konštruktora, getterov a setterov a metódy na vrátenie celého mena

		class User {

			public $first_name; 
			public $last_name;
			public $email;
			public $avatar;

			public function __construct($first_name, $last_name, $email, $avatar ) {
				$this->first_name = $first_name;
				$this->last_name = $last_name;
				$this->email = $email;
				$this->avatar = $avatar;
			
			}

			public function set_first_name($first_name) { //settery pre úpravu atribútov z objektu
				$this->first_name = $first_name;
			}
			function set_last_name($last_name) {
				$this->last_name = $last_name;
			}
			function set_email($email) {
				$this->$email = $email;
			}
			function set_avatar($avatar) {
				$this->$avatar = $avatar;
			}
			

			public function get_first_name() { //gettery - metódy, ktoré ju dokážu vytiahnuť/vypísať 
				return $this->first_name;
			} 
			public function get_last_name() {
				return $this->last_name;
			}
			public function get_email() {
				return $this->email;
			}
			public function get_avatar() {
				return $this->avatar;
			} 

			public function create_name() { //metóda v objekte vytvorí celé meno
				return $this->first_name.' '.$this->last_name;
			}

			public function create_profile() { //metóda na vytvorenie profilu. Dizajn hrúza, but got the point.
				echo $this->create_name();
				echo '<br>';
				echo '<img src="'.$this->avatar.'" style="max-width:19%;" >';
				echo '<br>';
				echo '<i class="fa fa-envelope"></i><a href="mailto:'.$this->email.'">Mail na moju maličkosť</a>';
				echo '<br>';
				echo '<br>';
			}

			}

			//Zadanie OOP1b, Vytvorenie triedy Admin, ktorá bude dediť od User a pridať mu nejakú metódu a pridať pred meno [admin] 

			class Admin extends User {

				public function create_name() {
					echo'[admin] '.$this->first_name.' '.$this->last_name;
				}

				public function admin_zje_avokado() { //Iba admin môže zjesť avokádo.
					echo 'Mnam, mnam. Admin si dal avokado.';
				}
			}


		$ezo = new User('Zdenko', 'Maro', 'zdenkomaro@gmail.com', 'https://i.imgflip.com/3x8lwn.jpg'); //inštancia triedy User
			$ezo->set_first_name('Zdenko'); 
			$ezo->create_profile();

		$jozo = new Admin('Jožo', 'Hužo', 'jozo.holivo@gmail.com', 'pes.jpg'); //inštancia triedy Admin
		
			$jozo->create_profile();
			$jozo->admin_zje_avokado();
	?>

</body>
</html>