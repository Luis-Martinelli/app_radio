<div>
    <section class="login-bg">
    <div class="popup">
    <div class="bar"></div>
    <div class="forms">
      <div class="login-logo">
        <img src="./img/icons/login-12.svg" alt="">
      </div>
      <div class="form-element">
        <form action="?ct=main&mt=login_submit" method="post">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" oninput="mascara(this)" maxlength="11">
        </div>
       <div class="form-element">
        <label for="password">Senha</label>
        <input type="password" id="senha">
       </div>
       <div class="form-element">
        <input type="checkbox" id="remember-me">
        <label class="lastlabel" for="remember-me">Lembre-me</label>
       </div>
       <div class="form-element">
        <button type="submit">Acessar</button>
       </div>
      <div class="form-element">
        <a href="">Esqueci a Senha!</a>
        <?php if(!empty($validation_errors)): ?>
                                <div class="alert alert-danger p-2 text-center">
                                    <?php foreach($validation_errors as $error): ?>
                                        <div><?= $error ?></div>
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
      <img src="./img/logo200anosbranca.png" alt="">
      <img src="./img/12I-branco.png" alt="">
    </div>
</section>

