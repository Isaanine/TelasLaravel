<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Agendamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<form>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar bg-primary ">
                <div class="container-fluid">
                    <a class="navbar-brand text-bg-primary" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active text-bg-primary" aria-current="page" href="index.blade.php">Cadastrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-bg-primary " href="listar.blade.php">Consultar</a>
                                    </li>
                            </ul>
                        </div>
                </div>
            </nav>
        </div>
        </div>
        <div class="row">
        <div class="col">

        <font size= 5><p class="fw-normal" align ="left"><br><strong>
        Cadastrar - Agendamento de Potenciais Clientes</strong>
        </p></font>
        <p class="fw-normal" align ="left">
        Sistema utilizado para agendamento de serviços
        </p></font><br>
        </div>
        </div>
        <div class="row">
        <div class="col">

        <div class="mb-3">
        <p class="text-start">Nome:</p>
<input type="varchar" class="form-control" id="exampleFormControlInput1" >
</div>

<div class="mb-3">
<p class="text-start">Telefone:</p>
<input type="tel" class="form-control" id="exampleFormControlInput2" placeholder="(XX)XXXXX-XXXX">
</div>

<div>
<p class="text-start">Origem:</p>

<select class="form-select" aria-label="Default select example">
<option selected>Celular</option>
<option value="1">Telefone Fixo</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
<br>
<div class="mb-3">
<p class="text-start">Data do contato</p>
<input type="date" class="form-control" id="exampleFormControlInput4" ">
</div>
<div class="mb-3">
<p class="text-start">Observações:</p>
<textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
</div>
<div class="text-start"> <!-- Adicionado o text-start aqui -->
<input class="btn btn-primary" type="submit" value="Cadastrar" >

</div>
<br>
        </div>
        </div>
</div>

</form>
</body>
</html>
