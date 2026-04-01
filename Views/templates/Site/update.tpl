<p>{$vue.description}</p>

<form action="index.php?page=site&action=update" method="post">
    <input type="hidden" name="id" value="{$vue.site[0].id}" />

    <input type="url" name="url" value="{$vue.site[0].url}" required />

    <input type="text" name="titre" value="{$vue.site[0].titre}" required />

    <textarea name="description" required>{$vue.site[0].description}</textarea>

    <input type="number" name="categorie_id" value="{$vue.site[0].categorie_id}" required />

    <input type="number" name="utilisateur_id" value="{$vue.site[0].utilisateur_id}" required />

    <input type="submit" value="Valider">
</form>