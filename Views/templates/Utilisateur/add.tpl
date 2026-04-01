<p>{$vue.description}</p>

<form action="index.php?page=user&action=insert" method="post">
    <input type="email" name="mail" placeholder="Votre mail" required /> 
    <input type="password" name="mdp" placeholder="Mot de passe" required />
    <input type="text" name="params" placeholder="Paramètres" required />
    <input type="submit" value="Valider">
</form>