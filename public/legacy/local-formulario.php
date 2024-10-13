<?php include("cabecalho.php"); ?>
        <h1>Cadastro de Locais</h1>
        <form action="salvar-local.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="nomelocal">Local</label></td>
                <td><input type="text" class="form-control" name="nomelocal" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
<?php include("rodape.php"); ?>