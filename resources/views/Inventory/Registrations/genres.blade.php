@include('inventory.header')
        <h1>Cadastro de Gêneros</h1>
        <form action="salvar-genero.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="nomegenero">Gênero</label></td>
                <td><input type="text" maxlength="80" class="form-control" name="nomegenero" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
@include('inventory.baseboard') <!-- rodapé
