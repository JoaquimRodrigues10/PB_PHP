<?php

session_start();
require_once "./model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
        header('Location: /PB_PHP/MVCexemplos/usuario/telaCadastro');
        exit;
    }

    public function listarUsuarios(){
        $usuarios = Usuario::listar();
        echo"<pre>";
        print_r($usuarios);
        echo"<pre>";
        require 'View/usuarioListar.php';

    }

}