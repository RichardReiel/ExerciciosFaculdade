<?php

require_once("Notificacao.php");
require_once("NotificacaoEmail.php");
require_once("NotificacaoSms.php");
require_once("NotificacaoPush.php");


$n1 = new NotificacaoEmail("destinatario@example.com", "Olá, isso é uma notificação!");
$n2 = new NotificacaoSMS("+559912345678", "Olá, isso é uma notificação!");
$n3 = new NotificacaoPush("usuario123", "Olá, isso é uma notificação!");

$notificacao = [$n1, $n2, $n3];

foreach ($notificacao as $mensagem){
    echo "{$mensagem->enviar()}<br>";
}