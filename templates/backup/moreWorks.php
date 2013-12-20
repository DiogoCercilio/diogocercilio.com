<div class="closeMoreWorkDetails" title="Clique para <?php echo $closeWord; ?>."><?php echo $closeWord; ?></div>

<!-- To change the images and the description, change the number in array! -->

<?php 
    $id    = array( 1 => 'one',2 => 'two',3 => 'three',4 => 'four',5 => 'five',6 => 'six',7 => 'seven',8 => 'eight');
    $title = array( 
					1 => $fifthJobTitle,// Transporte executivo
					2 => $secondJobTitle,//Pallace
    				3 => $eighthJobTitle,// Nepp
    				4 => $thirdJobTitle,//Portfolio
    				5 => $firstJobTitle,//Camilo
                    6 => $sixthJobTitle,//Celi
                    7 => $seventhJobTitle,//Novas Coleções
                    8 => $fourthJobTitle,//Pimenta                                         
                 );
    $description = array( 
    					  4 => $thirdJobDescription,
	                      2 => $secondJobDescription,
	                      5 => $firstJobDescription,
	                      8 => $fourthJobDescription,
	                      1 => $fifthJobDescription,
	                      6 => $sixthJobDescription,
	                      3 => $eighthJobDescription,
	                      7 => $seventhJobDescription,                 	                      
	                   );
    $imageUsed   = array( 
    					  4 => $techsUsedImageThree,
	                      2 => $techsUsedImageTwo,
	                      5 => $techsUsedImageOne,
	                      8 => $techsUsedImageFour,
	                      1 => $techsUsedImageFive,
	                      6 => $techsUsedImageSix,
	                      3 => $techsUsedImageEight,
	                      7 => $techsUsedImageSeven,                   	                       
	                   );
	$max = 8;
	for($i = 1; $i <= $max; $i++){
		echo '<div class="wrapperWorks" id="'.$id[$i].'">
				<div class="descriptionWork">
					<h1>'.$title[$i].'</h1>
					<h2>'.$workDescriptionTitle.'</h2>
		    		<p>'.$description[$i].'</p>
					<h2>'.$workDescriptionTechsUsed.'</h2>
				<div class="wrapperTecnologies">'.$imageUsed[$i].'</div></div>
				<div class="fullImageWork"><img src="img/px.jpg" alt="'.$title[$i].' title='.$title[$i].'">
		  		</div>	
			</div>';}	  

 ?><div style="clear:both;"></div>