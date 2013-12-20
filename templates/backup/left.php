
<img src="img/bgNav.jpg" id="hide" alt="" style="margin-top: 30px;" />
     
<style>
	
	.coming-soon{
		font-style: italic!important;
		font-size: 12px!important;
		font-weight: 100!important;
		background: none!important;
		float: left!important;
		font-family: arial!important;
		position: absolute!important;
		top: 6px!important;
		right: 32px!important;
		width: 112px!important;
		border: none!important;	
	}

</style>

<ul id="sliding-navigation">
    <li class="sliding-element"><h3><?php echo $navLeftDescription; ?></h3></li>
    <li class="sliding-element"><a href="" class="inicio"><?php echo $navLeftHome;?></a></li> 
    <li class="sliding-element"><a href="" class="tecnologias"><?php echo $navLefFormation ;?></a></li>
    <li class="sliding-element"><a href="" class="sobre"><?php echo $about;?></a></li>
    <li class="sliding-element"><a href="" class="contato"><?php echo $navLefContact;?></a></li>
    <li style="position:relative;" class="sliding-element"><a href="http://www.diogocercilio.com/blog" target="_blank">Blog <span class="coming-soon">(em construção)</span></a></li>
</ul>

<div class="info">
	<?php include 'templates/myInfo.php'; ?>       
</div>