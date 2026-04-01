<h2>
    <a class="btn btn-primary" href="index.php?page=user&action=add">Ajouter</a>
</h2>

<p>{$vue.description}</p>    

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
            {foreach $vue.users as $user}
                <tr>
                    <td>{$user.mail}</td>
                    <td>{$user.params}</td>
                    <td>
                        <a class="btn btn-primary" href="index.php?page=user&action=update&id={$user.id}">Modification</a>
                        | 
                        <a class="btn btn-danger" href="#" onclick="sup({$user.id});">Suppression</a>
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