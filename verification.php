<!-- verification alterado -->

<?php

header ('Content-type: text/html; charset=UTF-8');

		verificaAssunto();

function verificaAssunto(){
	if(!empty($_POST['contact_assunto'])){
		if(!strstr($_POST['contact_assunto'],'*')){
			if(strlen($_POST['contact_assunto']) > 4){

					verificaNome();

			}else{echo "Erro. Campo Assunto deve ter mínimo de 5 letras.";}
		}else{echo 'caracter inválido informado em - "Assunto"';}
	}else{echo "Assunto vazio";}
}

function verificaNome(){
	if(!empty($_POST['contact_name'])){
		if(!strstr($_POST['contact_name'],'*')){
			if(strlen($_POST['contact_name']) > 1){
				if(!is_numeric($_POST['contact_name'])){

					verificaDDD();

				}else{echo "Erro. Não é possível ter números no nome.";}
			}else{echo "Erro. Você tem um nome de uma letra?";}
		}else{echo 'caracter inválido informado em - "Nome"';}
	}else{echo "nome vazio";}
}

function verificaDDD(){
	if(!empty($_POST['contact_ddd'])){
		if(!strstr($_POST['contact_ddd'],'*')){
			if(strlen($_POST['contact_ddd']) > 1 && strlen($_POST['contact_ddd']) < 6){
				if(is_numeric($_POST['contact_ddd'])){

					verificaTelefone();

				}else{echo "Erro. Não é possivel ter letras no DDD.";}
			}else{echo "Erro. DDD incorreto!";}
		}else{echo 'caracter inválido informado em - "DDD"';}
	}else{echo "DDD vazio";}	
}

function verificaTelefone(){
	if(!empty($_POST['contact_phone'])){
		if(!strstr($_POST['contact_phone'],'*')){
			if(strlen($_POST['contact_phone']) > 7 && strlen($_POST['contact_phone']) < 13){
				if(is_numeric($_POST['contact_phone'])){

					verificaEmail();

				}else{echo "Erro. Preencha o campo telefone somente com numeros, e sem espaços ou traços.";}
			}else{echo "Erro. telefone incorreto!";}
		}else{echo 'caracter inválido informado em - "Telefone"';}
	}else{echo "Opção Telefone vazia.";}	
}

function verificaEmail(){
	if(!empty($_POST['contact_mail'])){
		if(!strstr($_POST['contact_mail'],'*')){
			if(strlen($_POST['contact_mail']) > 7){
				if(strstr($_POST['contact_mail'],'@')){
					if(strstr($_POST['contact_mail'],'.')){
					
						verificaMessage();
				
					}else{echo "Erro. E-mail incorreto!";}
				}else{echo "Erro. E-mail incorreto!";}
			}else{echo "Erro. E-mail incorreto!";}
		}else{echo 'caracter inválido informado em - "E-mail"';}
	}else{echo "Email vazio";}		
}

function verificaMessage(){
	if(!empty($_POST['contact_message'])){
		if(!strstr($_POST['contact_message'],'*')){
			if(strlen($_POST['contact_message']) < 1000){
				if(!strstr($_POST['contact_message'],'WHERE 1')){
					
						sendData();
				
				}else{echo'caracter inválido informado em - "Mensagem"';}
			}else{echo "Limite maximo de caracteres atingido!";}
		}else{echo 'caracter inválido informado em - "Mensagem"';}
	}else{echo "Mensagem vazia";}		
}

function sendData(){
	
	$nameCliente    	= $_POST['contact_name'];
	$mailCliente     	= $_POST['contact_mail'];
	$emaildestinatario	= 'diogocerciliu@gmail.com';
	$ddd      	   	   	= $_POST['contact_ddd'];
	$telefone      	   	= $_POST['contact_phone'];
	$textoObservacao   	= $_POST['contact_message'];	
	$assunto 			= $_POST['contact_assunto'];

	$mensagemHTML = '<P>Contato feito pelo site:</P>
					<p><b>Nome:</b> '.$nameCliente.'
					<p><b>E-Mail:</b> '.$mailCliente.'</p>
					<b>Telefone:</b> ('.$ddd.') '.$telefone.'
					<p><b>Assunto:</b> '.$assunto.$ddd.$telefone.'
					<p><b>Mensagem:</b> '.$textoObservacao.'</p>
					<hr>';

	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: $nameCliente\r\n"; // remetente
	$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
	$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
	 

	 echo "<script>$('input:text,textarea').val('');</script>";
	 if($envio)
		echo "mensagem enviada com sucesso! Obrigado!";
}

?>