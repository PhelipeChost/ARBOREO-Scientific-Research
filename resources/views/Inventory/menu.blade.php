<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Cadastros
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ url('authors') }}">Autores</a></li>
            <li><a class="dropdown-item" href="{{ url('genres') }}">Gêneros</a></li>
            <li><a class="dropdown-item" href="{{ url('telephones') }}">Telefones</a></li>
            <li><a class="dropdown-item" href="{{ url('products') }}">Produtos</a></li>
            <li><a class="dropdown-item" href="{{ url('species') }}">Espécies</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Listar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('list-author') }}">Autores</a></li>
            <li><a class="dropdown-item" href="{{ url('list-genres') }}">Gêneros</a></li>
            <li><a class="dropdown-item" href="{{ url('list-phones') }}">Telefones</a></li>
            <li><a class="dropdown-item" href="{{ url('list-products') }}">Produtos</a></li>
            <li><a class="dropdown-item" href="{{ url('list-species') }}">Espécies</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
