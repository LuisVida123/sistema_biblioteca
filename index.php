<?php

require 'Leitor.php';
require 'Biblioteca.php';
require 'Livro.php';

$livro1 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 1943);
$livro2 = new Livro("Capitães da Areia", "Jorge Amado", 1937);
$livro3 = new Livro("O Tempo e o Vento", "Érico Veríssimo", 1949);

$leitor1 = new Leitor("Luis Vida", "Luis@email.com", "123456789");
$leitor2 = new Leitor("Gabriel Santos", "Gabriel@email.com", "987654321");

$biblioteca = new Biblioteca("Biblioteca Sementes do Saber");

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

$biblioteca->listarLivros();
$biblioteca->listarLeitores();

$livro1->emprestar($leitor1->getNome());
echo $livro1->estaDisponivel();
echo "Quem pegou: " . $livro1->quemPegou() . "\n";

$livro1->devolver();
echo $livro1->estaDisponivel();
