@include('Inventory.header')
<form action="adiciona-planta.php" method="GET">
    <table class="table">
        <tr>
            <td>Data da Coleta:</td>
            <td><input class="form-control" type="date" placeholder="Data Coleta" name="datacoleta" /></td>

            <!-- O segundo valor estará selecionado inicialmente -->
            <td>Usuário: </td>
            <td>
                <select name="select-local" class="form-control">
                    @include('Inventory.CarriesForms.carrieslist')
                    <?php
                    $data = carregaCombos('http://localhost:8090/inventario/usuarios');
                    foreach ($data as $tabusuarios) :
                    ?>
                        <option value="{{ $tabusuarios->codusuario }}" selected >
                            {{ $tabusuarios->email }}
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
            <td>
                <a class="btn btn-success" href="#form_usuario" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>

                <div id="form_usuario" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Cadastro de Usuários</h2>
                    </div>
                </div>
            </td>
        </tr>
        </tr>
        <tr>
            <td>
                Coordenada S:
            </td>
            <td><input class="form-control" type="text" placeholder="Coordenada S" name="coordenada_s" id="coordenada_s" />
            </td>

            <td>
                Coordenada O:
            </td>
            <td><input class="form-control" type="text" placeholder="Coordenada O" name="coordenada_o" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="flor">Flor</label>
            </td>
            <td>
                <input type="checkbox" id="flor" name="flor" checked />
            </td>
            <td>
                <label for="fruto">Fruto</label>
            </td>
            <td>
                <input type="checkbox" id="fruto" name="fruto" />
            </td>
        </tr>

        <tr>
            <!-- O segundo valor estará selecionado inicialmente -->
            <td>Família: </td>
            <td>
                <select name="select-familia" class="form-control" id="selectFamilia">
                    <?php
                    //include("carrega-listas.php"); 
                    $data = carregaCombos('http://localhost:8090/inventario/familias');
                    ?>
                    <?php foreach ($data as $tabfamilias) : ?>
                        <option value="{{ $tabfamilias->codfamilia }}">
                            {{ $tabfamilias->nomefamilia }}
                    </option>
                    <?php endforeach ?>
                </select>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var selectFamilia = document.getElementById('selectFamilia');

                        // Adicione um evento de clique ao botão que abre o modal
                        document.querySelector('.open-modal').addEventListener('click', function(event) {
                        event.preventDefault();

                            // Obtém o valor selecionado no select
                            var selectedCodFamilia = selectFamilia.value;

                            // Redireciona para o arquivo do modal, passando o código da família como parâmetro na URL
                            window.location.href = this.getAttribute('href') + '?codfamilia=' + encodeURIComponent(selectedCodFamilia);
                        });
                    });
                </script>
            </td>
            <td>
                <a class="btn btn-success" href="#form_familia" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>

                <div id="form_familia" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>

                        <h4>Cadastro de Família</h4>
                        <form id="familiaForm">
                            <table class="table">
                                <tr>
                                    <td><label for="nomefamilia">Família</label></td>
                                    <td><input type="text" maxlength="80" class="form-control" id="nomefamilia" required></td>
                                </tr>
                            </table>
                            <button class="btn btn-primary" id="cadastrarBtn">Cadastrar</button>
                        </form>

                        <script>
                            document.getElementById('cadastrarBtn').addEventListener('click', function abreform(event) {
                                event.preventDefault();

                                var nomeFamilia = document.getElementById('nomefamilia').value;

                                var xhr = new XMLHttpRequest();
                                xhr.open('POST', 'salvar-familia.php');
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        // Redireciona para a página de lista de famílias
                                        //window.location.href = 'planta-formulario.php';
                                        // Adiciona o novo valor ao campo select
                                        var novoOption = document.createElement('option');
                                        novoOption.text = nomeFamilia;
                                        novoOption.value = nomeFamilia;
                                        document.getElementById('selectFamilia').add(novoOption);

                                        // Fecha o modal
                                        //document.getElementById('form_familia').style.display = 'none';
                                        document.getElementById('form_familia').style.display = 'block';

                                        // Adicione event listeners para seus botões
                                        document.getElementById('cadastrarBtn').addEventListener('click', abrirModal);
                                        
                                    } else {
                                        console.error('Erro ao salvar família. Status:', xhr.status);
                                    }
                                };
                                xhr.onerror = function() {
                                    console.error('Erro ao fazer requisição para salvar família.');
                                };
                                xhr.send('nomefamilia=' + encodeURIComponent(nomeFamilia));
                            });

                           
                        </script>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Function to save input values to localStorage
                                function saveToLocalStorage(id) {
                                    const element = document.getElementById(id);
                                    if (element.type === 'checkbox') {
                                        localStorage.setItem(id, element.checked);
                                    } else {
                                        localStorage.setItem(id, element.value);
                                    }
                                }

                                // Function to load input values from localStorage
                                function loadFromLocalStorage(id) {
                                    const element = document.getElementById(id);
                                    const value = localStorage.getItem(id);
                                    if (value !== null) {
                                        if (element.type === 'checkbox') {
                                            element.checked = value === 'true';
                                        } else {
                                            element.value = value;
                                        }
                                    }
                                }

                                // IDs of the inputs
                                const inputIds = ['datacoleta', 'select-local', 'coordenada_s', 'coordenada_o', 'flor', 'fruto', 'select-familia'];

                                // Load saved values on page load
                                inputIds.forEach(id => loadFromLocalStorage(id));

                                // Save values on input change
                                inputIds.forEach(id => {
                                    document.getElementById(id).addEventListener('input', () => saveToLocalStorage(id));
                                });

                                // Save checkbox values on change
                                document.getElementById('flor').addEventListener('change', () => saveToLocalStorage('flor'));
                                document.getElementById('fruto').addEventListener('change', () => saveToLocalStorage('fruto'));

                                // Save select values on change
                                document.getElementById('select-local').addEventListener('change', () => saveToLocalStorage('select-local'));
                                document.getElementById('select-familia').addEventListener('change', () => saveToLocalStorage('select-familia'));
                            });
                        </script>
                    </div>
                </div>
            </td>


            <!-- O segundo valor estará selecionado inicialmente -->
            <td>Gênero: </td>
            <td>
                <select name="select-genero" class="form-control" id="selectGenero">
                    <?php
                    //include("carrega-genero.php");
                    $data = carregaCombos('http://localhost:8090/inventario/generos');
                    foreach ($data as $tabgeneros) :
                    ?>
                        <option value="<?php echo $tabgeneros->codgenero; ?>" selected><?php echo $tabgeneros->nomegenero; ?></option>
                    <?php endforeach ?>
                </select>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                    var selectGenero = document.getElementById('selectGenero');

                    // Adicione um evento de clique ao botão que abre o modal
                    document.querySelector('.open-modal').addEventListener('click', function(event) {
                    event.preventDefault();

                            // Obtém o valor selecionado no select
                            var selectedCodGenero = selectGenero.value;

                            // Redireciona para o arquivo do modal, passando o código da família como parâmetro na URL
                            window.location.href = this.getAttribute('href') + '?codgenero=' + encodeURIComponent(selectedCodGenero);
                        });
                    });
                </script>
            </td>
            <td>
                <a class="btn btn-success" href="#form_genero" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>


                <div id="form_genero" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>

                        <h4>Cadastro de Gêneros</h4>
                        <form id="generoForm">
                            <table class="table">
                                <tr>
                                    <td><label for="nomegenero">Gênero</label></td>
                                    <td><input type="text" maxlength="80" class="form-control" id="nomegenero" required></td>
                                </tr>
                            </table>
                            <button class="btn btn-primary" id="cadastrarBtngenero">Cadastrar</button>
                        </form>

                        <script>
                            document.getElementById('cadastrarBtngenero').addEventListener('click', function abreform(event) {
                                event.preventDefault();

                                var nomeGenero = document.getElementById('nomegenero').value;

                                var xhr = new XMLHttpRequest();
                                xhr.open('POST', 'salvar-genero.php');
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        // Redireciona para a página de lista de famílias
                                        //window.location.href = 'planta-formulario.php';
                                        // Adiciona o novo valor ao campo select
                                        var novoOption = document.createElement('option');
                                        novoOption.text = nomeGenero;
                                        novoOption.value = nomeGenero;
                                        document.getElementById('selectGenero').add(novoOption);

                                        // Fecha o modal
                                        //document.getElementById('form_familia').style.display = 'none';
                                        document.getElementById('form_genero').style.display = 'block';

                                        // Adicione event listeners para seus botões
                                        document.getElementById('cadastrarBtngenero').addEventListener('click', abrirModal);
                                        
                                    } else {
                                        console.error('Erro ao salvar gênero. Status:', xhr.status);
                                    }
                                };
                                xhr.onerror = function() {
                                    console.error('Erro ao fazer requisição para salvar gênero.');
                                };
                                xhr.send('nomegenero=' + encodeURIComponent(nomeGenero));
                            });

                           
                        </script>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Function to save input values to localStorage
                                function saveToLocalStorage(id) {
                                    const element = document.getElementById(id);
                                    if (element.type === 'checkbox') {
                                        localStorage.setItem(id, element.checked);
                                    } else {
                                        localStorage.setItem(id, element.value);
                                    }
                                }

                                // Function to load input values from localStorage
                                function loadFromLocalStorage(id) {
                                    const element = document.getElementById(id);
                                    const value = localStorage.getItem(id);
                                    if (value !== null) {
                                        if (element.type === 'checkbox') {
                                            element.checked = value === 'true';
                                        } else {
                                            element.value = value;
                                        }
                                    }
                                }

                                // IDs of the inputs
                                const inputIds = ['datacoleta', 'select-local', 'coordenada_s', 'coordenada_o', 'flor', 'fruto', 'select-familia', 'select-genero'];

                                // Load saved values on page load
                                inputIds.forEach(id => loadFromLocalStorage(id));

                                // Save values on input change
                                inputIds.forEach(id => {
                                    document.getElementById(id).addEventListener('input', () => saveToLocalStorage(id));
                                });

                                // Save checkbox values on change
                                document.getElementById('flor').addEventListener('change', () => saveToLocalStorage('flor'));
                                document.getElementById('fruto').addEventListener('change', () => saveToLocalStorage('fruto'));

                                // Save select values on change
                                document.getElementById('select-local').addEventListener('change', () => saveToLocalStorage('select-local'));
                                document.getElementById('select-familia').addEventListener('change', () => saveToLocalStorage('select-familia'));
                                document.getElementById('select-genero').addEventListener('change', () => saveToLocalStorage('select-genero'));
                            });
                        </script>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <!-- O segundo valor estará selecionado inicialmente -->
            <td>Autor: </td>
            <td>
                <select name="select-autor" class="form-control" id="selectAutor">
                    <?php
                    //include("carrega-autor.php");
                    $data = carregaCombos('http://localhost:8090/inventario/autores');

                    foreach ($data as $tabautores) :
                    ?>
                        <option value="<?php echo $tabautores->codautor; ?>" selected><?php echo $tabautores->nomeautor; ?></option>
                    <?php endforeach ?>
                </select>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                    var selectAutor = document.getElementById('selectAutor');

                    // Adicione um evento de clique ao botão que abre o modal
                    document.querySelector('.open-modal').addEventListener('click', function(event) {
                    event.preventDefault();

                            // Obtém o valor selecionado no select
                            var selectedCodAutor = selectAutor.value;

                            // Redireciona para o arquivo do modal, passando o código da família como parâmetro na URL
                            window.location.href = this.getAttribute('href') + '?codautor=' + encodeURIComponent(selectedCodAutor);
                        });
                    });
                </script>
            </td>
            <td>
                <a class="btn btn-success" href="#form_autor" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>

                <div id="form_autor" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>

                        <h4>Cadastro de Autores</h4>
                        <form id="autorForm">
                            <table class="table">
                                <tr>
                                    <td><label for="nomeautor">Autor</label></td>
                                    <td><input type="text" maxlength="80" class="form-control" id="nomeautor" required></td>
                                </tr>
                            </table>
                            <button class="btn btn-primary" id="cadastrarBtnautor">Cadastrar</button>
                        </form>

                        <script>
                            document.getElementById('cadastrarBtnautor').addEventListener('click', function abreform(event) {
                                event.preventDefault();

                                var nomeAutor = document.getElementById('nomeautor').value;

                                var xhr = new XMLHttpRequest();
                                xhr.open('POST', 'salvar-autor.php');
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        // Redireciona para a página de lista de famílias
                                        //window.location.href = 'planta-formulario.php';
                                        // Adiciona o novo valor ao campo select
                                        var novoOption = document.createElement('option');
                                        novoOption.text = nomeAutor;
                                        novoOption.value = nomeAutor;
                                        document.getElementById('selectAutor').add(novoOption);

                                        // Fecha o modal
                                        //document.getElementById('form_familia').style.display = 'none';
                                        document.getElementById('form_autor').style.display = 'block';

                                        // Adicione event listeners para seus botões
                                        document.getElementById('cadastrarBtnautor').addEventListener('click', abrirModal);
                                        
                                    } else {
                                        console.error('Erro ao salvar autor. Status:', xhr.status);
                                    }
                                };
                                xhr.onerror = function() {
                                    console.error('Erro ao fazer requisição para salvar autor.');
                                };
                                xhr.send('nomeautor=' + encodeURIComponent(nomeAutor));
                            });

                           
                        </script>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Function to save input values to localStorage
                                function saveToLocalStorage(id) {
                                    const element = document.getElementById(id);
                                    if (element.type === 'checkbox') {
                                        localStorage.setItem(id, element.checked);
                                    } else {
                                        localStorage.setItem(id, element.value);
                                    }
                                }

                                // Function to load input values from localStorage
                                function loadFromLocalStorage(id) {
                                    const element = document.getElementById(id);
                                    const value = localStorage.getItem(id);
                                    if (value !== null) {
                                        if (element.type === 'checkbox') {
                                            element.checked = value === 'true';
                                        } else {
                                            element.value = value;
                                        }
                                    }
                                }

                                // IDs of the inputs
                                const inputIds = ['datacoleta', 'select-local', 'coordenada_s', 'coordenada_o', 'flor', 'fruto', 'select-familia', 'select-genero', 'select-autor'];

                                // Load saved values on page load
                                inputIds.forEach(id => loadFromLocalStorage(id));

                                // Save values on input change
                                inputIds.forEach(id => {
                                    document.getElementById(id).addEventListener('input', () => saveToLocalStorage(id));
                                });

                                // Save checkbox values on change
                                document.getElementById('flor').addEventListener('change', () => saveToLocalStorage('flor'));
                                document.getElementById('fruto').addEventListener('change', () => saveToLocalStorage('fruto'));

                                // Save select values on change
                                document.getElementById('select-local').addEventListener('change', () => saveToLocalStorage('select-local'));
                                document.getElementById('select-familia').addEventListener('change', () => saveToLocalStorage('select-familia'));
                                document.getElementById('select-genero').addEventListener('change', () => saveToLocalStorage('select-genero'));
                                document.getElementById('select-autor').addEventListener('change', () => saveToLocalStorage('select-autor'));
                            });
                        </script>
                    </div>
                </div>
            </td>


            <!-- O segundo valor estará selecionado inicialmente -->
            <td>Espécie: </td>
            <td>
                <select name="select-especie" class="form-control">
                    <?php
                    //include("carrega-especie.php");
                    $data = carregaCombos('http://localhost:8090/inventario/especies');
                    foreach ($data as $tabespecies) :
                    ?>
                        <option value="<?php echo $tabespecies->codespecie; ?>" selected><?php echo $tabespecies->nomeespecie; ?></option>
                    <?php endforeach ?>
                </select>
            </td>
            <td>
                <a class="btn btn-success" href="especie-formulario.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </td>
        </tr>

        <tr>
            <!-- O segundo valor estará selecionado inicialmente -->
            <td>Nativa/Exótica: </td>
            <td>
                <select name="select-nativaexotica" class="form-control">
                    <?php
                    include("carrega-nativaexotica.php");
                    foreach ($data as $tabnativasexoticas) :
                    ?>
                        <option value="<?php echo $tabnativasexoticas->codnativaexotica; ?>" selected><?php echo $tabnativasexoticas->nomenativaexotica; ?></option>
                    <?php endforeach ?>
                </select>
            </td>
            <td>
                <a class="btn btn-success" href="nativaexotica-formulario.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </td>


            <!-- O segundo valor estará selecionado inicialmente -->
            <td>Locais: </td>
            <td>
                <select name="select-local" class="form-control">
                    <?php
                    //include("carrega-locais.php");
                    $data = carregaCombos('http://localhost:8090/inventario/locais');
                    foreach ($data as $tablocais) :
                    ?>
                        <option value="<?php echo $tablocais->codlocal; ?>" selected><?php echo $tablocais->nomelocal; ?></option>
                    <?php endforeach ?>
                </select>
            </td>
            <td>
                <a class="btn btn-success" href="local-formulario.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </td>
        </tr>
    </table>

    <input class="btn btn-outline-primary" type="submit" value="Cadastrar" />
</form>
@include('Inventory.baseboard')
