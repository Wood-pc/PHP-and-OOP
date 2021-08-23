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

	<?php
		require_once 'inc/Adventure.php';
		require_once 'inc/Dude.php';

        $adventure = new Adventure();

		$adventure->addDude(
		        new Dude('Finn the Human', "Finn is a silly kid who wants to become a great hero one day. 
		        He might not look too tough, but if there's evil around, he'll slay it. That's his deal.", ['toto je komentar', 'toto je druhy komentar', 'toto je komentar 3', 'toto je komentar 4'])
        );

		$adventure->addDude(
		        new Dude('Ice King', 'Armed with a magic crown and an icy heart, the Ice King has only one goal: 
		        to secure a wife by any means necessary.', ['toto je komentar'])
		);
		
		$adventure->addDude(
			new Dude('Princess Bubblegum', 'As a millionaire nerd enthusiast, Princess Bubblegum immerses herself in every 
			branch of geekdom from rocket science to turtle farming.', ['0', '1', '2'])
		);


	?>

	<div class="row">


		<?php foreach ( $adventure->getDudes() as $dude ) : ?>

			<article>
				<h4>
					<?php echo $dude->getWho() ?>
				</h4>

				<p>
					<?php echo $dude->getWat() ?>
				</p>

                <footer class="comments">
					<?php echo $dude->commentCount() ?>
				</footer>
			</article>

		<?php endforeach ?>

	</div>

	<div class="row">
		<p>
			number of dudes: <strong><?php echo $adventure->dudeCount() ?></strong><br>
			number of comments: <strong><?php echo $adventure->commentsCount() ?></strong>
		</p>
	</div>

    <h4><strong>Add comment</strong></h4>
    <?php
        $dudes = $adventure->getDudes();
        $dudes['0']->addComment('Finn the Human  blalalalaaaa');
		$dudes['1']->addComment('Ice King  blulululuuuu');
		$dudes['2']->addComment('Princess Bubblegum bleeee bleeee');
        var_dump( $adventure->getDudes() );
    ?>

	<br>
    <h4><strong>Get dude</strong></h4>
    <?php
		$adventure->getDude('1');
		$adventure->getDude('2');
    ?>

	<br>
    <h4><strong>Remove dude</strong></h4>
    <?php
		$adventure->removeDude('0');
        var_dump( $adventure->getDudes() );
    ?>

	<br>
    <h4><strong>Edit dude</strong></h4>
    <?php
    $adventure->editDude( '0', 'Edited Name', 'Edited dude');
    var_dump( $adventure->getDudes() );
    ?>

</body>
</html>