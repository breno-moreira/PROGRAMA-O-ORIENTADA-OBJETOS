<?php
interface IAluno {
    function getNome();
    function setNome($nome);
}

class Aluno implements IAluno {
    private string $nome;
    function setNome($nome) {
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }
}

$joaninha = new Aluno();
$joaninha->setNome('Joana Maranhão');
echo $joaninha->getNome();