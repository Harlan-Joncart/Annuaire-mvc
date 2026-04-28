<div class="actions-bar">
    <a class="btn btn-primary" href="index.php?page=user&action=add">Ajouter un utilisateur</a>
</div>

<p class="description">{$vue.description}</p>    

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
            {foreach $vue.users as $user}
                <tr>
                    <td><strong>{$user.mail}</strong></td>
                    <td>{$user.params}</td>
                    <td>
                        <div class="action-links">
                            <a class="btn btn-primary" href="index.php?page=user&action=update&id={$user.id}">Modifier</a>
                            <a class="btn btn-danger" href="#" onclick="sup({$user.id});">Supprimer</a>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

<script>
function sup(id){
    if(confirm("Voulez-vous vraiment supprimer cet utilisateur ?")){
        window.location.replace("index.php?page=user&action=delete&id=" + id);
    }
}
</script>