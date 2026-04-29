<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:37:39
  from 'file:categorie/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1fb932df0a5_80047221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd5c63b69b8c19b9655fa76b98996b5b780c789' => 
    array (
      0 => 'categorie/list.tpl',
      1 => 1777466047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1fb932df0a5_80047221 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire-mvc\\Views\\templates\\categorie';
?><div class="actions-bar">
    <a class="btn btn-primary" href="index.php?page=categorie&action=add">Ajouter une catégorie</a>
</div>

<p class="description"><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>    

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vue')['categories'], 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><strong><?php echo $_smarty_tpl->getValue('cat')['libelle'];?>
</strong></td>
                    <td>
                        <div class="action-links">
                            <a class="btn btn-primary" href="index.php?page=categorie&action=update&id=<?php echo $_smarty_tpl->getValue('cat')['id'];?>
">Modifier</a>
                            <a class="btn btn-danger" href="#" onclick="sup(<?php echo $_smarty_tpl->getValue('cat')['id'];?>
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
    if(window.confirm("Voulez vous vraiment supprimer l'élément?")){
        window.location.replace("index.php?page=categorie&action=delete&id="+id);
    }
}
<?php echo '</script'; ?>
>
<?php }
}
