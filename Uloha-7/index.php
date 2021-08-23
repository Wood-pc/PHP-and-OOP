<?php
	include "header.php";
	include "setting.php";
?>

	<main>
		<article>
			<header class="post-header">
				<div class="container">
					<h1 class="post-title">Portfólio našich prác</h1>
				</div>
			</header>
			<div class="post-content">
				<div class="container">
					<h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>

					<?php
						select_bar();
					?>
				</div>

				<?php
					choose_img();
				?>
			</div>
		</article>
	</main>

<?php
	include "footer.php";
?>