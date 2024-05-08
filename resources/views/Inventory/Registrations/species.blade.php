@include('Inventory.header')
        <h1>Cadastro de Espécies</h1>
        <form action="{{ url('save-species')}}" method="GET">
        <table class="table">
            <tr>
                <td><label for="nomeespecie">Espécie</label></td>
                <td><input type="text" maxlength="80" class="form-control" name="nomeespecie" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
@include('Inventory.baseboard')