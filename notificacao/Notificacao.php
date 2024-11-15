<?php

class Notificacao{
    private string $destinatario;
    private string $mensagem;
    

    public function __construct(string $destinatario, string $mensagem){
        $this->setDestinatario($destinatario);
        $this->setMensagem($mensagem);
    }

    public function getDestinatario(): string{
        return $this->destinatario;
    }

    public function setDestinatario(string $destinatario): void{
        $this->destinatario = $destinatario;
    }


    public function getMensagem(): string{
        return $this->mensagem;
    }

    public function setMensagem(string $mensagem): void{
        $this->mensagem = $mensagem;
    }


    public function enviar(){
        echo "Enviando para {$this->getDestinatario()} com a mensagem {$this->getMensagem()}";
    }
}