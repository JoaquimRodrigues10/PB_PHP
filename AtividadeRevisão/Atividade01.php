<?php

    session_start();

    class Aluno{
        private $nome;
        private $sobrenome;
        private $nota;
        private $dataNascimento;

        public function __construct($nome, $sobrenome, $nota, $dataNascimento){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->nota = $nota;
            $this->dataNascimento = $dataNascimento;
        }
        
        public function salvar(){
            if(!isset($_SESSION['alunos'])){
                $_SESSION['alunos'] = [];
            }
            
            $_SESSION['alunos'][]= [
                'nome' => $this->nome,
                'sobrenome' => $this->sobrenome,
                'nota' => $this->nota,
                'dataNascimento' => $this->dataNascimento
            ];
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nota = $_POST['nota'];
        $dataNascimento = $_POST['dataNascimento'];

        $aluno = new Aluno($nome, $sobrenome, $nota, $dataNascimento);
        $aluno->salvar();
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Alunos</title>
    </head>
    <body>
        <h2 style="color:black; font-family:Arial"> Cadastro Usuário </h2>
        <form action="#" method="POST" style="background:#f2f2f2; padding:15px; border-radius:8px; width: 300px;">
        Nome: <br>
        <input type="text" name="nome" value="" style="width:100%;  margin-bottom:10px" >
        sobrenome: <br>
        <input type="text" name="sobrenome" value="" style="width:100%; margin-bottom:10px" >
        nota: <br>
        <input type="number" name="nota" value="" style="width:100%; margin-bottom:10px" >
        Data de Nascimento: <br>
        <input type="date" name="dataNscimento" value="" style="width:100%; margin-bottom:10px" >
        <button type="submit" style="background:black; color:white; padding: 5px 10px;"> Cadastrar</button>
        <button type="reset" style="background:black; color:white; padding: 5px 10px;"> Limpar</button>
        </form>
        <?php if(isset($_SESSION['alunos'])): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>sobrenome</th>
                    <th>nota</th>
                    <th>DataNascimento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['alunos'] as $aluno): ?>
                <tr>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['sobrenome'] ?></td>
                    <td><?= $aluno['nota'] ?></td>
                    <td><?= $aluno['dataNascimento'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>
