# envio de e-mail utilizando PHPMailer e Ajax.


Para alterar a conta de envio, acesse o arquivo "enviar.php" e altere as seguintes variaveis:
$mail->SMTPSecure: Conexão segura com o servidor de e-mail, sendo SSL/TLS, STARTLS ou NENHUMA. Deverá ser preenchida de acordo com o seu servidor de envio de e-mail;
$mail->SMTPAuth: Define se a conexão será autenticada pela servidor;
$mail->Host: Define o servidor SMTP de seu e-mail;
$mail->Port: Define a porta de conexão com o seu servidor de e-mail;
$mail->Username: Define o e-mail que irá disparar as mensagens;
$mail->Password: Define a senha do e-mail de envio;
$mail->setFrom: Define o e-mail de envio no corpo do e-mail para o receptor, deve ser preenchido com o mesmo informado anteriormente;
$mail->addAddress: Define o e-mail que irá receber a mensagem;
$mail->Subject: Define o assunto do e-mail a ser encaminhado;
$mail->Body: Define o corpo da mensagem.
