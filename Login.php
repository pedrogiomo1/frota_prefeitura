<?php
include_once('Head.html');
?>
<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
  <div class="card shadow-lg">
    <div class="d-flex justify-content-between align-items-center">
      <div class="h1 text-frota" style="font-weight: bolder">Login</div>
      <img src="assets/logo-prefeitura.png" width="75px" height="90px" alt="logo" />
    </div>
    <form>
      <div class="form-group pt-3">
        <label for="registration">Matrícula</label>
        <input type="text" class="form-control" id="registration" placeholder="Digite sua matícula:" />
      </div>
      <div class="form-group pt-2">
        <label for="password">Senha</label>
        <input type="password" class="form-control" placeholder="Digite sua senha:" />
      </div>
      <div class="form-check d-flex justify-content-between">
        <label class="form-check-label" for="checkbox"><input type="checkbox" class="form-check-input" />Mantenha-me conectado</label>
        <a class="text-frota-secondary" href="#">esqueci minha senha</a>
      </div>
      <div class="d-flex justify-content-between pt-3">
        <a type="button" class="btn btn-outline-frota col-4" href="Register.php">
          Cadastrar
        </a>
        <a type="submit" class="btn btn-frota col-4" href="CarsList.php">Entrar</a>
      </div>
    </form>
  </div>
</div>
</body>

</html>
<style scoped>
  body {
    margin: 0;
    background-image: url(assets/parque_do_inga.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
  .card {
    padding: 2.5rem 4rem 3rem !important;
    border-radius: 15px !important;
    width: 100vh !important;
}
</style>