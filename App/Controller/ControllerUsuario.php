<?php 

namespace App\Controller;

use App\Entities\Usuario;
use App\Model\Usuario\ModelUsuario;

class ControllerUsuario {

    private $userModel;

    public function __construct() {
        $this->userModel = new ModelUsuario();
    }

    public function cadastrar() {
        $dados = $_POST;

        try {
            $usuario = new Usuario();

            $usuario->setNome($dados['nome']);
            $usuario->setEmail($dados['email']);
            $usuario->setSenha($dados['senha']);

            $this->userModel->CadastrarUsuario($usuario);
        } catch (\Throwable $e) {
           echo $e->getMessage();
        }
    }

    public function listar() {
        try {
           $usuarios = $this->userModel->listarUsuarios();

           header('Content-Type: application/json');
           echo json_encode($usuarios);
        } catch (\Throwable $e) {
           echo $e->getMessage();
        }
    }

    public function deletar() {
        $id = $_POST['id'];

        try {
            $this->userModel->deletarUsuario($id);
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}

?>