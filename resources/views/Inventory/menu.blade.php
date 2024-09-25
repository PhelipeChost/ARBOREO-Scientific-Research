<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/home/inventory')}}">Inventário</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Cadastros
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/home/inventory/generalrecords') }}">Gerais</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/plant')}}">Plantas</a></li>


            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Listar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-author') }}">Autores</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-genres') }}">Gêneros</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-species') }}">Espécies</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-epithet') }}">Epíteto</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-families') }}">Famílias</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-locations') }}">Locais</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/list-exoticnative')}}">Nativa / Exótica</a></li>
              <li><a class="dropdown-item" href="{{ url('/home/inventory/usuario-tips')}}">Tipo Usuários</a></li>
            </ul>
          </li> 
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>