  <!doctype html>
  <html lang="PT-BR">
      <head>
          <meta charset="utf-8" />
          <title></title>
             <link rel="stylesheet" type="text/css" href="{{ URL::to('css/app.css')}}">
             <!-- <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
             <!-- <link rel="stylesheet" href="<?php echo asset('css/estilo.css')?>" type="text/css"> -->
      </head>
  <body>
        <div class="card p-2 m-4">
          <div class="card-header">
            <p class="display-4">Distribuir Bolsas</p>
        </div>
        <div class="card-body">

        <form action="#" method="POST" class="form-inline">
          <div class="container-fluid">
            <div class="form-group mb-3">
                <div class="row">
                  <div class="col">
                      <label class="form-check-label mr-sm-2 text-nowrap" for="ndoacao"> Número da Doação: </label>
                  </div>
                  <div class="col">
                      <input type="text" class="form-control mr-sm-2" id="ndoacao" name="ndoacao">
                  </div>
                  <div class="col">
                      <button type="submit" class="btn btn-primary mr-sm-2" name="pesquisa">  Pesquisar </button>
              </div>
            </div>
        </div>


      <div class="row mb-2">
        <div class="col border p-3">
          <table class="table table-bordered table-hover table-striped table-sm m-0" id="tabela">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Selecionar </th>
                  <th scope="col">Doação </th>
                  <th scope="col">Hemocomponente </th>
                </tr>
              </thead>
        <tbody>
          <tr>
            <td>
                <input type="radio" class="form-check-input" id="customCheck1" name="radio" checked>
            </td>
            <td>012555435163165</td>  <!--  o mesmo numero da doação trazido da pesquisa -->
            <td>30</td>          <!-- numero do hemo que tiver no banco  -->
           
          </tr>
          <tr>
            <td>
                  <input type="radio" class="form-check-input" id="customCheck2" name="radio">
            </td>
           <td>012555435163165</td>  <!--  o mesmo numero da doação trazido da pesquisa -->
            <td>40</td>    <!-- numero do hemo que tiver no banco  -->
         
          </tr>
          <tr>
            <td>
                  <input type="radio" class="form-check-input" id="customCheck3" name="radio">
            </td>
           <td>012555435163165</td>  <!--  o mesmo numero da doação trazido da pesquisa -->
            <td>20</td> <!-- numero do hemo que tiver no banco  -->
        
          </tr>
        </tbody>
      </table>
  </div>
    </div>
  <!-- </div> -->

      <!-- <div class="container"> -->
    <div class="form-group mt-4">
      <div class="row">
        <div class="col">
              <label class="form-check-label mr-sm-2" for="nhemo">  NR : </label>
          </div>
          <div class="col">
                <input type="text" class="form-control mr-sm-2" id="nhemo" >
            </div>
            <div class="col">
                <label class="form-check-label mr-sm-2 text-nowrap" for="exampleFormControlSelect1">  Código do local: </label> <!--  --pode ser selecionavel vem do banco da tabela hospital campo codigo -->
            </div>
            <div class="col">
                <select class="form-control" id="exampleFormControlSelect1">
                                   <option>1</option>
                                   <option>2</option>
                                   <option>3</option>
                                   <option>4</option>
                                   <option>5</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary mr-sm-2 pl-3 pr-3">Enviar </button>
          </div>
        </div>
    </div>
  </div>
  </form>
  </div>
  </div>
  <script src="{{ URL::to('js/app.js')}}" type="text/javascript"></script> 
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $("#tabela > tbody > tr").on('click', function(){
      $(this).find('td input[type=radio]').prop('checked', true);
    });
  </script>

  </body>
  </html>
