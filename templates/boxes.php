<div class="curriculoItens pressed">
    <div class="tooltip">
        <?php echo $tipFront;?>
    </div>
    <h1 class="curriculoFrontend">
        <?php echo $titleFrontButton;?>
    </h1>
</div>

<div class="curriculoItens">
    <div class="tooltip">
        <?php echo $tipBack;?>
    </div>            
    <h1 class="curriculoBackend">
        <?php echo $titleBackButton;?>
    </h1>
</div>

<div class="curriculoItens">
    <div class="tooltip">
        <?php echo $tipOther;?>
    </div>            
    <h1 class="curriculoAnother">
        <?php echo $titleOtherButton;?>
    </h1>
</div>                

<div class="formation">
   <?php include 'templates/curriculoFrontend.php';?>
   <?php include 'templates/curriculoBackend.php';?>
   <?php include 'templates/curriculoAnother.php';?>                                   
</div>