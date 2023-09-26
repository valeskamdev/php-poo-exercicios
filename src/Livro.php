<?php

abstract class Livro
{
    private string $titulo;
    private string $autor;
    private int $paginas = 0;


    public function __construct(string $titulo, string $autor, int $paginas)
    {
        $this->titulo  = $titulo;
        $this->autor   = $autor;
        $this->paginas = $paginas;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param  string  $titulo
     */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return string
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * @param  string  $autor
     */
    public function setAutor(string $autor): void
    {
        $this->autor = $autor;
    }

    /**
     * @return int
     */
    public function getPaginas(): int
    {
        return $this->paginas;
    }

    /**
     * @param  int  $paginas
     */
    public function setPaginas(int $paginas): void
    {
        $this->paginas = $paginas;
    }
}