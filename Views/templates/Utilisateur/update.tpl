<p>{$vue.description}</p>

<form action="index.php?page=user&action=update" method="post">
    <input type="hidden" name="id" value="{$vue.user[0].id}" /> 

    <input type="email" name="mail" value="{$vue.user[0].mail}" required />
    
    <input type="password" name="mdp" placeholder="Nouveau mot de passe" required />
    
    <input type="text" name="params" value="{$vue.user[0].params}" required />

    <input type="submit" value="Valider">
</form>