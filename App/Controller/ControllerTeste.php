<?php 

namespace App\Controller;

use App\Model\ModelConexao;

class ControllerTeste {

    public function testeConexao() {
        $con = new ModelConexao();

        $con->conexao();
    }
}

?>