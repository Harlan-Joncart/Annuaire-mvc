<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:40:48
  from 'file:categorie/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1fc50a99f05_93364889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210a3ad7943039e36f755cd7af830b15e57fa3fc' => 
    array (
      0 => 'categorie/add.tpl',
      1 => 1777466047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1fc50a99f05_93364889 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire-mvc\\Views\\templates\\categorie';
?><p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>
<form action="index.php?page=categorie&action=insert" method="post">
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form><?php }
}
