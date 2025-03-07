<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media consumo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">
            Meu Carro
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/media">Media consumo</a>
            </div>
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/alcoolougasolina">Alcool ou Gasolina</a>
            </div>
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/gastoviagem">Gasto Viagem</a>
            </div>
            <div class="position-absolute top-50 end-0 translate-middle-y p-5">
            </div>
          </div>
        </div>
      </nav>

    <a href="/">home<a><br>
    <form action="/gastoviagem" method="POST">
        @csrf
        <label for="num1">digita num1</label> <br>
        <input type="text" name="num1">
        <br>
        <label for="num2">digita num2</label> <br>
        <input type="text" name="num2">
        <br>
        <label for="num3">digita num3</label> <br>
        <input type="text" name="num3">
        <br>
        <button type="submit">Calcular</button>
    </form>
    <hr>
    @isset($result)
       <h1> {{$result}} </h1> 
    @endisset

</body>
</html>