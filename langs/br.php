<?php  
	@session_start();
	if(isset($_SESSION['exist'])){
		session_unset( $_SESSION['exist'] );
	}

// ************** General Settings **********************//
$navLeftDescription  	 				= "Menu Principal";
$navLeftHome 		 	 				= "Trabalhos";
$navLefContact  	 	 				= "Contato";
$navLefFormation	 	 				= "Curriculo";
$logoSub 			 	 				= "desenvolvimento web";
$closeWord			 	 				= "Fechar";
$descriptions 		 	 				= "Desenvolvimento de Sites em São José dos Campos - SP";
$whyHaveSite 			 				= "Porque devo ter um site?";
$about 					 				= "Sobre mim";
$tipFront 				 				= "Tecnologias web, referente a aparência.";
$tipBack 				 				= "Programação em geral";
$tipOther 				 				= "Outras tecnologias (Ex: CMS, SEO etc..)";
$titleFrontButton 		 				= "Design";
$titleBackButton		 				= "Code";
$titleOtherButton 		 				= "Outros";
$backCurriculoButton			 		= "Voltar";
$levelTecnologie 			 			= "nível de conhecimento:";
$error									= "Erro padrão";
$errorPage 								= "A página que você está procurando não existe!";

// ************** About Me Settings **********************//
$aboutTitle 							= 
"Diogo Cercílio - Desenvolvedor Front End";

$aboutContent 							= 
"Meu nome é Diogo Cercílio, tenho 26 anos, e desenvolvo soluções para internet.</p>
<p>Meu principal foco é a qualidade de cada projeto desenvolvido, por isso busco estar em constante evolução, seja através 
de leitura, discussões, novos projetos e é claro, estudando sempre.</p>
<p>Procuro cada vez mais atingir os mais elevados níveis de cada competência que me propus a trabalhar.";

$aboutContentTwo 							= 
"<p class='rightAbout'>Atualmente trabalho como desenvolvedor freelancer, e busco sempre novos desafios na área de TI, que felizmente é uma área
onde não há limites para evolução!</p>";

// ************** Contact Settings **********************//	
$contactTitle 							= "Contato";
$contactContent							= "Sinta-se a vontade para deixar sua mensagem. Obrigado.";
$formName							    = "Nome:";
$formPhone								= "Telefone:";
$formEmail								= "E-mail:";
$formSend								= "Enviar";
$formMessage							= "Mensagem enviada com sucesso! Obrigado!";

// ************** Jobs General Settings **********************//
$workDescriptionTitle		 			= "Descrição do site:";
$workDescriptionYear		 		 	= "Ano de criação:";
$workDescriptionTechsUsed				= "Tecnologias utilizadas neste projeto:";

// ************** Jobs Description Settings **********************//
$firstJobTitle 							= "Camilo Tattoo Studio";
$firstJobDescription 					= 
"
	
	<p>Camilo Tattoo - Estúdio de tatuagem em São José dos Campos. - 2011.</p>

";
$techsUsedImageOne = '				
			<img src="img/html.png" alt="">
			<img src="img/html5.png" alt="">
			<img src="img/css.png" alt="">
			<img src="img/css3.png" alt="">			
			<img src="img/js.png" alt="">
			<img src="img/jq.png" alt="">
			<img src="img/php.png" alt="">												
			<img src="img/fw.png" alt="">
			<img src="img/seo.png" alt="">						
';


$secondJobTitle 						= "Pallace Cosméticos";
$secondJobDescription					= 
"
	<p>Pallace cosméticos São José dos Campos - 2013 - Empresa de venda de produtos e serviços destinado a beleza da mulher.</p>
	
	<p>O serviço feito neste site não foi o desenvolvimento, mas sim a correção de erros de performance, reformulação do layout, e reformulação das interações com o usuário.</p><br>
	<p>Visite este site clicando <a href='http://www.pallace.com.br' target='_blank'>aqui</a></p>
";
$techsUsedImageTwo = '				
			<img src="img/html.png" alt="">
			<img src="img/html5.png" alt="">
			<img src="img/css.png" alt="">
			<img src="img/css3.png" alt="">
			<img src="img/js.png" alt="">
			<img src="img/jq.png" alt="">
			<img src="img/seo.png" alt="">
			<img src="img/fw.png" alt="">
			<img src="img/php.png" alt="">								
';	


$thirdJobTitle							= "Diogo Cercílio - Portfólio de trabalho";
$thirdJobDescription 					= 
"
	<p>Diogo Cercílio - Portfólio de trabalho (Este site). 2013.</p>
	<p>Desenvolvimento do zero do layout, e programação do site.</p><p>Este site está em constante atualização.</p>
";
$techsUsedImageThree = '				
			<img src="img/html.png" alt="">
			<img src="img/html5.png" alt="">
			<img src="img/css.png" alt="">
			<img src="img/css3.png" alt="">
			<img src="img/js.png" alt="">
			<img src="img/jq.png" alt="">			
			<img src="img/seo.png" alt="">	
			<img src="img/fw.png" alt="">
			<img src="img/php.png" alt="">																						
';

$fourthJobTitle						= "Candidato as eleições 2012 -  Alex Pimenta";
$fourthJobDescription 					= 
"
	Flyer para distribuição do candidato a vereador em Caçapava Alex Pimenta, nas eleições de 2012.
";

$techsUsedImageFour = '				
			<img src="img/ps.png" alt="">
';


$fifthJobTitle							= "Template para empresa de transporte executivo";
$fifthJobDescription 					= "

<p>Template para empresa de transporte executivo (Não comercializado) - 2012 - Design dos elementos e programação em geral. 
Trata-se de um template pronto para ser comercializado.<p> 

";
$techsUsedImageFive = '				
			<img src="img/html.png" alt="">
			<img src="img/html5.png" alt="">
			<img src="img/css.png" alt="">
			<img src="img/css3.png" alt="">
			<img src="img/js.png" alt="">			
			<img src="img/jq.png" alt="">
			<img src="img/seo.png" alt="">
			<img src="img/fw.png" alt="">
			<img src="img/php.png" alt="">															
';


$sixthJobTitle							= "Celi e Cíntia - Salão de Beleza.";
$sixthJobDescription 					= "

<p>Celi e Cíntia - Salão de beleza em São José dos Campos. 2012<p> 

";
$techsUsedImageSix = '				
			<img src="img/html.png" alt="">
			<img src="img/html5.png" alt="">
			<img src="img/css.png" alt="">
			<img src="img/css3.png" alt="">
			<img src="img/js.png" alt="">			
			<img src="img/jq.png" alt="">	
			<img src="img/seo.png" alt="">
			<img src="img/fw.png" alt="">
			<img src="img/php.png" alt="">														
';

$seventhJobTitle						= "Poliedro - Novas Coleções.";
$seventhJobDescription 					= "

<p>Hotsite para divulgação das novas coleções do Sistema de Ensino Poliedro.<p> 
<p>Clique <a href='http://www.sistemapoliedro.com.br/lancamento' target='_blank'>aqui</a> para visitar este site.</p> 

";
$techsUsedImageSeven = '				
			<img src="img/html.png" alt="">
			<img src="img/html5.png" alt="">
			<img src="img/css.png" alt="">
			<img src="img/css3.png" alt="">
			<img src="img/js.png" alt="">			
			<img src="img/jq.png" alt="">	
			<img src="img/seo.png" alt="">
			<img src="img/fw.png" alt="">														
';

$eighthJobTitle							= "Núcleo de Educação e Pesquisas Poliedro.";
$eighthJobDescription 					= "

<p>Hotsite do Núcleo de Educação e Pesquisas Poliedro 2013.<p>
<p>Clique <a href='http://www.sistemapoliedro.com.br/nepp' target='_blank'>aqui</a> para visitar este site.</p> 

";
$techsUsedImageEight = '				
			<img src="img/html.png" alt="">
			<img src="img/html5.png" alt="">
			<img src="img/css.png" alt="">
			<img src="img/css3.png" alt="">
			<img src="img/js.png" alt="">			
			<img src="img/jq.png" alt="">	
			<img src="img/seo.png" alt="">
			<img src="img/fw.png" alt="">														
';


// Considering performance, the limit of jobs is 8.

// ************** Formation General Settings **********************//
$titleCurriculoFrontDescription 		= "Conhecimentos - Desenvolvimento Front End";
$subTitleCurriculoFrontDescription 		= 
"
	Tudo relacionado a parte visual de um site ou sistema, e interatividade com o usuário (que pode ser visto).
";
$titleCurriculoBackDescription 			= "Conhecimentos - Desenvolvimento Back End";
$subTitleCurriculoBackDescription 		= 
"
	Tecnologias para desenvolvimento Back end, ou seja, desenvolvimento da inteligência de um site ou sistema.	
";
$titleCurriculoOtherDescription 		= "Conhecimentos - Outras ferramentas";
$subTitleCurriculoOtherDescription 		= 
"
	Outras tecnologias que auxiliam o desenvolvimento web, tais como gerenciadores de conteúdo, técnicas de otimização, debug e metodolia de trabalho.
";

// ************** Formation Front Settings **********************//
// 1st Job
$imageFrontTecnologieOne				= "img/html.png";
$descriptionFrontTecnologieTitleOne 	= "Html";
$descriptionFrontTecnologieContentOne 	= 
"
	HTML - Ótimo conhecimento das tags e organização dos elementos, sempre separados de quaisquer outro tipo de linguagem. Desenvolvo um código semântico, limpo, e de fácil manutenção, me baseando sempre no desenvolvimento sem tabelas ('tableless'). 
";
$levelFrontOne							= "five";

// 2nd Job
$imageFrontTecnologieTwo				= "img/html5.png";
$descriptionFrontTecnologieTitleTwo 	= "HTML5";
$descriptionFrontTecnologieContentTwo 	= 
"
	HTML5 - Uso das Novas tags (aplicadas com consciência). HTML5 ainda é uma linguagem nova, e por isso a acompanho constantemente.
	Ainda não desenvolvo SVG e Canvas (em breve). 
";
$levelFrontTwo							= "three";

// 3rd Job 
$imageFrontTecnologieThree				= "img/css.png";
$descriptionFrontTecnologieTitleThree 	= "CSS";
$descriptionFrontTecnologieContentThree = 
"
	CSS - Ótimo conhecimento dos seletores e atributos da linguagem. Como meu HTML, meu CSS é estilizado e organizado da maneira mais simples possível, porém sempre de qualidade. Desenvolvo código sempre comentado (o que for necessário), e faço as validações necessárias. Sei também a importância do desenvolvimento responsivo (quando necessário), e do desenvolvimento  crossbrowser.  
";
$levelFrontThree						= "five";

// 4st Job
$imageFrontTecnologieFour				= "img/css3.png";
$descriptionFrontTecnologieTitleFour 	= "CSS3";
$descriptionFrontTecnologieContentFour 	= 
"
	CSS3 - Conhecimento dos novos seletores e atributos da linguagem, tais como border radius, gradients, box-shadow, animate, transition, elementos a animações 3D, etc.  
";
$levelFrontFour							= "five";

// 5nd Job
$imageFrontTecnologieFive				= "img/js.png";
$descriptionFrontTecnologieTitleFive 	= "Javascript";
$descriptionFrontTecnologieContentFive 	= 
"
	Javascript - Conhecimento da sintaxe da linguagem, variáveis, tipos de dados, blocos condicionais, blocos de repetição, métodos, objetos, funções, arrays etc.
	Uso javascript juntamente com jquery.
	Sigo o conceito do desenvolvimento não obstrutivo, e mantenho meu código o mais organizado possível. 
";
$levelFrontFive					        = "three";

// 6st Job
$imageFrontTecnologieSix				= "img/jq.png";
$descriptionFrontTecnologieTitleSix 	= "Jquery";
$descriptionFrontTecnologieContentSix 	= 
'	
	Jquery - Considero essencial em qualquer projeto, devido as grandes possibilidades que esta biblioteca pode nos trazer, seja para frontend ou backend. <br> Tenho conhecimento dos seletores (classe, id, atributos etc), e dos métodos da linguagem, que juntamente com javascript "puro" torna-se mais poderosa ainda.   
';

$levelFrontSix							= "four";

// 7st Job
$imageFrontTecnologieSeven				= "img/ui.png";
$descriptionFrontTecnologieTitleSeven 	= "Jquery UI";
$descriptionFrontTecnologieContentSeven = 
"
	Jquery User Interface - Ótima biblioteca para agilizar qualquer projeto.  

";
$levelFrontSeven						= "five";

// 8rd Job
$imageFrontTecnologieEight				= "img/ajax.png";
$descriptionFrontTecnologieTitleEight 	= "Ajax";
$descriptionFrontTecnologieContentEight = 
"
	Ajax - Utilizo ajax apenas para pequenas requisições.
";
$levelFrontEight						= "two";

// 9nd Job
$imageFrontTecnologieNine				= "img/fw.png";
$descriptionFrontTecnologieTitleNine 	= "FireWorks";
$descriptionFrontTecnologieContentNine	= 
"
	Fireworks - Utilizo FireWorks em praticamente todos os meus projetos, e tenho domínio das ferramentas para desenvolvimento deste software.
";
$levelFrontNine							= "five";

// 10nd Job
$imageFrontTecnologieTen				= "img/ps.png";
$descriptionFrontTecnologieTitleTen 	= "Photoshop";
$descriptionFrontTecnologieContentTen	= 
"
	Photoshop - Como utilizo mais o fireworks, não tenho muita experiência no Photoshop, porém ultimamente tenho me empenhado em melhorar meu entendimento deste software.
";
$levelFrontTen							= "two";

// ************** Formation Back Settings **********************//
// 1st Job
$imageBackTecnologieOne				    = "img/java.png";
$descriptionBackTecnologieTitleOne    	= "Java (SE)";
$descriptionBackTecnologieContentOne 	= 
"
	JAVA (Standard edition) - A pouco tempo comecei a estudar esta linguagem, devido seu enorme potencial. Ainda não me considero programador Java, mas já conheço os conceitos e algumas aplicações da linguagem.
";
$levelBackOne							= "one";

// 2nd Job
$imageBackTecnologieTwo				    = "img/php.png";
$descriptionBackTecnologieTitleTwo    	= "PHP";
$descriptionBackTecnologieContentTwo 	= 
"
	PHP - Utilizei PHP em quase todos os meus projetos. Tenho conhecimento da sintaxe da linguagem, variáveis, tipos de dados, blocos condicionais, blocos de repetição, métodos, objetos, funções, arrays etc.
";
$levelBackTwo							= "three";

// 3rd Job 
$imageBackTecnologieThree				= "img/mysql.png";
$descriptionBackTecnologieTitleThree 	= "Mysql";
$descriptionBackTecnologieContentThree  = 
"
	Mysql - Conhecimento de CRUD - create, retrieve (alguns chamam read), update e delete. Utilizo juntamente com PHP.

";
$levelBackThree						    = "three";

// 4st Job
$imageBackTecnologieFour				= "img/js.png";
$descriptionBackTecnologieTitleFour 	= "Javascript";
$descriptionBackTecnologieContentFour 	= 
"
	Javascript - Conhecimento da sintaxe da linguagem, variáveis, tipos de dados, blocos condicionais, blocos de repetição, métodos, objetos, funções, arrays etc.
	Uso javascript juntamente com jquery.
	Sigo o conceito do desenvolvimento não obstrutivo, e mantenho meu código o mais organizado possível. 
";
$levelBackFour							= "three";

// 5nd Job
$imageBackTecnologieFive				= "img/jq.png";
$descriptionBackTecnologieTitleFive 	= "Jquery";
$descriptionBackTecnologieContentFive 	= 
'	
	Jquery - Considero essencial em qualquer projeto, devido as grandes possibilidades que esta biblioteca pode nos trazer, seja para frontend ou backend. <br> Tenho conhecimento dos seletores (classe, id, atributos etc), e dos métodos da linguagem, que juntamente com javascript "puro" torna-se mais poderosa ainda.   
';
$levelBackFive					        = "four";

// 6rd Job
$imageBackTecnologieSix			    	= "";
$descriptionBackTecnologieTitleSix 	    = "";
$descriptionBackTecnologieContentSix    = "";
$levelBackSix							= "";

// 7st Job
$imageBackTecnologieSeven				= "";
$descriptionBackTecnologieTitleSeven 	= "";
$descriptionBackTecnologieContentSeven  = "";
$levelBackSeven						    = "";

// 8nd Job
$imageBackTecnologieEight				= "";
$descriptionBackTecnologieTitleEight 	= "";
$descriptionBackTecnologieContentEight	= "";
$levelBackEight						    = "";

// ************** Formation Other Settings **********************//	
// 1st Job
$imageOtherTecnologieOne				= "img/maps.png";
$descriptionOtherTecnologieTitleOne    	= "API Google Maps - V2 e V3";
$descriptionOtherTecnologieContentOne 	= 
"
	Exemplo de um projeto que desenvolvi <a style='color:#fff;' href='http://www.sistemapoliedro.com.br/sep/unidades_parceiras/' target='_blank'>aqui</a>. 
";
$levelOtherOne							= "three";

// 2nd Job
$imageOtherTecnologieTwo			    = "img/seo.png";
$descriptionOtherTecnologieTitleTwo    	= "SEO";
$descriptionOtherTecnologieContentTwo 	= 
"
	SEO - Conhecimento de técnicas de Search Optimization Engine, tais como analytics, Google +, meta tags, disposição dos conteúdos, títulos de textos, títulos de páginas, para melhora nas indexações, performance do site (conta e muito), urls, amigáveis, integração com redes sociais etc. 

";
$levelOtherTwo							= "four";

// 3rd Job 
$imageOtherTecnologieThree				= "img/firebug.png";
$descriptionOtherTecnologieTitleThree 	= "Firebug";
$descriptionOtherTecnologieContentThree = 
"
	Firebug - Conhecimento desta ferramenta para debugar o código, o que traz uma grande agilidade ao desenvolvedor. Também utilizo o debug do Chrome. 

";
$levelOtherThree					    = "five";

// 4st Job
$imageOtherTecnologieFour				= "img/sublime.png";
$descriptionOtherTecnologieTitleFour 	= "Sublime Text";
$descriptionOtherTecnologieContentFour 	= 
"
	Sublime Text - IDE na qual qual hoje desenvolvo meus projetos. Também é de extrema importância, uma vez que me traz as praticidades do PACKAGE CONTROL, além de seus inúmeros snippets e interface amigável.  
";
$levelOtherFour							= "five";

// 5nd Job
$imageOtherTecnologieFive				= "img/joomla.png";
$descriptionOtherTecnologieTitleFive 	= "Joomla";
$descriptionOtherTecnologieContentFive 	= 
"
	CMS JOOMLA - Instalação e manutenção do administrador, e básico do desenvolvimento de temas. 

";
$levelOtherFive					        = "three";

// 6rd Job
$imageOtherTecnologieSix			    = "img/wp.png";
$descriptionOtherTecnologieTitleSix 	= "Wordpress";
$descriptionOtherTecnologieContentSix   = 
"
	CMS Wordpress - Instalação e manutenção do administrador, e básico do desenvolvimento de temas.
";
$levelOtherSix							= "three";

// 7st Job
$imageOtherTecnologieSeven				= "img/scrum.png";
$descriptionOtherTecnologieTitleSeven 	= "Scrum";
$descriptionOtherTecnologieContentSeven = 
"
	SCRUM - Tenho experiência com esta metodologia de trabalho, na qual traz um grande ganho de produtividade.
";
$levelOtherSeven						= "five";

// 1st Job
$imageOtherTecnologieEight				= "img/eclipse.png";
$descriptionOtherTecnologieTitleEight   = "Eclipse";
$descriptionOtherTecnologieContentEight = 
"
	Eclipse - Conhecimento básico da IDE. Estou me aprimorando. 
";
$levelOtherEight						= "one";

?>