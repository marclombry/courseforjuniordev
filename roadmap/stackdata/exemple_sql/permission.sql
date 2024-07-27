-- Création d'un nouvel utilisateur
CREATE USER 'nouvel_utilisateur'@'localhost' IDENTIFIED BY 'mot_de_passe';

-- Accorder des permissions à l'utilisateur
GRANT SELECT, INSERT, UPDATE, DELETE ON base_de_donnees.* TO 'nouvel_utilisateur'@'localhost';

-- Révoquer des permissions
REVOKE DELETE ON base_de_donnees.* FROM 'nouvel_utilisateur'@'localhost';

-- Supprimer un utilisateur
DROP USER 'nouvel_utilisateur'@'localhost';
