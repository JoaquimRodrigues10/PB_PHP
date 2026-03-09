<?php
    session_start();
    require_once "./model/livroModel.php";

    class livroController{
        public function telaCadastro(){
            require "view/livroCadastrar.php";
        }

        public function cadastrar(){
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $data_publicacao = $_POST['data_publicacao'];
            $editora = $_POST['editora'];

            $livro = new Livro($titulo, $autor, $ano_publicacao, $editora);
            $livro->salvar();
            header('Location: /PB_PHP/MVCavaliacao/livro/telaCadastro');
            exit;
        }
         public function listarLivros(){
             $livros = Livro::listar();
             echo"<pre>";
             print_r($livros);
             echo"<pre>";
            require 'View/livroListar.php';
    }
        public function telaEditar(){
        $livro = Livro::buscar($_GET['id']);
        require 'View/livroEditar.php';
}
        public function atualizar(){
            $livro = new Livro ($_POST['titulo'],$_POST['autor'],$_POST['data_publicacao'],['editora']);
            $livro->atualizar($_GET['id']);
            header('Location: /PB_PHP/MVCavaliacao/livro/telaEditar?id='.($_GET['id']));
        }
         public function excluir(){
            Livro::excluir($_GET['id']);
            header('Location: /PB_PHP/MVCavaliacao/livro/listar');
            exit;
    }
}