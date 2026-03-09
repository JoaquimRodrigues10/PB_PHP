<?php

require_once "./database/database.php";


class Livro{
    private $titulo;
    Private $autor;
    Private $data_publicacao;
    Private $editora;

    public function __construct( $titulo, $autor, $data_publicacao, $editora) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->data_publicacao = $data_publicacao;
        $this->editora= $editora;
    }

     public function salvar(){
       $pdo = Database::conectar();
       $sql = "INSERT INTO livros ( TITULO, AUTOR, DATA_PUBLICACAO, EDITORA) VALUES ( :titulo, :autor, :data_publicacao, :editora)";
       $stmt = $pdo->prepare($sql);
       $stmt-> execute(['titulo' => $this->titulo, 'autor' => $this->autor, 'data_publicacao' => $this->data_publicacao, 'editora' =>  $this->editora]);
    }

    public static function listar(){
        $pdo = Database::conectar();
        $stmt = $pdo->query("SELECT * FROM livros");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

      public static function buscar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("SELECT * FROM livros WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE livros SET titulo = :titulo, autor = :autor, data_publicacao = :data_publicacao, editora = :editora WHERE id = :id");
        $stmt->execute(['id' => $id,'titulo' => $this->titulo, 'autor' => $this->autor, 'data_publicacao' => $this->data_publicacao, 'editora' =>  $this->editora]);
        }


    public static function excluir($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("DELETE FROM livros WHERE id = :id");
        $stmt->execute(['id' => $id]);

    }

    }
    