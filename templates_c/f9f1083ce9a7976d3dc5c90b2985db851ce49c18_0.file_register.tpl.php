<?php
/* Smarty version 5.8.0, created on 2026-04-29 14:31:06
  from 'file:auth/register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f2162a3305d2_84225461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f1083ce9a7976d3dc5c90b2985db851ce49c18' => 
    array (
      0 => 'auth/register.tpl',
      1 => 1777470472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f2162a3305d2_84225461 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire-mvc\\Views\\templates\\auth';
?><div class="auth-container">
    <div class="auth-box">
        <h2>Inscription</h2>
        <p class="description"><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>

        <?php if ($_smarty_tpl->getValue('vue')['message']) {?>
            <div class="alert alert-<?php echo $_smarty_tpl->getValue('vue')['messageType'];?>
" role="alert">
                <?php echo $_smarty_tpl->getValue('vue')['message'];?>

            </div>
        <?php }?>

        <form action="index.php?page=auth&action=signup" method="post">
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required />
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Minimum 6 caractères" minlength="6" required />
            </div>

            <div class="form-group mb-3">
                <label for="confirm_password" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmez votre mot de passe" minlength="6" required />
            </div>

            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
        </form>

        <hr>
        <p class="text-center">Vous avez déjà un compte ? <a href="index.php?page=auth&action=login">Se connecter</a></p>
    </div>
</div>

<style>
.auth-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 500px;
}

.auth-box {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 400px;
}

.auth-box h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-control {
    margin-bottom: 15px;
}

.btn {
    margin-top: 10px;
}
</style>
<?php }
}
