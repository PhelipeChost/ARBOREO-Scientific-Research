<?php include("cabecalho.php"); ?>
        <h1>Cadastro de Tipo de Usuários</h1>
        <form action="salvar-tipousuario.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="nometipousuario">Tipo de Usuário</label></td>
                <td><input type="text" class="form-control" name="nometipousuario" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
<?php include("rodape.php"); ?>