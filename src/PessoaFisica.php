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

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of nome
     *
     * @return string
     */
    public function getNome(): string {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param string $nome
     *
     * @return self
     */
    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Get the value of cpf
     *
     * @return string
     */
    public function getCpf(): string {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @param string $cpf
     *
     * @return self
     */
    public function setCpf(string $cpf): self {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * Get the value of dataNascimento
     *
     * @return DateTime
     */
    public function getDataNascimento(): DateTime {
        return $this->dataNascimento;
    }

    /**
     * Set the value of dataNascimento
     *
     * @param DateTime $dataNascimento
     *
     * @return self
     */
    public function setDataNascimento(DateTime $dataNascimento): self {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }
}