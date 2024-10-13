<?php include("cabecalho.php"); ?>
        <h1>Cadastro de Telefones</h1>
        <form action="salvar-telefone.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="telefone">Telefone</label></td>
                <td><input type="phone" class="form-control" name="telefone" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
<?php include("rodape.php"); ?>