<?php


namespace DAL;

require_once __DIR__ . '/Conexao.php';
require_once __DIR__ . '/../MODEL/Aluguel.php';

use DAL\Conexao;
use MODEL\Aluguel;

class AluguelDAL {

    public function Select() {
        $alugueis = [];

        $sql = "SELECT * FROM alugueis";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        Conexao::desconectar();

        foreach ($registros as $linha) {
            $aluguel = new Aluguel();
            $aluguel->setId($linha['id']);
            $aluguel->setClienteId($linha['cliente_id']);
            $aluguel->setFilmeId($linha['filme_id']);
            $aluguel->setDataAluguel($linha['data_aluguel']);
            $aluguel->setDataDev($linha['data_dev']);
            $alugueis[] = $aluguel;
        }

        return $alugueis;
    }

    public function Insert(Aluguel $aluguel) {
        $sql = "INSERT INTO alugueis (cliente_id, filme_id, data_aluguel, data_dev) 
                VALUES (?, ?, ?, ?)";

        $con = Conexao::conectar();
        $stmt = $con->prepare($sql);
        $stmt->execute([
            $aluguel->getClienteId(),
            $aluguel->getFilmeId(),
            $aluguel->getDataAluguel(),
            $aluguel->getDataDev()
        ]);
        Conexao::desconectar();
    }

    public function Delete(int $id) {
        $sql = "DELETE FROM alugueis WHERE id = ?";
        $con = Conexao::conectar();
        $stmt = $con->prepare($sql);
        $stmt->execute([$id]);
        Conexao::desconectar();
    }

    public function SelectById(int $id) {
        $sql = "SELECT * FROM alugueis WHERE id = ?";
        $con = Conexao::conectar();
        $stmt = $con->prepare($sql);
        $stmt->execute([$id]);
        $linha = $stmt->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        
            $aluguel = new Aluguel();
            $aluguel->setId($linha['id']);
            $aluguel->setClienteId($linha['cliente_id']);
            $aluguel->setFilmeId($linha['filme_id']);
            $aluguel->setDataAluguel($linha['data_aluguel']);
            $aluguel->setDataDev($linha['data_dev']);
            return $aluguel;
        

    
    }
    public function Update(\MODEL\Aluguel $aluguel) {
    $sql = "UPDATE alugueis SET cliente_id = ?, filme_id = ?, data_aluguel = ?, data_dev = ? WHERE id = ?";

    $con = \DAL\Conexao::conectar();
    $stmt = $con->prepare($sql);
    $stmt->execute([
        $aluguel->getClienteId(),
        $aluguel->getFilmeId(),
        $aluguel->getDataAluguel(),
        $aluguel->getDataDev(),
        $aluguel->getId()
    ]);
    \DAL\Conexao::desconectar();
}

}
