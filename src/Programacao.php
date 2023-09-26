<?php

class Programacao extends Tecnico
{
    private string $atuacao;

    /**
     * @return string
     */
    public function getAtuacao(): string
    {
        return $this->atuacao;
    }

    /**
     * @param  string  $atuacao
     */
    public function setAtuacao(string $atuacao): void
    {
        $this->atuacao = $atuacao;
    }
}