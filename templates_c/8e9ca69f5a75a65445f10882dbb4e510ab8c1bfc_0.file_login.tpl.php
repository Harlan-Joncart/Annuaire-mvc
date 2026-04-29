<?php
/* Smarty version 5.8.0, created on 2026-04-29 13:59:04
  from 'file:auth/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f20ea8a6b3a6_11997915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e9ca69f5a75a65445f10882dbb4e510ab8c1bfc' => 
    array (
      0 => 'auth/login.tpl',
      1 => 1777470466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f20ea8a6b3a6_11997915 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire-mvc\\Views\\templates\\auth';
?><div class="auth-container">
    <div class="auth-box">
        <h2>Connexion</h2>
        <p class="description"><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>

        <?php if ($_smarty_tpl->getValue('vue')['message']) {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_smarty_tpl->getValue('vue')['message'];?>

            </div>
        <?php }?>

        <form action="index.php?page=auth&action=signin" method="post">
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required />
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe" required />
            </div>

            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>

        <hr>
        <p class="text-center">Pas encore de compte ? <a href="index.php?page=auth&action=register">S'inscrire</a></p>
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
