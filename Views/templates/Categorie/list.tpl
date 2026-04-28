<div class="actions-bar">
    <a class="btn btn-primary" href="index.php?page=categorie&action=add">Ajouter une catégorie</a>
</div>

<p class="description">{$vue.description}</p>    

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach $vue.categories as $cat}
                <tr>
                    <td><strong>{$cat.libelle}</strong></td>
                    <td>
                        <div class="action-links">
                            <a class="btn btn-primary" href="index.php?page=categorie&action=update&id={$cat.id}">Modifier</a>
                            <a class="btn btn-danger" href="#" onclick="sup({$cat.id});">Supprimer</a>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

<script>
function sup(id){
    if(window.confirm("Voulez vous vraiment supprimer l'élément?")){
        window.location.replace("index.php?page=categorie&action=delete&id="+id);
    }
}
</script>
