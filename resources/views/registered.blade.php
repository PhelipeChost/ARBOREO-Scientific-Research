<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Monsterlessons Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{url('Assets/css/registered.css')}}" />
    <script src="{{ url('Assets/src/auth.js')}}" defer></script>
</head>
<body>
<div class="form-container">
    <div class="form-container__details">
        <div class="form-container__title">Cadastrar</div>
        <div class="form-container__subtitle">
            Seja bem vindo ao Arbóreo Unesp
        </div>
    </div>
    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form__field">
            <label for="name" class="form__label">{{ __('Name') }}</label>
            <input id="name" class="form__input @error('name') is-invalid @enderror"
                   name="name" placeholder="Nome Completo"
                   value="{{ old('name') }}"
                   required
                   autocomplete="name"
                   autofocus />
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form__field">
            <label for="email" class="form__label">{{ __('Email Address') }}</label>
            <input id="email" class="form__input @error('email') is-invalid @enderror"
                   type="email"
                   name="email"
                   placeholder="Email"
                   maxlength="50"
                   value="{{ old('email') }}"
                   required autocomplete="email"/>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form__field">
            <label for="password" class="form__label">{{ __('Password') }}</label>
            <input id="password" class="form__input @error('password') is-invalid @enderror"
                   name="password"
                   type="password"
                   placeholder="Password"
                   minlength="8"
                   maxlength="16"
                   required
                   autocomplete="new-password"/>
            <button type="button" class="btn" onclick="passwordOne()"><img src="{{ url('Assets/images/icons/showPassword.png') }}" width="40" alt="showPassword"></button>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form__field">
            <label for="password-confirm" class="form__label">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" class="form__input @error('password-confirm') is-invalid @enderror"
                   name="password_confirmation"
                   type="password"
                   placeholder="Password Confirmation"
                   minlength="8"
                   maxlength="16"
                   required
                   autocomplete="new-password"/>
        </div>
        <button type="submit" value="submit" class="form__submit">
            {{ __('Register') }}
        </button>
    </form>
    <div class="form-container__line-divider"></div>
    <div class="form-container__links">
        <a href="{{url('login')}}" class="form-container__link">Login</a>
        <a href="{{ route('password.request') }}" class="form-container__link">{{ __('Forgot Your Password?') }}</a>
    </div>
</div>
</body>
</html>
