
<!doctype html>
<html lang="en">
  <head>

    <title>Cadastre-se</title>

    <!-- Importando Bootstrap -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS customizado do template do Bootstrap 4 -->
    
  </head>

  <body class="bg-light">   
    <div class="container">
      <div class="py-5">
        <h2>Cadastro</h2>
      </div>
     

      <div class="row">
        <div class="col-md-8 order-md-2">
        <?php if($this->session->flashdata('sucesso')): ?>
         <div class="alert alert-success" role="alert">
            Cadastro efetuado com sucesso !!!
         </div>
       <?php endif; ?>
          <form method="post" action="<?php echo base_url() ?>/index.php/Cadastro/Cadastrar">
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="nome">Nome Completo:</label>
                <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome Completo" value="" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email:</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
            </div>

            <div class="mb-3">
              <label for="senha">Senha:</label>
              <input name="senha" type="password" class="form-control" id="senha" required>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="idade">Idade:</label>
                <select name="idade" class="custom-select d-block w-100" id="idade" required>
                  <option value="">Escolha...</option>
                  <?php for($i=18; $i<60; $i++): ?>
                    <option><?php echo $i ?></option>
                  <?php endfor; ?>
                </select>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Concluir Cadastro</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="<?php echo base_url() ?>">Voltar</a></li>
        </ul>
      </footer>
    </div>
  </body>
</html>