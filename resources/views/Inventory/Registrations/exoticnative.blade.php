@include('inventory.header')
        <h1>Cadastro de Nativas/Exóticas</h1>
        <form action="{{ url('save-exoticnative') }}" method="GET">
        <table class="table">
            <tr>
                <td><label for="nomenativaexotica">Nativa/Exótica</label></td>
                <td><input type="text" class="form-control" name="nomenativaexotica" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
@include('inventory.baseboard')