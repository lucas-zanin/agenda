<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="contant-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <form action="cad.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome do contado" required/>
                <br/>
                <label>Celular</label>
                <input type="number" class="form-control" name="celular" placeholder="Insira o telefone para contato" required/>
                <br/>
                <label>E-Mail</label>
                <input type="email" class="form-control" name="email" placeholder="Insira o e-mail do contado" required/>
                <br/>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </body>
</html>