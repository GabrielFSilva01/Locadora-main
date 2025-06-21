<?php
namespace DAL;

require_once __DIR__ . '/Conexao.php';
require_once __DIR__ . '/../MODEL/Filme.php';

use DAL\Conexao;

class Filme {
    public function Select() {
        $filmes = [];

        $sql = "SELECT * FROM filmes";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        Conexao::desconectar();

        foreach ($registros as $linha) {
            $filme = new \MODEL\filme();
            $filme->setId($linha['id']);
            $filme->setTitulo($linha['titulo']);
            $filme->setGenero($linha['genero']);
            $filme->setQtdEstoque($linha['qtd_estoque']);
            $filme->setStatus($linha['status']);
            $filmes[] = $filme;
        }

        return $filmes;
    }

    public function SelectById(int $id) {
        $sql = "SELECT * FROM filmes WHERE id = ?";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$id]);
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $filme = new \MODEL\filme();
        $filme->setId($linha['id']);
        $filme->setTitulo($linha['titulo']);
        $filme->setGenero($linha['genero']);
        $filme->setQtdEstoque($linha['qtd_estoque']);
        $filme->setStatus($linha['status']);

        return $filme;
    }

    public function Insert(\MODEL\filme $filme) {
        $sql = "INSERT INTO filmes (titulo, genero, qtd_estoque, status)
                VALUES (:titulo, :genero, :qtd_estoque, :status)";

        $con = Conexao::conectar();
        $stmt = $con->prepare($sql);
        $stmt->bindValue(':titulo', $filme->getTitulo());
        $stmt->bindValue(':genero', $filme->getGenero());
        $stmt->bindValue(':qtd_estoque', $filme->getQtdEstoque());
        $stmt->bindValue(':status', $filme->getStatus());
        $stmt->execute();
        Conexao::desconectar();
    }

    public function Update(\MODEL\filme $filme) {
        $sql = "UPDATE filmes 
                SET titulo = ?, genero = ?, qtd_estoque = ?, status = ? 
                WHERE id = ?";

        $con = Conexao::conectar();
        $stmt = $con->prepare($sql);
        $stmt->execute([
            $filme->getTitulo(),
            $filme->getGenero(),
            $filme->getQtdEstoque(),
            $filme->getStatus(),
            $filme->getId()
        ]);
        Conexao::desconectar();
    }

    public function Delete(int $id) {
        $sql = "DELETE FROM filmes WHERE id = ?";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([$id]);
        Conexao::desconectar();
        return $result;
    }
}
