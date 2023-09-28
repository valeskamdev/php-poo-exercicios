<?php
require_once "src/Tecnico.php";
require_once "src/Programacao.php";
require_once "src/Didatico.php";

$livroTecnico = new Tecnico();
$livroProgramacao = new Programacao();
$livroDidatico = new Didatico();

$livroTecnico->setTitulo("Introdução à Inteligência Artificial");
$livroTecnico->setAutor("Stuart Russell e Peter Norvig");
$livroTecnico->setPaginas(1982);
$livroTecnico->setFormato(["digital"]);

$livroProgramacao->setTitulo("Aprenda Python 3 do Zero");
$livroProgramacao->setAutor("Daniel Góes");
$livroProgramacao->setPaginas(312);
$livroProgramacao->setArea("Back End");
$livroProgramacao->setFormato(["fisico"]);

$livroDidatico->setTitulo("História Geral: Da Pré-História aos Dias Atuais");
$livroDidatico->setAutor("Maria Luiza Marcilio");
$livroDidatico->setPaginas(543);
$livroDidatico->setNivel(["superior"]);
$livroDidatico->setDisciplina("História");
$livroDidatico->setFormato(["fisico"]);

var_dump($livroTecnico, $livroProgramacao, $livroDidatico);
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercício POO</title>
  <style>
  </style>
</head>
<body>
    <h1>Livros famosos</h1>

    <h2>Livro Técnico</h2>

    <h3><?= $livroTecnico->getTitulo() ?></h3>
    <p>Autor: <?= $livroTecnico->getAutor() ?></p>
    <p>Páginas: <?= $livroTecnico->getPaginas() ?></p>
    <p>Formato: <?= $livroTecnico->getFormato() ?></p>

    <h2>Livro de Programação</h2>

    <h3><?= $livroProgramacao->getTitulo() ?></h3>
    <p>Autor: <?= $livroProgramacao->getAutor() ?></p>
    <p>Páginas: <?= $livroProgramacao->getPaginas() ?></p>
    <p>Área: <?= $livroProgramacao->getArea() ?></p>
    <p>Formato: <?= $livroProgramacao->getFormato() ?></p>

    <h2>Livro Didático</h2>

    <h3><?= $livroDidatico->getTitulo() ?></h3>
    <p>Autor: <?= $livroDidatico->getAutor() ?></p>
    <p>Páginas: <?= $livroDidatico->getPaginas() ?></p>
    <?php foreach ($livroDidatico->getNivel() as $nivel) : ?>
      <p>Nível: <?= $nivel . " " ?></p>
    <?php endforeach; ?>
    <p>Disciplina: <?= $livroDidatico->getDisciplina() ?></p>
    <p>Formato: <?= $livroDidatico->getFormato() ?></p>

</body>
</html>