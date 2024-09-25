<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Adiocionar Marcação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{url('Assets/css/addMark.css')}}" />
    <script src="{{ url('Assets/src/auth.js')}}" defer></script>

    <style>
        body {
            background-image: url("{{ url('Assets/images/darkMap.jpg') }}");
        }
    </style>
</head>
<body>
<div class="form-container">
    <div class="form-container__details">
        <div class="form-container__title">Adicionar Marcação</div>
    </div>
    <form class="form" method="POST" action="{{ route('features.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form__field">
            <input type="text"
                   class="form__input"
                   name="description"
                   id="description"
                   placeholder="Descrição"
                   />
        </div>
        <div class="form__field">
            <input type="text"
                   class="form__input"
                   name="latitude"
                   id="latitude"
                   placeholder="Latitude"
                   />
        </div>
        <div class="form__field">
            <input type="text"
                   class="form__input"
                   name="longitude"
                   id="longitude"
                   placeholder="Longitude"
                   />
        </div>

        <div class="form__field">
        </div>
        <button type="submit" class="form__submit">
            Enviar
        </button>
    </form>
    <div class="form-container__line-divider"></div>
</div>

<form class="form-container" action="{{ route('create.store') }}" method="POST">
    @csrf

    <label for="datacoleta">Data da Coleta:</label>
    <input type="date" name="datacoleta" required><br>

    <label for="coordenada_s">Coordenada Sul:</label>
    <input type="number" step="any" name="coordenada_s" required><br>

    <label for="coordenada_o">Coordenada Oeste:</label>
    <input type="number" step="any" name="coordenada_o" required><br>

    <label for="flor">Flor:</label>
    <input type="checkbox" name="flor"><br>

    <label for="fruto">Fruto:</label>
    <input type="checkbox" name="fruto"><br>

    <label for="familia">Família:</label>
    <input type="text" name="familia" required><br>

    <label for="genero">Gênero:</label>
    <input type="text" name="genero" required><br>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" required><br>

    <label for="especie">Espécie:</label>
    <input type="text" name="especie" required><br>

    <label for="nativaexotica">Nativa/Exótica:</label>
    <input type="text" name="nativaexotica" required><br>

    <label for="local">Local:</label>
    <input type="text" name="local" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" required><br>

    <button type="submit">Cadastrar Planta</button>
</form>

</body>
</html>
