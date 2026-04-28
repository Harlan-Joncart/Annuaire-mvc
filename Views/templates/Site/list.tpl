<div class="actions-bar">
    <a class="btn btn-primary" href="index.php?page=site&action=add">Ajouter un site</a>
</div>

<p class="description">{$vue.description}</p>    

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
            {foreach $vue.sites as $site}
                <tr>
                    <td><a href="{$site.url}" target="_blank">{$site.url}</a></td>
                    <td><strong>{$site.titre}</strong></td>
                    <td>{$site.description}</td>
                    <td><span class="badge bg-primary">{$site.categorie_nom}</span></td>
                    <td>{$site.utilisateur_mail}</td>
                    <td>
                        <div class="action-links">
                            <a class="btn btn-primary" href="index.php?page=site&action=update&id={$site.id}">Modifier</a>
                            <a class="btn btn-danger" href="#" onclick="sup({$site.id});">Supprimer</a>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

<script>
function sup(id){
    if(confirm("Voulez-vous vraiment supprimer ce site ?")){
        window.location.replace("index.php?page=site&action=delete&id=" + id);
    }
}
</script>
