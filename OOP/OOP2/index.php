<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <title>Uloha 2</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

require 'vendor/autoload.php';

use Deadman\Admin;
use Deadman\User;


$newUser = [
    new User( 'Zlatý', 'Labrador', 'random@gmail.com', 'https://awscape.org.za/wp-content/uploads/2018/05/dog-200x200.jpg'),
    new User( 'Zvedavý', 'Doggo', 'random@gmail.com', 'data:image/jpeg;base64,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'),
    new User( 'Komisár', 'Rex', 'random@gmail.com', 'https://www.dogthelove.com/images/dog_200x200.jpg'),
];

$admin = new Admin('Pán', 'Tříska', 'random@gmail.com', 'https://www.childrens.com/wps/wcm/connect/childrenspublic/b77e5f95-9926-42ba-a2dc-c3a035306e8f/Abbee-200x200.jpg?MOD=AJPERES&CACHEID=ROOTWORKSPACE.Z18_MP541240M8QL00A94691A238J3-b77e5f95-9926-42ba-a2dc-c3a035306e8f-mAWX7H.');
?>

<header class="header">
    <h1 class="">Uloha 2</h1>
</header>

<div class="container">

    <?php for( $i=0; $i<count($newUser); $i++): ?>
    <div class="user-container">
        <p class="name"> <?php $newUser[$i]->fullName(); ?> </p>
        <img src="<?php echo $newUser[$i]->avatar() ?>" alt="">
        <div class="link_wrapper">
            <div class="link">
                <a href="mailto:<?php echo $newUser[$i]->email() ?>">SEND MAIL</a>
            </div>
        </div>
    </div>
    <?php endfor; ?>
    <div class="user-container">
        <p class="name"> <?php $admin->fullName(); ?> </p>
        <img src="<?php echo $admin->avatar() ?>" alt="">
        <div class="link_wrapper">
            <div class="link">
                <a href="mailto:<?php echo $admin->email() ?>">SEND MAIL</a>
            </div>
        </div>
        <form action="" method="POST">
            <input type="submit" name="Submit" value="Vymaž">
        </form>
    </div>

    <p class="destroy">
        <?php
        if (isset($_POST['Submit'])) {
            $admin->destroyEverything();
        }
        ?>
    </p>


</body>
</html>