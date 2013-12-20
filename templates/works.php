<?php
    $dir = "gallery/thumb/"; 
    $aberto = opendir($dir); 

    $i = 1;

    while($arq = readdir($aberto)) {
         if($arq <> "." && $arq <> "..") { 
      $ext = explode(".",$arq); 
      if( ($ext[1] == "png") || ($ext[1] == "jpg") ) { 
        echo '<div class="work" id="work'.$i.'">';
         echo "<a href=''><img src=$dir/$arq alt=".$arq."></a>";
         echo '</div>';
         $i++; 
      }
         }
    }
    closedir($aberto);
?>