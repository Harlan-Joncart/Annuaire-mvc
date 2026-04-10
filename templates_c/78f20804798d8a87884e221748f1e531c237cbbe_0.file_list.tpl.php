<?php
/* Smarty version 5.8.0, created on 2026-04-10 11:54:56
  from 'file:utilisateur/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d8e51040c624_12083407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78f20804798d8a87884e221748f1e531c237cbbe' => 
    array (
      0 => 'utilisateur/list.tpl',
      1 => 1775814600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d8e51040c624_12083407 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire\\Views\\templates\\utilisateur';
?><h2>
    <a class="btn btn-primary" href="index.php?page=user&action=add">Ajouter</a>
</h2>

<p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>    

<div>
    <table class="table">
        <thead>
            <tr>
                <td>Mail</td>
                <td>Paramètres</td>
                <td>Action</td>
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
                    <td><?php echo $_smarty_tpl->getValue('user')['mail'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('user')['params'];?>
</td>
                    <td>
                        <a class="btn btn-primary" href="index.php?page=user&action=update&id=<?php echo $_smarty_tpl->getValue('user')['id'];?>
">Modification</a>
                        | 
                        <a class="btn btn-danger" href="#" onclick="sup(<?php echo $_smarty_tpl->getValue('user')['id'];?>
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
    if(confirm("Voulez-vous vraiment supprimer cet utilisateur ?")){
        window.location.replace("index.php?page=user&action=delete&id=" + id);
    }
}
<?php echo '</script'; ?>
><?php }
}
