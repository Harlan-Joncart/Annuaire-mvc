<div class="card">
    <div class="card-header">
        <h2>Présentation du MVC</h2>
    </div>
    <div class="card-body">
        <p class="description">{$vue.description}</p>
        
        <h3>Structure du projet</h3>
        <p>Liste des dossiers de notre MVC :</p>
        <ul class="folder-list">
            {foreach $vue.mvc as $m}
                <li><strong>{$m}</strong></li>
            {/foreach}
        </ul>
    </div>
</div>
