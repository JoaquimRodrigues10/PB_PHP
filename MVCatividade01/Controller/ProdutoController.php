<?php

session_start();
require_once "./model/ProdutoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/ProdutoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $validade = $_POST['validade'];

        $produto = new Produto($nome, $preco, $quantidade, $validade);
        $produto->salvar();
        header('Location: /PB_PHP/MVCatividade01/produto/telaCadastro');
        exit;
    }

    public function listarProdutos(){
        $produtos = Produto::listar();
        echo"<pre>";
        print_r($produtos);
        echo"<pre>";
        require 'View/ProdutoListar.php';

    }

}