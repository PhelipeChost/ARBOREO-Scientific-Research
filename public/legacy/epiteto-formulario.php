<?php include("cabecalho.php"); ?>
        <h1>Cadastro de Epítetos</h1>
        <form action="salvar-epiteto.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="nomeepiteto">Epíteto</label></td>
                <td><input type="text" class="form-control" name="nomeepiteto" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
<?php include("rodape.php"); ?>