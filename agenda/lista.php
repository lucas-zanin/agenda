<?php
    $arquivo = fopen("contatos.txt", "r");
    while(!feof($arquivo))
    {
        $contato = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
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
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Celular</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $numero = count($contato);
                        $i=0;
                        while($i<=$numero-3)
                        {
                    ?>
                    <th scope="row"><?php echo $contato[$i]; ?></th>
                    <td><?php echo $contato[$i+1]; ?></td>
                    <td><?php echo $contato[$i+2]; ?></td>
                    <td><a href="editar.php?posicao=<?php echo $i; ?>">Editar</a> | <a href="exclui.php?posicao=<?php echo $i; ?>">Excluir</a></td>
                <?php
                    $i=$i+3;
                    echo "</tr>";
                        }
                ?>
            </tbody>
        </table>
    </body>
</html>