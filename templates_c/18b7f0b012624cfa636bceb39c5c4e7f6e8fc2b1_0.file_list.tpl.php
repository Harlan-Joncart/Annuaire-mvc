<?php
/* Smarty version 5.8.0, created on 2026-04-28 17:39:21
  from 'file:site/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f0f0c9a1b359_06936508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18b7f0b012624cfa636bceb39c5c4e7f6e8fc2b1' => 
    array (
      0 => 'site/list.tpl',
      1 => 1777394354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f0f0c9a1b359_06936508 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Aurion_11\\Downloads\\Annuaire-mvc-main\\Views\\templates\\site';
?><div class="actions-bar">
    <a class="btn btn-primary" href="index.php?page=site&action=add">Ajouter un site</a>
</div>

<p class="description"><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>    

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>URL</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Catégorie</th>
                <th>Utilisateur</th>
                <th>Action</th>
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
                    <td><strong><?php echo $_smarty_tpl->getValue('site')['titre'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->getValue('site')['description'];?>
</td>
                    <td><span class="badge bg-primary"><?php echo $_smarty_tpl->getValue('site')['categorie_nom'];?>
</span></td>
                    <td><?php echo $_smarty_tpl->getValue('site')['utilisateur_mail'];?>
</td>
                    <td>
                        <div class="action-links">
                            <a class="btn btn-primary" href="index.php?page=site&action=update&id=<?php echo $_smarty_tpl->getValue('site')['id'];?>
">Modifier</a>
                            <a class="btn btn-danger" href="#" onclick="sup(<?php echo $_smarty_tpl->getValue('site')['id'];?>
);">Supprimer</a>
                        </div>
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
