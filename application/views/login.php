

<!doctype html>
<html>
  <head>
    <title>Login</title>

    <!-- Importando Bootstrap -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS customizado do template do Bootstrap 4 -->
    <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
  </head>

  <!-- Importando Jquery -->
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <!-- Login assícrono com JQuery -->
<script type="text/javascript">
  $(document).ready(function(){
      $('#form').submit(function(){
        var email = $('#email').val();
        var senha = $('#senha').val();
        $.ajax({
          type: 'post',
          url: 'index.php/Login/Logar',
          data: '&email='+email+'&senha='+senha,
          success:
            function(result){
              if (result == 1) {
                location.href =  'index.php/Usuario';
              }
              else{
                alert("Você errou a senha ou usuario incorreto");
              }
            }
        })
        return false;  
      })
          
    })
</script>

  <body>
    <form method="post" id="form" class="form-signin">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Fazer Login</h1>
      </div>

      <div class="form-label-group">
        <input type="email" id="email" class="form-control" placeholder="Email" required autofocus>
        <label for="inputEmail">Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="senha" class="form-control" placeholder="Senha" required>
        <label for="inputPassword">Senha</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Fazer Login</button>
      <p class="mt-5 mb-3 text-center"><a href="<?php echo base_url()?>/index.php/Cadastro">Cadastre-se</a></p>
    </form>

  </body>
  </html>