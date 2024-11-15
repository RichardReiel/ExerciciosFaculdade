<?php

require_once("Notificacao.php");


class NotificacaoSms extends Notificacao{

    public function enviar(){
        echo "Enviando sms para {$this->getDestinatario()} com a mensagem {$this->getMensagem()}";
    }


}