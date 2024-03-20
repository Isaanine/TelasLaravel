<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Agendamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</head>

    <body>
        <div class="container">

            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                        <div class="container-fluid text-bg-primary p-3">
                            <a class="navbar-brand text-light" href="#">SISTEMA WEB</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-link active text-light" aria-current="page" href="index.blade.php">Cadastrar</a>
                                        <a class="nav-link text-light" href="listar.blade.php">Consultar</a>
                                    </div>
                                </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <br><h4>Cadastrar - Agendamento de Ponteciais Clientes </h4>
                    <br><h6>Sistema Utilizado para Agendamento de Serviços </h6><br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="overflow-auto">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Origem</th>
                                    <th scope="col">Data de Contato</th>
                                    <th scope="col">Observação</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>isa</td>
                                <td> (xx)xxxx-xxxx </td>
                                <td> Celular </td>
                                <td> 20/03/2024 </td>
                                <td> Testando</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                </tr>
                                <tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>

        <div>
    </body>
</html>