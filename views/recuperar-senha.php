
<?php

require_once("../phpmailer/PHPMailer.php");
error_reporting(E_ALL);
error_reporting(E_STRICT);
date_default_timezone_set('America/Sao_Paulo');
$ip = getenv("REMOTE_ADDR");
// variáveis que guardam os dados vindo do form
$nomeusuario = "Daniel Dantas";
$emailusuario = "ddipaumirim@gmail.com";
$Fone = "dasdad";
$mensagem = "teste123";
$contatos = "dasdadsd";
$autorizos = "dasdadasdd";

$Email = new PHPMailer();
$Email->SetLanguage("br");
$Email->IsMail();
$Email->IsHTML(true);

$Email->From = $emailusuario;
$Email->FromName = $nomeusuario;
$Email->AddAddress("daniel.dantas.ip18@gmail.com");
$Email->Subject = "Teste";
$Email->AddBcc($emailusuario);

$body = "<-html
<-body
<-table align=center border=1px
<-tr>
  <-td colspan=2 align=center>CONTATO
<-tr>
  <-td>Nome completo: <-td> ".$nomeusuario."
<-tr>
  <-td>E-mail atual: <-td> ".$emailusuario."
<-tr>
  <-td>Nº de contato: <-td>".$Fone."
<-tr>
  <-td>Autorizo newsletter: <-td> ".$autorizos."
<-tr>
  <-td>Forma de contato: <-td> ".$contatos."
<-tr>
  <-td>Mensagem: <-td> ".$mensagem."";
 
$Email->MsgHTML($body); 
$Email->WordWrap = 50;
             


if(!$Email->Send()) {
  echo "A mensagem não foi enviada.";
echo "Mensagem de erro: " . $Email->ErrorInfo;
} else {
  echo "Mensagem enviada!";
}
 
 
?>