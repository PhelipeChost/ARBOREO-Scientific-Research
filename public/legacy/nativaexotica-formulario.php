<?php include("cabecalho.php"); ?>
        <h1>Cadastro de Nativas/Exóticas</h1>
        <form action="salvar-nativaexotica.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="nomenativaexotica">Nativa/Exótica</label></td>
                <td><input type="text" class="form-control" name="nomenativaexotica" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
<?php include("rodape.php"); ?>