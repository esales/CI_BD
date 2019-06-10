<?php

require_once 'bootstrap.php';
require_once 'application/models/Aluno.php';
require_once 'application/models/Curso.php';
require_once 'application/models/Turma.php';

$turma = new Turma("abcd1");


$curso = new Curso("novo curso");
$curso->getTurmas()->add($turma);

$turma->setCurso($curso);

$novoAlunoNome = $argv[1];
$novoAlunoMatricula = $argv[2];

$aluno = new Aluno($novoAlunoNome, $novoAlunoMatricula);
$aluno->getTurmas()->add($turma);

$turma->getAlunos()->add($aluno);

$entityManager->persist($curso);
$entityManager->persist($turma);
$entityManager->persist($aluno);

$entityManager->flush();

echo "criado aluno " . $aluno->getNome() . " com a matrícula " . $aluno->getMatricula() . ".\n";