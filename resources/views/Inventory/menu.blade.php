<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 50px">
    <div class="container-fluid">
      <a href="{{ url('home/inventory')}}" class="navbar-brand"><img src="{{ url('Assets/images/UNESP-logo.png')}}" class="img-fluid" width="30"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('home')}}" style="font-weight: 600">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('create')}}" style="color: red; font-weight: 600">Marcação</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Cadastros
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/home/inventory/authors') }}">Autores</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/genres') }}">Gêneros</a></li>
              <!-- <li><a class="dropdown-item" href="{{ url('/home/inventory/telephones') }}">Telefones</a></li> -->
              <!-- <li><a class="dropdown-item" href="{{ url('/home/inventory/products') }}">Produtos</a></li> -->
              <li><a class="dropdown-item" href="{{ url('/home/inventory/species') }}">Espécies</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/epithet') }}">Epíteto</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/families') }}">Famílias</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Listar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-author') }}">Autores</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-genres') }}">Gêneros</a></li>
              <!-- <li><a class="dropdown-item" href="{{ url('/home/inventory/list-phones') }}">Telefones</a></li> -->
              <!-- <li><a class="dropdown-item" href="{{ url('/home/inventory/list-products') }}">Produtos</a></li> -->
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-species') }}">Espécies</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-epithet') }}">Epíteto</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-families') }}">Famílias</a></li> -
              <li><a class="dropdown-item" href="">Locais</a></li>
              <li><a class="dropdown-item" href="">Nativa / Exótica</a></li> -
              <li><a class="dropdown-item" href="">Tipo Usuários</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>

