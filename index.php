<!doctype html>
<html lang="pt-br">
<head>
    <meta name="robots" content="index,follow">
    <?php include 'templates/head.php'; ?>
</head>
<body id="#inicio" onload="loadImage();">
    <div class="navFixed">
        <?php include 'templates/navFixed.php'; ?>
    </div>
    <!-- Box que acompanha o mouse no banner trabalhos. Ativa on hover -->
    <div class="tooltipWork"></div>
    <!-- faixa no fundo do site -->
    <div class="glow"></div>
    <div class="home"></div>
    <!-- Parte superior do site -->
    <div class="wrapperTop"><?php include 'templates/top.php'; ?></div>
    <div class="teste"></div>
    <div class="wrapper">    
        <!-- Menu lateral -->
        <div class="nav"><?php include 'templates/left.php'; ?></div>
        <!-- Exibe mensagens em geral caso haja alguma -->
        <?php include 'templates/message.php'; ?>
        <!-- Exibe os trabalhos --> 
        <div class="banner">
            <?php include('templates/works.php');?>                            
        </div>
        <!-- Exibe maiores detalhes sobre cada trabalho -->
        <div class="moreWorks">
            <?php include 'templates/moreWorks.php'; ?>
        </div>
        <!-- Exibe os boxes  -->
        <div class="content">
            <hr class="divideContent">
                <?php include 'templates/boxes.php'; ?>    
            <hr class="divideContent">                                             
        </div>   
        <div class="content" style="margin-top: 0px;">
            <?php include 'templates/about.php'; ?>
        </div>       
    </div>
    <div id="contato">
        <div class="boxContact">
            <?php include 'templates/contact.php';?>
        </div>
    </div>
    <?php include 'templates/footer.php'; ?>
</body>
</html>