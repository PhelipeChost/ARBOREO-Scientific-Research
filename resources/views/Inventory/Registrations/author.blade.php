@include('inventory.header')
        <h1>Cadastro de Autores</h1>
        <form action="{{ url('save-author')}}" method="GET">
        <table class="table">
            <tr>
                <td><label for="nomeautor">Autor</label></td>
                <td><input type="phone" class="form-control" name="nomeautor" required></td>
            </tr>
        </table>
           <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
@include('inventory.baseboard')
