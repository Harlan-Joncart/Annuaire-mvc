<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:37:40
  from 'file:utilisateur/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1fb94073053_85628927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf7664e786dfa458485f342e0740bc2f3d927c83' => 
    array (
      0 => 'utilisateur/list.tpl',
      1 => 1777466047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1fb94073053_85628927 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire-mvc\\Views\\templates\\utilisateur';
?><div class="actions-bar">
    <a class="btn btn-primary" href="index.php?page=user&action=add">Ajouter un utilisateur</a>
</div>

<p class="description"><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>    

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Mail</th>
                <th>Paramètres</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vue')['users'], 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><strong><?php echo $_smarty_tpl->getValue('user')['mail'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->getValue('user')['params'];?>
</td>
                    <td>
                        <div class="action-links">
                            <a class="btn btn-primary" href="index.php?page=user&action=update&id=<?php echo $_smarty_tpl->getValue('user')['id'];?>
">Modifier</a>
                            <a class="btn btn-danger" href="#" onclick="sup(<?php echo $_smarty_tpl->getValue('user')['id'];?>
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
    if(confirm("Voulez-vous vraiment supprimer cet utilisateur ?")){
        window.location.replace("index.php?page=user&action=delete&id=" + id);
    }
}
<?php echo '</script'; ?>
><?php }
}
