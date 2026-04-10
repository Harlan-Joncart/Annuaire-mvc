<?php
/* Smarty version 5.8.0, created on 2026-04-10 09:13:54
  from 'file:Accueil/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d8bf52c9ccc1_31154435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10c7ff8bb52b0f65fb97cec22a344ae82329948a' => 
    array (
      0 => 'Accueil/list.tpl',
      1 => 1775047666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d8bf52c9ccc1_31154435 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire\\Views\\templates\\Accueil';
?><h2>Presentation du MVC</h2>
<p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
<p>
<div>
    Liste des dossiers de notre MVC:
    <ul>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vue')['mvc'], 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value) {
$foreach0DoElse = false;
?>
        <li><?php echo $_smarty_tpl->getValue('m');?>
</li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
    <form action="index.php?page=analyse&action=check" method="post">
    <input type="url" name="site"  placeholder="https://example.com" pattern="https://.*" required>
    <input type="submit">
    </form>
</div>
<?php }
}
