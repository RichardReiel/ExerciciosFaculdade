<?php

require_once("Notificacao.php");


class NotificacaoPush extends Notificacao{

    public function enviar(){
        echo "Enviando push para {$this->getDestinatario()} com a mensagem {$this->getMensagem()}";
    }


}