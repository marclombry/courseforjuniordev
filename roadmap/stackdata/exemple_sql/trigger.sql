DELIMITER //

CREATE TRIGGER before_stock_update
BEFORE UPDATE ON livres
FOR EACH ROW
BEGIN
    -- Vérifie si le stock est réduit
    IF NEW.stock < OLD.stock THEN
        -- Insère une nouvelle entrée dans l'historique des ventes
        INSERT INTO historique_ventes (livre_id, titre, prix_vente)
        VALUES (OLD.id, OLD.titre, OLD.prix);
    END IF;
END //

DELIMITER ;
