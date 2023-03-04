<?php
include_once('Head.html');
?>
<div class="d-flex align-items-center flex-column pt-5">
  <div class="d-block">

    <div class="h1 text-frota align-self-left">Listagem de Veículos</div>
    <div class="py-3">
      <form class="card py-0 px-3">
        <div class="row pt-3 ">
          <div class="form-group col-2">
            <label for="Modelo">Modelo</label>
            <input type="text" class="form-control" id="registration" />
          </div>
          <div class="form-group col-2">
            <label for="Modelo">Placa</label>
            <input type="text" class="form-control" id="registration" />
          </div>
          <div class="form-group col-2">
            <label for="Modelo">Ano</label>
            <input type="text" class="form-control" id="registration" />
          </div>
          <div class="form-group col-2">
            <label for="Modelo">Status</label>
            <select class="form-control">
              <option value="DISPONIVEL">DISPONIVEL</option>
              <option value="INDISPONIVEL">INDISPONIVEL</option>
              <option value="MANUTENCAO">EM MANUTENCAO</option>
            </select>
          </div>
          <div class="form-group col-2">
            <label for="">Período de tempo</label>
            <div class="input-group date" data-provide="datepicker">
              <input type="text" class="form-control">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
          <div class="form-group col-2">
            <label for="">Fim do Periodo</label>
            <div class="input-group date" data-provide="datepicker">
              <input type="text" class="form-control">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="card pt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Modelo</th>
            <th scope="col">Placa</th>
            <th scope="col">Ano</th>
            <th scope="col">Status (hoje)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Onix</td>
            <td>abc-1234</td>
            <td>2019</td>
            <td>
              <span class="badge badge-success">DISPONIVEL</span>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Argo</td>
            <td>cba-321</td>
            <td>2022</td>
            <td>
              <span class="badge badge-danger">INDISPONIVEL</span>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Sandero</td>
            <td>xyz-321</td>
            <td>2020</td>
            <td>
              <span class="badge badge-warning text-white">EM MANUTENCAO</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>

</html>
<style scoped>
  .card {
    padding: 1rem 2rem !important;
    border-radius: 15px !important;
    width: 150vh !important;
  }
</style>