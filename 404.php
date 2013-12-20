<?php @session_start();if(isset($_SESSION['exist'])){include('langs/en.php');}else{include('langs/br.php');}?>
<!doctype html>
<html lang="pt-br">
<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <?php include 'templates/head.php'; ?>
</head>
<style>
    .wrapperFooter{
        position:fixed!important;
        bottom:73px!important;
    }

    .posFooter{
        position:fixed!important;
        bottom:0!important;
    }
</style>
<script>
    // $('.logo').find('a').attr('src','http://www.diogocercilio.com').css('color','#f00');
    $(function(){
        $('.logo a').attr('href','http://www.diogocercilio.com');        
    })


</script>
<body id="#inicio">

    <!-- Janela Modal -->
    <div class="mask"></div>
    <div class="modal">
        <span class="closeModal"><?php echo $closeWord;?></span>
         <?php include'templates/modalContent.php';?>
    </div>


    <!-- faixa no fundo do site -->
    <div class="glow" style="height: 480px;"></div>
    <div class="home"></div>
    <!-- Parte superior do site -->
    <div class="wrapperTop"><?php include 'templates/top.php'; ?></div>
    <div class="teste"></div>
    <div class="wrapper">    
        <!-- Menu lateral -->
        <div class="nav" style="min-height:300px;">
        	

<img src="img/bgNav.jpg" id="hide" alt="" style="margin-top: 30px;" />
        
<ul id="sliding-navigation">
    <li class="sliding-element"><h3><?php echo $navLeftDescription; ?></h3></li>
    <li class="sliding-element"><a href="index.php"><?php echo $navLeftHome;?></a></li> 
    <li class="sliding-element"><a href="index.php" class="tecnologias"><?php echo $navLefFormation ;?></a></li>
                           
    <li class="sliding-element"><a href="index.php#sobre" class="sobre"><?php echo $about;?></a></li>
    <li class="sliding-element"><a href="index.php#contato" class="contato"><?php echo $navLefContact;?></a></li>
</ul>

<div class="info">
	<?php include 'templates/myInfo.php'; ?>       
</div>
        </div>

        <!-- Exibe mensagens em geral caso haja alguma -->
        <?php include 'templates/message.php'; ?>

        <!-- Exibe os trabalhos --> 
        <div class="boxContent">
                <h1><?php echo $errorPage;?></h1>                      
        </div>  
                
    </div>

    <?php include 'templates/footer.php'; ?>
    
</body>
</html>