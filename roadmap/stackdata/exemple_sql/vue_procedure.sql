-- Création d'une vue
CREATE VIEW vue_utilisateurs_commandes AS
SELECT u.nom, c.produit, c.montant
FROM utilisateurs u
JOIN commandes c ON u.id = c.utilisateur_id;

-- Utilisation de la vue
SELECT * FROM vue_utilisateurs_commandes;

-- Création d'une procédure stockée
DELIMITER //
CREATE PROCEDURE ajouter_utilisateur(IN nom VARCHAR(100), IN email VARCHAR(100), IN date_naissance DATE, IN score FLOAT)
BEGIN
    INSERT INTO utilisateurs (nom, email, date_naissance, score) VALUES (nom, email, date_naissance, score);
END //
DELIMITER ;

-- Appel de la procédure stockée
CALL ajouter_utilisateur('Eve Laurent', 'eve@example.com', '1993-11-10', 88.0);

-- Création d'un déclencheur (trigger)
DELIMITER //
CREATE TRIGGER before_utilisateur_insert
BEFORE INSERT ON utilisateurs
FOR EACH ROW
BEGIN
    SET NEW.date_naissance = IF(NEW.date_naissance IS NULL, CURDATE(), NEW.date_naissance);
END //
DELIMITER ;
