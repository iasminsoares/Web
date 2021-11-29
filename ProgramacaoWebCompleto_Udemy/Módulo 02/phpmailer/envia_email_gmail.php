<?php

	/* script configurado para funcionar com o serviço de smtp do gmail */
	/* cuidado para não expor seus dados de usuário e senha de email */
	/* o gmail implementa uma segurança para permitir ou não o acesso ao seu e-mail através de aplicativos menos seguros (como é caso), ao efetuar o teste de envio de e-mail consulte sua caixa de mensagem, caso esta configuração esteja desabilitada você receberá um e-mail do google questionando se deve ou não habilitar tal acesso */
	
	require 'PHPMailer\PHPMailerAutoload.php';
	
	//configurações básicas de endereço e protoloco 
	$mail = new PHPMailer; //faz a instância do objeto PHPMailer
	//$mail->SMTPDebug = true; //habilita o debug se parâmetro for true
	$mail->isSMTP(); //seta o tipo de protocolo
	$mail->Host = 'smtp.gmail.com'; //define o servidor smtp
	$mail->SMTPAuth = true; //habilita a autenticação via smtp
	$mail->SMTPOptions = [ 'ssl' => [ 'verify_peer' => false ] ];
	$mail->SMTPSecure = 'tls'; //tipo de segurança
	$mail->Port = 587; //porta de conexão
	
	//dados de autenticação no servidor smtp
	$mail->Username = 'seu_email@gmail.com'; //usuário do smtp (email cadastrado no servidor)
	$mail->Password = 'sua_senha'; //senha ****CUIDADO PARA NÃO EXPOR ESSA INFORMAÇÃO NA INTERNET OU NO FÓRUM DE DÚVIDAS DO CURSO****
	
	//dados de envio de e-mail
	$mail->addAddress('jorge.t.s.silva@gmail.com', 'Jorge Teste'); //e-mails que receberam a mesagem
	
	//configuração da mensagem
	$mail->isHTML(true); //formato da mensagem de e-mail
	$mail->Subject = 'Assunto do e-mail'; //assunto
	$mail->Body    = 'Corpo da mensagem <b>HTML</b>'; //Se o formato da mensagem for HTML você poderá utilizar as tags do HTML no corpo do e-mail
	$mail->AltBody = 'Caso não seja suportado o HTML, aqui vai a mensagem em texto'; //texto alternativo caso o html não seja suportado
	
	//envio e testes
	if(!$mail->send()) { //Neste momento duas ações são feitas, primeiro o send() (envio da mensagem) que retorna true ou false, se retornar false (não enviado) juntamente com o operador de negação "!" entra no bloco if.
		echo 'A mensagem não pode ser enviada ';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'A mensagem foi enviada com sucesso!';
	}
?>