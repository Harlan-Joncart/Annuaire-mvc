<?php
/* Smarty version 4.1.0, created on 2026-04-01 13:31:09
  from 'C:\Users\joncart\Documents\pas ranger\Annuaire\Views\templates\categorie\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69cd1e1d484207_82000368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0968c14a4b861002120600dee20ed5cf8fd811c' => 
    array (
      0 => 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire\\Views\\templates\\categorie\\update.tpl',
      1 => 1775047666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cd1e1d484207_82000368 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>

<form action="index.php?page=categorie&action=update" method="post">
    <input type="hidden" name="id"  id="id" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['id'];?>
" /> 
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['libelle'];?>
" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form>
<?php }
}
