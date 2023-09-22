<?php
require_once "src/Livro.php";

$livroA = new Livro("Dom Quixote", "Miguel de Cervantes", 325);
$livroB = new Livro("A Metamorfose", "Franz Kafka", 213);
$livroC = new Livro("1984", "George Orwell", 2);

$livroC->setPaginas(112);
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
    body {
      background-color: #f9f9f9;

    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    ul > li {
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
    }

    ul > li > b {
      font-weight: bold;
    }

    ul ul {
      list-style-type: none;
      padding: 0;
      margin-top: 10px;
    }

    ul ul > li {
      margin-bottom: 5px;
      font-weight: normal;
    }

    ul ul > li > b {
      font-weight: bold;
    }

    ul ul {
      border-left: 3px solid #0077cc;
      padding-left: 10px;
    }
  </style>
</head>
<body>
    <h1>Livros famosos</h1>

    <ul>
      <li><b>Título:</b> <?=$livroA->getTitulo()?>
      <ul>
        <li><b>Autor:</b> <?=$livroA->getAutor()?></li>
        <li><b>N° de páginas:</b> <?=$livroA->getPaginas()?></li>
      </ul></li>
      <li><b>Título:</b> <?=$livroB->getTitulo()?>
      <ul>
        <li><b>Autor:</b> <?=$livroB->getAutor()?></li>
        <li><b>N° de páginas:</b><?=$livroB->getPaginas()?></li>
      </ul></li>
      <li><b>Título:</b> <?=$livroC->getTitulo()?>
      <ul>
        <li><b>Autor:</b> <?=$livroC->getAutor()?></li>
        <li><b>N° de páginas:</b> <?=$livroC->getPaginas()?></li>
      </ul></li>
    </ul>
</body>
</html>