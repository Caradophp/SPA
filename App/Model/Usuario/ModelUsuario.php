<?php 

namespace App\Model\Usuario;

use App\Model\ModelConexao;
use App\Entities\Usuario;
use Exception;
use PDO;

class ModelUsuario {

    private $con;

    public function __construct() {
        $conn = new ModelConexao();
        $this->con = $conn->conexao();
    }

    public function CadastrarUsuario(Usuario $usuario) {

        try {
            
            $sql = "INSERT INTO public.usuario (nome, email, senha) VALUES ( :nome, :email, :senha)";

            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':nome', $usuario->getNome());
            $stmt->bindParam(':email', $usuario->getEmail());
            $stmt->bindParam(':senha', $usuario->getSenha());

            $stmt->execute();

        } catch (Exception $e) {
            throw new Exception("Erro ao inserir novo usuário");
        }
    }

    public function listarUsuarios() {

        try {
            
            $sql = "SELECT * FROM public.usuario";

            $stmt = $this->con->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Erro ao listar usuários");
        }
    }

    public function deletarUsuario(int $id) {
        try {
            
            $sql = "DELETE FROM public.usuario WHERE id = :id";

            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Erro ao listar usuários");
        }
    }
}

?>