<?php 

namespace App\Model;

use PDO;
use PDOException;

class ModelConexao {

    private $db_host = "localhost";
    private $db_name = "spa_db";
    private $db_user = "postgres";
    private $db_pass = "post";  

    public function conexao() {

        try {
            $conexao = new PDO("pgsql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
            return $conexao;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
}

?>