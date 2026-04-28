# 📘 Annuaire de Sites Web – Les Pages Orange

## 🧾 Description

Ce projet est un annuaire de sites web développé dans le cadre d’un exercice en PHP avec une architecture MVC.

Il permet de :

* gérer des utilisateurs
* gérer des catégories
* ajouter, modifier et supprimer des sites web
* afficher les sites avec leurs catégories et leurs auteurs

---

## 🏗️ Architecture

Le projet suit une architecture **MVC (Model – View – Controller)** :

* **Model** : accès à la base de données (PDO)
* **View** : affichage avec Smarty
* **Controller** : logique applicative

---

## 🗄️ Base de données

Nom : `Annuaire`

### Tables principales :

* **utilisateur**

  * id
  * mail
  * mdp
  * params (JSON)

* **categorie**

  * id
  * libelle

* **site**

  * id
  * url
  * titre
  * description
  * categorie_id
  * utilisateur_id

### Relations :

* 1 utilisateur → plusieurs sites
* 1 catégorie → plusieurs sites

---

## ⚙️ Installation

1. Cloner le projet
2. Importer la base de données avec le script SQL fourni
3. Configurer la connexion dans `Db.php` :

```php
new PDO("mysql:dbname=Annuaire;host=192.168.56.10", "operateur", "motdepasse");
```

4. Lancer le projet sur un serveur local (XAMPP, WAMP, etc.)

---

## 🎨 Charte graphique

Couleurs utilisées :

* Beige : `#fcf5e4`
* Jaune : `#edb217`
* Noir : `#212121`
* Rouge : `#f4143f`

Framework utilisé :

* Bootstrap 5 (personnalisé avec CSS)

---

## 🧪 Fonctionnalités

* ✔️ Ajouter / modifier / supprimer une catégorie
* ✔️ Ajouter / modifier / supprimer un site
* ✔️ Ajouter / modifier / supprimer un utilisateur
* ✔️ Affichage des sites avec jointures SQL
* ✔️ Sécurisation des données (PDO + requêtes préparées)
* ✔️ Hash des mots de passe

---

## 🔐 Sécurité

* Utilisation de **PDO**
* Requêtes préparées
* `password_hash()` pour les mots de passe
* Nettoyage des entrées utilisateur

---

## 📁 Structure du projet

```
/core
/models
/controllers
/views
/css
index.php
```

---

## 🚀 Améliorations possibles

* Ajout d’un système de connexion (login)
* Ajout de pagination
* Ajout de recherche de sites
* Interface utilisateur plus avancée

---
