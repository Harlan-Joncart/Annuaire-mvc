<h2>
    <a class="btn btn-primary" href="index.php?page=site&action=add">Ajouter</a>
</h2>

<p>{$vue.description}</p>    

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
            {foreach $vue.sites as $site}
                <tr>
                    <td><a href="{$site.url}" target="_blank">{$site.url}</a></td>
                    <td>{$site.titre}</td>
                    <td>{$site.description}</td>
                    <td>{$site.categorie_id}</td>
                    <td>{$site.utilisateur_id}</td>
                    <td>
                        <a class="btn btn-primary" href="index.php?page=site&action=update&id={$site.id}">Modification</a>
                        | 
                        <a class="btn btn-danger" href="#" onclick="sup({$site.id});">Suppression</a>
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