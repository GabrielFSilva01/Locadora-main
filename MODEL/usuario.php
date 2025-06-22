<?php
namespace MODEL;

class usuario {
    private ?int $id;
    private ?string $usuario;
    private ?string $senha;

    public function __construct() {}

    // ID
    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    // Usuário
    public function getUsuario(): ?string {
        return $this->usuario;
    }

    public function setUsuario(?string $usuario): void {
        $this->usuario = $usuario;
    }

    // Senha
    public function getSenha(): ?string {
        return $this->senha;
    }

    public function setSenha(?string $senha): void {
        $this->senha = $senha;
    }
}
?>
