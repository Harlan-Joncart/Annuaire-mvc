<?php
/* Smarty version 5.8.0, created on 2026-04-28 17:31:38
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f0eefa5a4485_47272619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66b1e80071160479cd6e6e2b55912f19a519ad03' => 
    array (
      0 => 'index.tpl',
      1 => 1777396006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f0eefa5a4485_47272619 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Aurion_11\\Downloads\\Annuaire-mvc-main\\Views\\templates';
?><!-- Template de base avec le moteur de template Smarty -->
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->getValue('vue')["titre"];?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="Views/templates/style.css">
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </head>
    <body>      
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1>Les Pages Orange</h1>
                        <p class="subtitle">Annuaire de sites web</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <nav>
                            <a href="index.php">Accueil</a> | 
                            <a href="index.php?page=site&action=list">Sites</a> | 
                            <a href="index.php?page=categorie&action=list">Catégories</a> | 
                            <a href="index.php?page=utilisateur&action=list">Utilisateurs</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        
        <main class="container">
            <h1><?php echo $_smarty_tpl->getValue('vue')["titre"];?>
</h1>
            <div class="separator"></div>
            <?php ob_start();
echo $_smarty_tpl->getValue('tpl');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->renderSubTemplate($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </main>
        
        <footer>
            <div class="container text-center">
                <p>&copy; 2026 Les Pages Orange. Tous droits réservés.</p>
            </div>
        </footer>
    </body>
</html>

<?php }
}
