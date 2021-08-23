<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    

  <?php
  

    $json = file_get_contents('https://itunes.apple.com/search?term=health&entity=album');
    $json = json_decode($json);

    echo '<section class="gallery">';
    foreach($json -> results as $albums) 
    {

        $album_name = $albums -> collectionName;
        $cover = $albums -> artworkUrl100;
        $url = $albums -> collectionViewUrl;

        echo    '<p>
                    <img src="'.$cover.'">
                    <a href="'.$url.'">'.$album_name.'</a>
                </p>';

    }
    echo '</section>';



    echo '<pre>';
    print_r($json);
    echo '</pre>';

  ?>

    

       
</body>
</html>