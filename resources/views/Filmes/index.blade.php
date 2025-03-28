<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Filmes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-4">
    <div class="container">
        <div class="row g-3">
            <!-- Campos principais -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Código do Filme</label>
                        <input type="text" class="form-control" placeholder="Código do Filme">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Título</label>
                        <input type="text" class="form-control" placeholder="Título" value="{{ $filme->getTitle() }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Sinopse</label>
                    <textarea class="form-control" rows="3" placeholder="Sinopse" value="{{ $filme->getCast }}"></textarea>
                </div>

                <div class="row g-2">
                    <div class="col-md-6">
                        <label class="form-label">Título Original</label>
                        <input type="text" class="form-control" placeholder="Título Original" value="{{ $filme->getTitleOriginal() }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Título Alternativo</label>
                        <input type="text" class="form-control" placeholder="Título Alternativo">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Filme</label>
                        <input type="text" class="form-control" placeholder="Filme">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Franquia</label>
                        <input type="text" class="form-control" placeholder="Franquia">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gênero</label>
                        <input type="text" class="form-control" placeholder="Gênero">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Diretor</label>
                        <input type="text" class="form-control" placeholder="Diretor">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Estrelas</label>
                        <input type="text" class="form-control" placeholder="Estrelas">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Estúdio</label>
                        <input type="text" class="form-control" placeholder="Estúdio">
                    </div>
                </div>
            </div>

            <!-- Seção de dados e controles -->
            <div class="col-md-4">
                <div class="border p-3 bg-white">
                    <p>**** - <strong>Dublado</strong></p>
                    <p><strong>Sinopse:</strong> ____</p>
                    <p><strong>Título Original:</strong> ____</p>
                    <p><strong>Título Alternativo:</strong> --</p>
                    <p><strong>Data de Lançamento:</strong> ____</p>
                    <p><strong>Filme:</strong> ____</p>
                    <p><strong>Franquia:</strong> --</p>
                    <p><strong>Gênero:</strong> ____</p>
                    <p><strong>Tags:</strong> ____</p>
                    <p><strong>Diretor:</strong> ____</p>
                    <p><strong>Fase MCU:</strong> ____</p>
                    <p><strong>Estrelas:</strong> ____</p>
                    <p><strong>Estúdio:</strong> ____</p>
                </div>
            </div>
        </div>

        <!-- Botões de ação -->
        <div class="d-flex justify-content-center gap-3 mt-4">
            <button class="btn btn-secondary">Copiar</button>
            <button class="btn btn-primary">Inserir Novo</button>
            <button class="btn btn-warning">Editar</button>
            <button class="btn btn-dark">Anterior</button>
            <button class="btn btn-dark">Próximo</button>
        </div>
    </div>
</body>
</html>
