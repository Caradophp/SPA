<?php 

namespace App\Entities;

class Usuario {

    private $id;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getdataCadastro() {
        return $this->dataCadastro;
    }

    public function setdataCadatro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }
}

?>