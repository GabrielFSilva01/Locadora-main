<?php
// MODEL/Aluguel.php

namespace MODEL;

class Aluguel {
    private ?int $id;
    private ?int $cliente_id;
    private ?int $filme_id;
    private ?string $data_aluguel;
    private ?string $data_dev;

    public function __construct() {}

    public function getId(): ?int {
        return $this->id;
    }
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getClienteId(): ?int {
        return $this->cliente_id;
    }
    public function setClienteId(?int $cliente_id): void {
        $this->cliente_id = $cliente_id;
    }

    public function getFilmeId(): ?int {
        return $this->filme_id;
    }
    public function setFilmeId(?int $filme_id): void {
        $this->filme_id = $filme_id;
    }

    public function getDataAluguel(): ?string {
        return $this->data_aluguel;
    }
    public function setDataAluguel(?string $data_aluguel): void {
        $this->data_aluguel = $data_aluguel;
    }

    public function getDataDev(): ?string {
        return $this->data_dev;
    }
    public function setDataDev(?string $data_dev): void {
        $this->data_dev = $data_dev;
    }
}
