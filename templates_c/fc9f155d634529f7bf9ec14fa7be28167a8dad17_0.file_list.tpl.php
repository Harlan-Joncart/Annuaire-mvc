<?php
/* Smarty version 5.8.0, created on 2026-04-29 13:59:02
  from 'file:site/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f20ea6740957_05390851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc9f155d634529f7bf9ec14fa7be28167a8dad17' => 
    array (
      0 => 'site/list.tpl',
      1 => 1777470566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f20ea6740957_05390851 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire-mvc\\Views\\templates\\site';
?><div class="actions-bar">
    <?php if ($_smarty_tpl->getValue('vue')['isLoggedIn']) {?>
        <a class="btn btn-primary" href="index.php?page=site&action=mySites">Mes sites</a>
        <a class="btn btn-success" href="index.php?page=site&action=add">+ Ajouter un site</a>
    <?php } else { ?>
        <a class="btn btn-primary" href="index.php?page=auth&action=login">Se connecter pour ajouter un site</a>
    <?php }?>
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
                <th>Actions</th>
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
                        <?php if ($_smarty_tpl->getValue('vue')['isLoggedIn'] && $_smarty_tpl->getValue('site')['utilisateur_id'] == $_smarty_tpl->getValue('vue')['userId']) {?>
                            <a class="btn btn-sm btn-primary" href="index.php?page=site&action=update&id=<?php echo $_smarty_tpl->getValue('site')['id'];?>
">Modifier</a>
                            <a class="btn btn-sm btn-danger" href="#" onclick="sup(<?php echo $_smarty_tpl->getValue('site')['id'];?>
); return false;">Supprimer</a>
                        <?php }?>
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
