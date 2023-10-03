<?php
namespace Livraria;

class Tecnico extends Livro
{
    private array $formato = ["digital", "fisica"];

    /**
     * @return string
     */
    public function getFormato(): string
    {
        return implode(", ", $this->formato);
    }

    /**
     * @param  array  $formato
     */
    public function setFormato(array $formato): void
    {
        $this->formato = $formato;
    }
}