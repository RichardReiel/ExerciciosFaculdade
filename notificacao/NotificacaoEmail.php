<?php

require_once("Notificacao.php");


class NotificacaoEmail extends Notificacao{

    public function enviar(){
        echo "Enviando e-mail para {$this->getDestinatario()} com a mensagem {$this->getMensagem()}";
    }


}