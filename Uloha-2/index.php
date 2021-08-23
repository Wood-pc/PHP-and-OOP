<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>fun times php</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,700">
    <link rel="stylesheet" href="arr_css.css">
</head>

<body class="container">

    <div class="page-header">
        <h1 class="text-muted">fun times php</h1>
    </div>
  
    <h1>Edgar Wright</h1>

    <?php
        require 'data.php';
        $total = 0;
        
        echo '<table>';
        echo    '<tr class="txt"> 
                    <td>Title</td>    
                    <td>Genre</td>    
                    <td>Year</td>  
                    <td>Gross</td>
                </tr>';

        foreach ($data as $movie) {
            
            $sum = basename($movie['gross']);

            echo    '<tr>';
            echo       '<td>' . $movie['title'] . '</td>
                        <td>' . $movie['genre'] . '</td>
                        <td>' . $movie['year'] . '</td>
                        <td> $' . number_format($sum) . "<br>" . '</td>';
            echo    '</tr>';
        }
        
        foreach ($data as $movie) {
        
            $total +=  $movie['gross'];
    }

        echo '<tr class="txt">
                <td></td>
                <td></td>
                <td></td>
                <td> $'. number_format($total) .'</td>
             </tr>';
        echo '</table>';
    ?>
    

</body>

</htm>