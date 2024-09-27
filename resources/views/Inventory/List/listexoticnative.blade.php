<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exótica/Nativa</title>
    </title>
    <style>
        /* Estilos gerais para a tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #343a40;
            color: white;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #444;
        }

        th {
            background-color: #212529;
        }

        tr:hover {
            background-color: #2c3034;
        }

        /* Estilos para botões */
        .btn-outline-primary, .btn-outline-danger {
            border: none;
            padding: 8px 12px;
            color: white;
            cursor: pointer;
            background-color: transparent;
        }

        .btn-outline-primary:hover {
            background-color: rgba(61, 73, 241, 0.2);
        }

        .btn-outline-danger:hover {
            background-color: rgba(255, 0, 0, 0.2);
        }

        svg {
            vertical-align: middle;
        }

        @media (max-width: 768px) {
            thead {
                display: none;
            }

            tbody tr {
                display: block;
                margin-bottom: 10px;
                border-bottom: 2px solid #444;
            }

            tbody td {
                display: block;
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            tbody td:before {
                content: attr(data-label); 
                position: absolute;
                left: 10px;
                top: 12px;
                font-weight: bold;
                text-align: left;
                color: #bbb;
            }

            tbody td:last-child {
                border-bottom: 0;
            }
        }
    </style>
</head>
<body>
    @include('Inventory.header')
                <h1>Nativa/Exóticas Cadastradas</h1>


                <table>
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nativa/Exótcas</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @if(isset($data) && is_array($data))
                @foreach($data as $detalhes)
                    <tr>
                        <th scope="row">{{ $detalhes->codnativaexotica }}</th>
                        <td data-label="Epíteto">{{ $detalhes->nomenativaexotica }}</td>

                        <td>
                            <form action="{{ url('/home/inventory/list-exoticnative/edit-exoticnative')}}" method="GET">
                                <input type="hidden" name="codnativaexotica" value="{{ $detalhes->codnativaexotica }}">
                                <button title="Editar" type="submit" class="btn btn-outline-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ url('remove-exoticnative')}}" method="GET">
                                <input type="hidden" name="codnativaexotica" value="{{ $detalhes->codnativaexotica }}">
                                <button title="Remover" type="submit" class="btn btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Nenhum dado disponível</td>
                </tr>
            @endif
        </tbody>
    </table>            
    @include('Inventory.baseboard')
</body>
</html>

