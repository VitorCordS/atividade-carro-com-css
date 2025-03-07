
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alcool ou Gasolina</title>
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

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-sm-12">
              <div class="card shadow p-5">
                <h1 class="mx-auto mb-4 fw-semibold">Alcool ou Gasolina</h1>
                <div class="d-flex gap-2">
                    <img  width="150" class="flex-fill" src="https://nxboats.com.br/wp-content/uploads/2023/11/marcas-de-carro-de-luxo.jpg" alt="">
                <form class="flex-fill" action="/alcoolougasolina" method="post">
                    @csrf
                  <!-- Input km -->
                  <div class="form-floating mb-3">
                    <input name="alco" type="text" class="form-control"  >
                    <label >Preço do Alcool</label>
                  </div>
                  <!-- Input gas gasto -->
                  <div class="form-floating">
                    <input name="gas" type="text" class="form-control" >
                    <label >Preço da Gasolina</label>
                  </div>
                  <!-- Botão calc -->
                  <div class="d-grid my-3 mx-1">
                    <button class="btn btn-primary btn-lg" type="submit">
                      Calcular
                    </button>
                  </div>
                </form>
            </div>
                <hr>

                    @isset($result)
                    <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
                       <p class="fs-3 text-center">Abasteça com: {{$result}} </p> 
                    </div>
                       @endisset
                      
                </div>
              </div>
            </div><!-- fim da coluna -->
        </div><!-- fim da row -->
    </div><!-- fim do container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>