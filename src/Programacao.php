<?php

require_once "Tecnico.php";

final class Programacao extends Tecnico
{
    private string $area;

    /**
     * @return string
     */
    public function getArea(): string
    {
        return $this->area;
    }

    /**
     * @param  string  $area
     */
    public function setArea(string $area): void
    {
        $this->area = $area;
    }
}