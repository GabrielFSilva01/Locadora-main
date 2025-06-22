<?php
namespace DAL;

require_once __DIR__ . '/Conexao.php';
require_once __DIR__ . '/../MODEL/usuario.php';

use DAL\Conexao;

class usuario {
    public function SelectUsuario($usuario) {
        $sql = "SELECT * FROM usuario WHERE usuario = ?";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$usuario]);
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        
            $usuario = new \MODEL\Usuario();
            $usuario ->setId($linha['id'] ?? 0);
            $usuario ->setUsuario($linha['usuario'] ?? '');
            $usuario ->setSenha($linha['senha'] ?? '');
            return $usuario ;
        
    }
}
