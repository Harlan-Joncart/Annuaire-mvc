<?php
/* Smarty version 5.8.0, created on 2026-04-10 09:40:50
  from 'file:categorie/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d8c5a20c0c67_23858415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c9980740dd5da325d0446ea4ce66187adeb9688' => 
    array (
      0 => 'categorie/list.tpl',
      1 => 1775047666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d8c5a20c0c67_23858415 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\joncart\\Documents\\pas ranger\\Annuaire\\Views\\templates\\categorie';
?><h2><a class="btn btn-primary" href="index.php?page=categorie&action=add">Ajouter</a></h2>
<p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
<p>    
<div>
    <table class="table"><thead><tr><td>Libelle</td><td>Action</td></tr></thead>
        <tbody>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vue')['categories'], 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
    <tr><td><?php echo $_smarty_tpl->getValue('cat')['libelle'];?>
<td>
        <td><a class="btn btn-primary" href="index.php?page=categorie&action=update&id=<?php echo $_smarty_tpl->getValue('cat')['id'];?>
">modification</a>
            | <a class="btn btn-danger" href="#" onclick="sup(<?php echo $_smarty_tpl->getValue('cat')['id'];?>
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
            if(window.confirm("Voulez vous vraiment supprimer l'élément?")){
                window.location.replace("index.php?page=categorie&action=delete&id="+id);
            }
        };
        
    <?php echo '</script'; ?>
>
<?php }
}
