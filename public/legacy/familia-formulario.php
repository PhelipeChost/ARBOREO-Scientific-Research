<?php include("cabecalho.php"); ?>
        <h1>Cadastro de Família</h1>
        <form action="salvar-familia.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="nomefamilia">Família</label></td>
                <td><input type="text" maxlength="80" class="form-control" name="nomefamilia" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
<?php include("rodape.php"); ?>