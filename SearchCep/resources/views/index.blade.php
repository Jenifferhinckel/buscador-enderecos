<!doctype html>
<html lang="en" class="h-100">
  <head>
    <link href="{{ asset('assets/bootstrap.min.css')}}" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>    
    <link href="{{asset('assets/cover.css')}}" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    <div class="w-100 h-100 mx-auto p-3">
      <header class="mb-auto">
        <div>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
          </nav>
        </div>
      </header>

      <main class="p-3" style="padding-top:10% !important">
        <h1>Find your CEP:</h1>
          @if($errors->any())
          <h4 style="color:red">{{$errors->first()}}</h4>
          @endif
          <form method="get" action="{{route('getCep')}}">
            <input type="text" id="cep" name="cep" class="form-control" value="{{old('cep')}}" style="width:31%; margin-left:35%">
            <button type="submit" class="btn btn-lg btn-secondary fw-bold border-white bg-white my-2">Search</button>
          </form>
      </main>
      @if(isset($cep) and $cep != '')
      <div class="container">
        <table class="table table-dark justify-content-center float-md-end">
          <thead>
            <tr>
              <th scope="col">CEP</th>
              <th scope="col">Logradouro</th>
              <th scope="col">Complemento</th>
              <th scope="col">Bairro</th>
              <th scope="col">Localidade</th>
              <th scope="col">UF</th>
              <th scope="col">IBGE</th>
              <th scope="col">GIA</th>
              <th scope="col">DDD</th>
              <th scope="col">Siafi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$cep->cep}}</td>
              <td>{{$cep->logradouro}}</td>
              <td>{{$cep->complemento}}</td>
              <td>{{$cep->bairro}}</td>
              <td>{{$cep->localidade}}</td>
              <td>{{$cep->uf}}</td>
              <td>{{$cep->ibge}}</td>
              <td>{{$cep->gia}}</td>
              <td>{{$cep->ddd}}</td>
              <td>{{$cep->siafi}}</td>
            </tr>
          </tbody>
        </table>
      </div>
      @endif
      <footer class="mt-auto text-white-50" style="padding-top:14%">
        <p>© 2021</p>
      </footer>
    </div>
  </body>
</html>
