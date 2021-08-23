<?php
	//Function choose pack with img by ?page= >....<
	function choose_img(){

		$page = isset($_GET['page']) ? $_GET['page'] : '';

	 	switch ($page) {
	 		case 'vsetko':
	 		echo '<section class="gallery">
					<div class="gallery-set container">
						<a href="img/samurai/image-1.jpg">
							<img src="img/samurai/thumb-1.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-2.jpg">
							<img src="img/samurai/thumb-2.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-3.jpg">
							<img src="img/samurai/thumb-3.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-4.jpg">
							<img src="img/samurai/thumb-4.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-5.jpg">
							<img src="img/samurai/thumb-5.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-6.jpg">
							<img src="img/samurai/thumb-6.jpg" height="192" width="383" alt="jackie boy">
						</a>
					</div>
				</section>';
	 		break;

	 		case 'web':
	 		echo '<section class="gallery">
					<div class="gallery-set container" id="web">
						<a href="img/morty/image-1.jpg">
							<img src="img/morty/thumb-1.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-2.jpg">
							<img src="img/morty/thumb-2.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-3.jpg">
							<img src="img/morty/thumb-3.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-4.jpg">
							<img src="img/morty/thumb-4.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-5.jpg">
							<img src="img/morty/thumb-5.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-6.jpg">
							<img src="img/morty/thumb-6.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-7.jpg">
							<img src="img/morty/thumb-7.jpg" height="192" width="383" alt="rick and morty">
						</a>
					</div>
				</section>';
	 		break;

	 		case 'branding':
	 		echo '<section class="gallery">
					<div class="gallery-set container" id="branding">
						<a href="img/adventure/image-1.jpg">
							<img src="img/adventure/thumb-1.jpg" height="192" width="383" alt="the dog the human">
						</a>
						<a href="img/adventure/image-2.jpg">
							<img src="img/adventure/thumb-2.jpg" height="192" width="383" alt="the dog the human">
						</a>
						<a href="img/adventure/image-3.jpg">
							<img src="img/adventure/thumb-3.jpg" height="192" width="383" alt="the dog the human">
						</a>
						<a href="img/adventure/image-4.jpg">
							<img src="img/adventure/thumb-4.jpg" height="192" width="383" alt="the dog the human">
						</a>
						<a href="img/adventure/image-5.jpg">
							<img src="img/adventure/thumb-5.jpg" height="192" width="383" alt="the dog the human">
						</a>
						<a href="img/adventure/image-6.jpg">
							<img src="img/adventure/thumb-6.jpg" height="192" width="383" alt="the dog the human">
						</a>
						<a href="img/adventure/image-7.jpg">
							<img src="img/adventure/thumb-7.jpg" height="192" width="383" alt="the dog the human">
						</a>
						<a href="img/adventure/image-8.jpg">
							<img src="img/adventure/thumb-8.jpg" height="192" width="383" alt="the dog the human">
						</a>
					</div>
				</section>';
			break;

			case 'fotografia':
			echo '<section class="gallery">
					<div class="gallery-set container" id="fotografia">
						<a href="img/dragon/image-1.jpg">
							<img src="img/dragon/thumb-1.jpg" height="192" width="383" alt="training dragons">
						</a>
						<a href="img/dragon/image-2.jpg">
							<img src="img/dragon/thumb-2.jpg" height="192" width="383" alt="training dragons">
						</a>
						<a href="img/dragon/image-3.jpg">
							<img src="img/dragon/thumb-3.jpg" height="192" width="383" alt="training dragons">
						</a>
						<a href="img/dragon/image-4.jpg">
							<img src="img/dragon/thumb-4.jpg" height="192" width="383" alt="training dragons">
						</a>
						<a href="img/dragon/image-5.jpg">
							<img src="img/dragon/thumb-5.jpg" height="192" width="383" alt="training dragons">
						</a>
						<a href="img/dragon/image-6.jpg">
							<img src="img/dragon/thumb-6.jpg" height="192" width="383" alt="training dragons">
						</a>
					</div>
				</section>';
			break;

			case 'video':
			echo '<section class="gallery">
					<div class="gallery-set container" id="video">
						<a href="img/zim/image-1.jpg">
							<img src="img/zim/thumb-1.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-2.jpg">
							<img src="img/zim/thumb-2.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-3.jpg">
							<img src="img/zim/thumb-3.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-4.jpg">
							<img src="img/zim/thumb-4.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-5.jpg">
							<img src="img/zim/thumb-5.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-6.jpg">
							<img src="img/zim/thumb-6.jpg" height="192" width="383" alt="space invader">
						</a>
						<a href="img/zim/image-7.jpg">
							<img src="img/zim/thumb-7.jpg" height="192" width="383" alt="space invader">
						</a>
					</div>
				</section>';
			break;

			default:
			echo '<section class="gallery">
					<div class="gallery-set container">
						<a href="img/samurai/image-1.jpg">
							<img src="img/samurai/thumb-1.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-2.jpg">
							<img src="img/samurai/thumb-2.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-3.jpg">
							<img src="img/samurai/thumb-3.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-4.jpg">
							<img src="img/samurai/thumb-4.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-5.jpg">
							<img src="img/samurai/thumb-5.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-6.jpg">
							<img src="img/samurai/thumb-6.jpg" height="192" width="383" alt="jackie boy">
						</a>
					</div>
				</section>';

	 	} 
	}


//Function choose select on navigation by ?page= >....<
	function select_bar(){

		$page = isset($_GET['page']) ? $_GET['page'] : '';

		switch ($page) {
			case 'vsetko':
				echo '<ul class="menu controls">
						<li data-from="left" class="selected"><a href="index.php?page=vsetko">Všetko</a></li>
						<li data-from="right"><a href="index.php?page=web">Web</a></li>
						<li data-from="left"><a href="index.php?page=branding">Branding</a></li>
						<li data-from="right"><a href="index.php?page=fotografia">Fotografia</a></li>
						<li data-from="left"><a href="index.php?page=video">Video</a></li>
					</ul>';
				break;
			
			case 'branding':
				echo '<ul class="menu controls">
						<li data-from="left"><a href="index.php?page=vsetko">Všetko</a></li>
						<li data-from="right"><a href="index.php?page=web">Web</a></li>
						<li data-from="left" class="selected"><a href="index.php?page=branding">Branding</a></li>
						<li data-from="right"><a href="index.php?page=fotografia">Fotografia</a></li>
						<li data-from="left"><a href="index.php?page=video">Video</a></li>
					</ul>';
				break;

			case 'fotografia':
				echo '<ul class="menu controls">
						<li data-from="left"><a href="index.php?page=vsetko">Všetko</a></li>
						<li data-from="right"><a href="index.php?page=web">Web</a></li>
						<li data-from="left"><a href="index.php?page=branding">Branding</a></li>
						<li data-from="right" class="selected"><a href="index.php?page=fotografia">Fotografia</a></li>
						<li data-from="left"><a href="index.php?page=video">Video</a></li>
					</ul>';
				break;

			case 'video':
				echo '<ul class="menu controls">
						<li data-from="left"><a href="index.php?page=vsetko">Všetko</a></li>
						<li data-from="right"><a href="index.php?page=web">Web</a></li>
						<li data-from="left"><a href="index.php?page=branding">Branding</a></li>
						<li data-from="right"><a href="index.php?page=fotografia">Fotografia</a></li>
						<li data-from="left" class="selected"><a href="index.php?page=video">Video</a></li>
					</ul>';
				break;

 			case 'web':
				echo '<ul class="menu controls">
						<li data-from="left"><a href="index.php?page=vsetko">Všetko</a></li>
						<li data-from="right" class="selected"><a href="index.php?page=web">Web</a></li>
						<li data-from="left"><a href="index.php?page=branding">Branding</a></li>
						<li data-from="right"><a href="index.php?page=fotografia">Fotografia</a></li>
						<li data-from="left"><a href="index.php?page=video">Video</a></li>
					</ul>';
				break;

			default:
				echo '<ul class="menu controls">
						<li data-from="left" class="selected"><a href="index.php?page=vsetko">Všetko</a></li>
						<li data-from="right"><a href="index.php?page=web">Web</a></li>
						<li data-from="left"><a href="index.php?page=branding">Branding</a></li>
						<li data-from="right"><a href="index.php?page=fotografia">Fotografia</a></li>
						<li data-from="left"><a href="index.php?page=video">Video</a></li>
					</ul>';
				break;
		}

	}

?>