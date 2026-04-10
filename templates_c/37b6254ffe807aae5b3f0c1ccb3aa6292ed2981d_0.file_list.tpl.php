<?php
/* Smarty version 5.8.0, created on 2026-04-10 13:12:02
  from 'file:site/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d8f722de5e87_78658925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b6254ffe807aae5b3f0c1ccb3aa6292ed2981d' => 
    array (
      0 => 'site/list.tpl',
      1 => 1775823432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d8f722de5e87_78658925 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire\\Views\\templates\\site';
?><h2>
    <a class="btn btn-primary" href="index.php?page=site&action=add">Ajouter</a>
</h2>

<p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>    

<div>
    <table class="table">
        <thead>
            <tr>
                <td>URL</td>
                <td>Titre</td>
                <td>Description</td>
                <td>Catégorie</td>
                <td>Utilisateur</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vue')['sites'], 'site');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('site')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><a href="<?php echo $_smarty_tpl->getValue('site')['url'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('site')['url'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->getValue('site')['titre'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('site')['description'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('site')['categorie_nom'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('site')['utilisateur_mail'];?>
</td>
                    <td>
                        <a class="btn btn-primary" href="index.php?page=site&action=update&id=<?php echo $_smarty_tpl->getValue('site')['id'];?>
">Modification</a>
                        | 
                        <a class="btn btn-danger" href="#" onclick="sup(<?php echo $_smarty_tpl->getValue('site')['id'];?>
);">Suppression</a>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php echo '<script'; ?>
>
function sup(id){
    if(confirm("Voulez-vous vraiment supprimer ce site ?")){
        window.location.replace("index.php?page=site&action=delete&id=" + id);
    }
}
<?php echo '</script'; ?>
>
<?php }
}
