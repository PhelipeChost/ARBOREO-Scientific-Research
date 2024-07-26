<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>ARBÓREO - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{url('Assets/css/authenticate.css')}}" />
        <script src="{{ url('Assets/src/auth.js')}}" defer></script>
    </head>
    <body>
    <div class="form-container">
        <div class="form-container__details">
            <div class="form-container__title">Login</div>
            <div class="form-container__subtitle">
                Conecte-se e viage pela nossa Unesp!
            </div>
        </div>
        <form class="form" method="POST" action="{{ route('authenticate.user') }}" method="post">
            @csrf
            <div class="form__field">
                <label for="email" class="form__label">Email</label>
                <input 
                    class="form__input @error('email') is-invalid @enderror"
                    type="email" 
                    id="email" 
                    name="email" 
                    required
                    autofocus ><br><br>
            </div>
            <div class="form__field">
                <label for="password" class="form__label">Senha</label>
                <input 
                    type="password" 
                    id="senha" 
                    name="senha"
                    class="form__input"
                    autocomplete="current-password"
                    required><br><br>
                
                <button type="button" class="btn" onclick="passwordOne()"><img src="{{ url('Assets/images/icons/showPassword.png') }}" width="40" alt="showPassword"></button>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" value="submit" class="form__submit">
                Realizar Login
            </button>
        </form>
        <div class="form-container__line-divider"></div>
        <div class="form-container__links">
            <a href="{{ url('/') }}" class="form-container__link">Ir para Home</a>
        </div>
    </div>
    </body>
</html>
