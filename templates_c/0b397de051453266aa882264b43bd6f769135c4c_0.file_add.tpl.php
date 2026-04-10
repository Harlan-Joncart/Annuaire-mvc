<?php
/* Smarty version 5.8.0, created on 2026-04-10 11:51:24
  from 'file:site/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d8e43ca785d1_45371724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b397de051453266aa882264b43bd6f769135c4c' => 
    array (
      0 => 'site/add.tpl',
      1 => 1775053410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d8e43ca785d1_45371724 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire\\Views\\templates\\site';
?><p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>

<form action="index.php?page=site&action=insert" method="post">
    <input type="url" name="url" placeholder="URL du site" required />

    <input type="text" name="titre" placeholder="Titre" required />

    <textarea name="description" placeholder="Description" required></textarea>

    <input type="number" name="categorie_id" placeholder="ID Catégorie" required />

    <input type="number" name="utilisateur_id" placeholder="ID Utilisateur" required />

    <input type="submit" value="Valider">
</form><?php }
}
