<?php
/* Smarty version 5.8.0, created on 2026-04-29 13:27:27
  from 'file:Accueil/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f2073f0845f0_38546209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '128f1d5bac4a7ea5d4f37d827b98b80289e6152b' => 
    array (
      0 => 'Accueil/list.tpl',
      1 => 1777469244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f2073f0845f0_38546209 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire-mvc\\Views\\templates\\Accueil';
?><div class="card">
    <div class="card-header">
        <h2>Présentation du MVC</h2>
    </div>
    <div class="card-body">
        <p class="description"><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>
        
        <h3>Structure du projet</h3>
        <p>Liste des dossiers principaux de notre MVC :</p>
        <ul class="folder-list">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vue')['mvc'], 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value) {
$foreach0DoElse = false;
?>
                <li><strong><?php echo $_smarty_tpl->getValue('m');?>
</strong></li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<?php }
}
