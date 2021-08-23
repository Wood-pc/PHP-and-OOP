

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
	 ul {list-style-type: none;}
	 ul {padding: 0;}
	 ol{width: 190px;}
	 ol{margin: 0 auto;}


    </style>
	
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>
	


	<div class="row">
	<h1>1.Uloha</h1>
	<ul  >
	<?php
			$pocet=1;
			
        for($i=1;$i<=$pocet;$i++){
			 
        	if($pocet>0){
				echo '<li>'.$i. ' . ' ."hodnota". '</li>' ;
				
			}
		}	

		for($i=0;$i<=$pocet;$i++){
			if($pocet<=0){
				echo "Musis zadat cislo" ;
			}

			
		}
			
			
    ?>
	</ul>
	<a href=""></a>
	<h1>2.Uloha</h1>
	<ul>
	<?php
	                   $pocet =11;
                        
                        for ($i = 1; $i <= $pocet; $i++) {
                            
                            if ( $i == $pocet ) {
                                echo $i;
                            }
                            else {
                                echo $i.'-';
                            }
                            
                        }
    ?>
    
	
	<h1>3.Uloha</h1>
	<ul>
	<?php
	$var=3;
	
	for ( $k = 1; $k <= $var; $k++)
	{
		echo '<li>';
		echo '<a href="link/show.php?id='. $k .'">záznam '. $k .', </a>';
		echo '<a href="link/edit.php?id='. $k .'">edit, </a>';
		echo '<a href="link/delete.php?id='. $k .'">delete</a>';
		echo '</li>';
	}
?>
</ul>
	
    

<h1>4.Uloha 1/2</h1>
<ol class="uloha-d">
			
<?php
                    
                 
      $pics_path = 'pics/';
                    
      foreach ( glob($pics_path.'*.*') as $pics) {
                        
      $pics_r = str_replace (array($pics_path, '.jpg', '.png'),'', $pics);
      $pic_name = str_replace (array('_', '-'), ' ', $pics_r);
                        
      echo '<li>';
      echo ucfirst($pic_name);
      echo '</li>';
      }
                
?>      
</ol> 


<h1>4.Uloha 2/2</h1>
	<p class="second">
 	<?php
    	foreach ( glob($pics_path.'*.*') as $images ) {

    	$img_np = str_replace (array($pics_path,'_'),'-',$images);
    	$img_name = str_replace (array('_','-','.jpg', '.png'), ' ', $img_np);
		
		$img_np = ltrim($img_np, '-');

    	echo "{ type: &nbsp&nbsp quiz: &nbsp&nbsp title: &nbsp&nbsp ". ucfirst($img_name) ."&nbsp&nbsp pic:&nbsp&nbsp". $img_np ." }<br>";
                       
    	}
    ?>
	</p>                
            
            
 
	
	
	 



    


	



</body>
</html>