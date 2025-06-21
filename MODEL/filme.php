<?php
namespace MODEL;

class Filme {
    private ?int $id;
    private ?string $titulo;
    private ?string $genero;
    private ?int $qtd_estoque;
    private ?string $status;

    public function __construct()
    {
        // Construtor vazio, pode ser preenchido conforme necessidade
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(?string $genero): void
    {
        $this->genero = $genero;
    }

    public function getQtdEstoque(): ?int
    {
        return $this->qtd_estoque;
    }

    public function setQtdEstoque(?int $qtd_estoque): void
    {
        $this->qtd_estoque = $qtd_estoque;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }
}
?>
