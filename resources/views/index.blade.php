<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDAMENTO DE SERVIÇOS - @gabriellimafreire</title>

    @vite([ 'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'])
</head>
<body style="background-color: #d3d3d3;"><br>
    <!-- Abrindo a tag container-->
<div class="container" style="background-color: white;">

     <!-- Iniciando Nav-bar -->
     <header >
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary" style="margin-top: -1rem; margin-left: -0.8rem; margin-right: -0.8rem;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SISTEMA WEB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Cadastrar</a>
        <a class="nav-link disabled">Consultar</a>
      </div>
    </div>
  </div>
</nav><br>
    </header>
    <!-- Finalizando Nav-bar --> 

    <!-- Iniciando Título e Subtítulo --> 
        <h5>Cadastrar - Agendamento de Potenciais Clientes</h5>
        <h12>Sistema utilizado para agendamento de  serviços</h12>
    <!-- Finalizando Título e Subtítulo -->

         <!-- Iniciando Formulário -->
        <form><br>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Telefone: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(XX)XXXXX-XXXX">
        </div>

        <div>
        <label for="exampleFormControlInput1" class="form-label">Origem: </label>
        <select class="form-select" aria-label="Default select example">
        <option selected>Celular</option>
        <option value="1">nenhum</option>
        <option value="2">nenhum</option>
        <option value="3">nenhum</option>
        </select>
        </div><br>
        
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Data de Contato: </label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="(XX)XXXXX-XXXX">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="button" class="btn btn-primary">Cadastrar</button><br><br>
        
        </form>
        <!-- Finalizando Formulário -->
</div>
 <!-- fechando a tag container-->
</body>
</html>