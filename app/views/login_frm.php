<div>
    <section class="login-bg">
      <div class="nav"><img src="../src/img/logo_SGM-2.png" width="400px"> 
      </div>
    <div class="popup">
     
    <div class="bar"></div>
    <div class="forms">
      <div class="login-logo">
        <h1 class="font-1-xl">Login</h1>
      </div>
      <div class="form-element">
        <form action="?ct=main&mt=login_submit" method="post">
        <label for="username">Usuário</label>
        <input type="text" name="username" id="username" >
        </div>
       <div class="form-element">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password">
       </div>
       <div class="form-element">
        <input type="checkbox" id="remember-me">
        <label class="lastlabel" for="remember-me">Lembre-me</label>
       </div>
       <div class="form-element">
        <button type="submit">Acessar</button>
       </div>
      <div class="form-element">
        <a href="">Esqueci a Senha</a>
        <?php if(!empty($validation_errors)): ?>
                                <div class="alert alert-danger p-2 text-center">
                                    <?php foreach($validation_errors as $error): ?>
                                        <div><script><?= $error ?></script></div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if(!empty($server_error)): ?>
                                <div class="alert alert-danger p-2 text-center">
                                    <div><?= $server_error ?></div>
                                </div>
                            <?php endif; ?>
      </form>
      </div>
     </div>
    </div>
    <div class="stamp">
  </div>
  <?php if (!empty($_SESSION['login_error_empty'])): ?>
  <script>
    emptyLogin();
  </script>
  <?php unset($_SESSION['login_error_empty']); ?>
<?php endif; ?>

</section>

