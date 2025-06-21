<?php
namespace DAL;

require_once __DIR__ . '/Conexao.php';
require_once __DIR__ . '/../MODEL/Cliente.php';

use DAL\Conexao;

class Cliente {
    public function Select() {
        $clientes = [];

        $sql = "SELECT * FROM cliente";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        Conexao::desconectar();

        foreach ($registros as $linha) {
            $cliente = new \MODEL\Cliente();
            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setEmail($linha['email']);
            $cliente->setDataCadastro($linha['data_cadastro']);
            $cliente->setTelefone($linha['telefone']);
            $clientes[] = $cliente;
        }

        return $clientes;
    }

    public function SelectById(int $id){
        $sql = "SELECT * FROM cliente WHERE id =?";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$id]);
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

            $cliente = new \MODEL\Cliente();
            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setEmail($linha['email']);
            $cliente->setDataCadastro($linha['data_cadastro']);
            $cliente->setTelefone($linha['telefone']);
            return $cliente;
        
    }
public function insert(\MODEL\Cliente $cliente) {
    $sql = "INSERT INTO cliente (nome, email, telefone, data_cadastro)
            VALUES (:nome, :email, :telefone, :data_cadastro)";
    
    $con = Conexao::conectar();
    $stmt = $con->prepare($sql);
    $stmt->bindValue(':nome', $cliente->getNome());
    $stmt->bindValue(':email', $cliente->getEmail());
    $stmt->bindValue(':telefone', $cliente->getTelefone());
    $stmt->bindValue(':data_cadastro', $cliente->getDataCadastro());
    $stmt->execute();
    Conexao::desconectar();
}




 
    public function update(\MODEL\Cliente $cliente)
{
    $sql = "UPDATE cliente 
            SET nome = ?, email = ?, telefone = ?, data_cadastro = ?
            WHERE id = ?";

    $con = Conexao::conectar();
    $stmt = $con->prepare($sql);
    $stmt->execute([
        $cliente->getNome(),
        $cliente->getEmail(),
        $cliente->getTelefone(),
        $cliente->getDataCadastro(),
        $cliente->getId()
    ]);
    Conexao::desconectar();
}

    public function Delete(int $id) {
    $sql = "DELETE FROM cliente WHERE id = ?";
    $con = Conexao::conectar();
    $query = $con->prepare($sql);
    $result=$query->execute([$id]);
    Conexao::desconectar();
    return $result;
    }
}
