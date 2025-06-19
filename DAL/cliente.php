<?php
namespace DAL;

require_once __DIR__ . '/Conexao.php';
require_once __DIR__ . '/../MODEL/Cliente.php';

use DAL\Conexao;

class Cliente {
    public function Select() {
        $clientes = []; // 🔧 Inicializar array!

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

    public function insert() {}
    public function update() {}
    public function delete() {}
}
