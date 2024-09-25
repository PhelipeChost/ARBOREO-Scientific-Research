<style>

    .container {
        display: flex;
        align-items: left;
        justify-content: left;
        max-width: 500px;
        padding: 10px;
    }

    .col {
    }

    .button-submit {
        margin-top: 20px;
    }
</style>
@include('Inventory.header')
    <div class="container row align-items-center col-md">
        <div class="container col-md-4">
            <form action="{{ url('save-author')}}" method="GET">
                <h2>Cadastro Autores</h2>
                <input type="phone" class="form-control" name="nomeautor" placeholder="Nome Autor" required>
                
                <input class="btn btn-primary button-submit" type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="container col-md-4">
            <form action="{{ url('save-genres')}}" method="GET">
                <h2>Cadastro Gêneros</h2>
                <input type="phone" class="form-control" name="nomegenero" placeholder="Nome Gênero" required>
                
                <input class="btn btn-primary button-submit" type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="container col-md-4">
            <form action="{{ url('save-species')}}" method="GET">
                <h2>Cadastro Espécies</h2>
                <input type="phone" class="form-control" name="nomeespecie" placeholder="Nome Espécie" required>
                
                <input class="btn btn-primary button-submit" type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="container col-md-4">
            <form action="{{ url('save-epithet')}}" method="GET">
                <h2>Cadastro Epítetos</h2>
                <input type="phone" class="form-control" name="nomeepiteto" placeholder="Nome Epíteto" required>
                
                <input class="btn btn-primary button-submit" type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="container col-md-4">
            <form action="{{ url('save-families')}}" method="GET">
                <h2>Cadastro Famílias</h2>
                <input type="phone" class="form-control" name="nomefamilia" placeholder="Nome Família" required>
                
                <input class="btn btn-primary button-submit" type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="container col-md-4">
            <form action="{{ url('save-exoticnative')}}" method="GET">
                <h2>Cadastro Nativa/Exóticas</h2>
                <select name="nomenativaexotica" style="padding: 5px 20px">
                    <option value="Nativa">Nativa</option>
                    <option value="Exótica">Exótica</option>
                </select>
                <!-- <input type="phone" class="form-control" name="nomenativaexotica" placeholder="Nativa/Exótica" required> -->
                <input class="btn btn-primary button-submit" type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
@include('Inventory.baseboard')
