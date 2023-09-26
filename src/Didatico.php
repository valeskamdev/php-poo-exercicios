<?php

class Didatico extends Tecnico
{
    private string $disciplina;
    private array $nivel = ["básico", "médio", "superior"];

    /**
     * @return string
     */
    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    /**
     * @param  string  $disciplina
     */
    public function setDisciplina(string $disciplina): void
    {
        $this->disciplina = $disciplina;
    }

    /**
     * @return string
     */
    public function getNivel(): string
    {
        return implode(", ", $this->nivel);
    }

    /**
     * @param  array  $nivel
     */
    public function setNivel(array $nivel): void
    {
        $this->nivel = $nivel;
    }
}