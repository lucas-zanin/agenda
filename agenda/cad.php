<?php
    require 'cadpessoa.php';
    $dados = Handler::arrayHandler();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="contant-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <img src="imagens/logo_contatos.png" width="20%" height="20%"/>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <h3>CONTATOS</h3>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  CADASTRAR CONTATOS</button>
            </div>
            </nav>
        </header>
        <br/><br/>
        <div class="row justify-content-center row-cols-2 row-cols-md-2 mb-3 text-justify">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-reader py-3 text-center">
                        <h4 class="my-0 fw-normal"><b>Confirmação de Cadastro</b></h4>
                    </div>
                    <div class="card-body">
                        <?php
                            echo "<b>Nome:</b>".$dados['nome']."<br/>";
                            echo "<b>Celular:</b>".$dados['celular']."<br/>";
                            echo "<b>E-mail:</b>".$dados['email']."<br/>";
                        ?>
                        <br/><br/>
                        <a href="index.php"><button class="btn btn-outline-succes">Voltar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr/>
            <center><b>Agenda de Contatos - Desenvolvida pela turma TDS06</b></center>
        </footer>
    </body>
</html>