<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Imagem</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h3>Upload de Imagem</h3>
            </div>
            <div class="card-body">
                <form id="uploadForm" action="salvar-imagem.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="imageFile" class="form-label">Selecione a Imagem:</label>
                        <input type="file" class="form-control" id="imageFile" name="file" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="dataImage" class="form-label">Data da Imagem:</label>
                        <input type="date" class="form-control" id="dataImage" name="dataimagem" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição:</label>
                        <input type="text" class="form-control" id="description" name="descricao" placeholder="Digite a descrição" required>
                    </div>
                    <div class="mb-3">
                        <label for="plantCode" class="form-label">Código da Planta:</label>
                        <input type="text" class="form-control" id="plantCode" name="codigoPlanta" placeholder="Digite o código da planta" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
