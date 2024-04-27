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
</body>
</html>
