-- Création de la base
DROP DATABASE IF EXISTS Annuaire;
CREATE DATABASE IF NOT EXISTS Annuaire;
USE Annuaire;

-- =========================
-- TABLE UTILISATEUR
-- =========================
CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL,
    params JSON
);

-- =========================
-- TABLE CATEGORIE
-- =========================
CREATE TABLE categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL
);

-- =========================
-- TABLE SITE
-- =========================
CREATE TABLE site (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url VARCHAR(255) NOT NULL,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    categorie_id INT NOT NULL,
    utilisateur_id INT NOT NULL,

    FOREIGN KEY (categorie_id) REFERENCES categorie(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

INSERT INTO utilisateur (mail, mdp, params) VALUES
('alice@mail.com', '$2y$10$examplehash1', '{"theme":"dark","lang":"fr"}'),
('bob@mail.com', '$2y$10$examplehash2', '{"theme":"light","lang":"en"}'),
('charlie@mail.com', '$2y$10$examplehash3', '{"theme":"dark","lang":"fr"}');

INSERT INTO categorie (libelle) VALUES
('Technologie'),
('Actualités'),
('Sport'),
('Éducation'),
('Divertissement');

INSERT INTO site (url, titre, description, categorie_id, utilisateur_id) VALUES
('https://openai.com', 'OpenAI', 'IA et recherche', 1, 1),
('https://lemonde.fr', 'Le Monde', 'Journal français', 2, 1),
('https://espn.com', 'ESPN', 'Infos sportives', 3, 2),
('https://coursera.org', 'Coursera', 'Cours en ligne', 4, 3),
('https://netflix.com', 'Netflix', 'Streaming films et séries', 5, 2);

select * from utilisateur;