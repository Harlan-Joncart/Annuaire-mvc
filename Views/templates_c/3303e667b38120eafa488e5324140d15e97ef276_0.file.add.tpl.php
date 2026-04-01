<?php
/* Smarty version 4.1.0, created on 2026-04-01 13:36:53
  from 'C:\Users\joncart\Documents\pas ranger\Annuaire\Views\templates\categorie\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69cd1f75c86891_58603519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3303e667b38120eafa488e5324140d15e97ef276' => 
    array (
      0 => 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire\\Views\\templates\\categorie\\add.tpl',
      1 => 1775047666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cd1f75c86891_58603519 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>
<form action="index.php?page=categorie&action=insert" method="post">
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form><?php }
}
