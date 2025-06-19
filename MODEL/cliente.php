<?php
namespace MODEL;

class Cliente{
    private ?int $id;
    private ?string $nome;
    private ?string $email; 
    private ?string $data_cadastro;
    private ?string $telefone;

    public function __construct()
    {

    }
    public function getId()
    {
        return $this->id;
    }
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(?string $nome){
        $this->nome = $nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail(?string $email)
    {
        $this->email = $email;
    }
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }
    public function setDataCadastro(?string $data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone(?string $telefone)
    {
        $this->telefone = $telefone;
    }
    
}


?>