<?php

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class PessoaFisica
{
    #[Id,Column(type:'integer'),GeneratedValue]
    private int $id;

    #[Column(type:'string')]
    private string $nome;

    #[Column(type:'string')]
    private string $cpf;
    
    #[Column(type:'date')]
    private DateTime $dataNascimento;


    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self {
        $this->cpf = $cpf;
        return $this;
    }

    public function getDataNascimento(): DateTime {
        return $this->dataNascimento;
    }

    public function setDataNascimento(DateTime $dataNascimento): self {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }
}