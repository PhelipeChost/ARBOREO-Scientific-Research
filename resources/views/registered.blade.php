<!DOCTYPE html>
<html lang="pt-br">


<head>
    <link rel="stylesheet" href="{{ url('Assets/bootstrap/bootstrap-3.3.7-dist/css1/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('Assets/css/register.css') }}">

    <link rel="icon" href="{{ url('Assets/images/home-logo.png') }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar Conta</title>
</head>

<body>

<div style="background: black; box-shadow: 0 0 2px white;">
    <img src="{{ url('Assets/images/home-logo-circular.png') }}" class="img-fluid logo-circular-principal" width="100" alt="">
</div>

<div class="img-responsive container-sessão">
    <h1 class="col titulo">Criar Conta</h1>
    <form class="form-floating" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="img-responsive usuario-container">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
            <input class="img-responsive input @error('name') is-invalid @enderror" name="name" placeholder="Nome Completo" id="usuario" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
            <input class="img-responsive input @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" id="email" maxlength="50" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
            </label><input id="password" class="img-responsive input display @error('password') is-invalid @enderror" name="password" type="password" placeholder="Senha" minlength="8" maxlength="16" style="margin-top: 30px;" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
            <input class="img-responsive input display @error('password-confirm') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Senha" id="senha" minlength="8" maxlength="16" style="margin-top: 30px;" required autocomplete="new-password">


            <button type="button" class="btn" onclick="mostrarSenha()"><img src="{{ url('Assets/images/olhinho-ohayo.png') }}" width="40" alt=""></button>
        </div>

        <script>
            function mostrarSenha() {
                const tipo = document.getElementById("senha");
                if(tipo.type === "password") {
                    tipo.type = "text";
                }else{
                    tipo.type = "password";
                }
            }
        </script>

        <div class="img-responsive" style="margin-top: 30px;">
            <div style="text-align: center;"><button type="submit" class="avancar">{{ __('Register') }}</button></div>
            <div style="text-align: center;"><a href="{{ url('begin-session') }}" class="criar-conta">Já tenho uma conta</a></div>

        </div>
    </form>
</div>

<!-- barra vermelha -->
<div class="container-fluid" id="container-red"></div>
<!-- FIM barra vermelha -->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</html>
