<?php include("cabecalho.php"); ?>
        <h1>Cadastro de Autores</h1>
        <form action="salvar-autor.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="nomeautor">Autor</label></td>
                <td><input type="text" class="form-control" name="nomeautor" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
<?php include("rodape.php"); ?>