<p>{$vue.description}</p>

<form action="index.php?page=site&action=insert" method="post">
    <input type="url" name="url" placeholder="URL du site" required />

    <input type="text" name="titre" placeholder="Titre" required />

    <textarea name="description" placeholder="Description" required></textarea>

    <input type="number" name="categorie_id" placeholder="ID Catégorie" required />

    <input type="number" name="utilisateur_id" placeholder="ID Utilisateur" required />

    <input type="submit" value="Valider">
</form>