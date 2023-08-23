USE db_architecte;

INSERT INTO type_travaux 
(type_travaux_id, type_travaux_libelle) 
VALUES
(1, 'Construction'),
(2, 'Aménagement'),
(3, 'Rénovation'),
(4, 'Réhabilitation'),
(5, 'Restauration');


INSERT INTO fonctions 
(fonction_id, fonction_nom)
VALUES
(1,'Architecte'),
(2,'Dessinateur'),
(3,'Administratif');

INSERT INTO type_clients(type_client_id,type_client_libelle)
VALUES 
(1,'Particulier'),
(2,'institution publique'),
(3,'institution privée'),
(4,'promoteur'),
(5,'autre');

INSERT INTO type_projets 
(type_projet_id, type_projet_libelle)
VALUES
(1, "Maison"),
(2, "Appartement"),
(3, "Chalet"),
(4, "Immeuble"), 
(5, "Hôpital"),
(6, "Ecole"),
(7, "locaux commerciaux");

INSERT INTO adresses
(adresse_code_postal, adresse_ville, adresse_num_voie, adresse_voie)
VALUES 
('06000', 'Nice', 27, 'Rue Dabray'),
('06380', 'Sospel', 16, 'Rue de la Republique'),
('68200', 'Mulhouse', 7, 'Boulevard des Nations'),
('13500', 'Martigues', 12, 'Av. Georges Braque'),
('75017', 'Paris', 27, 'Rue des Renaudes');

INSERT INTO clients(client_nom, client_telephone, type_client_id, adresse_id)
VALUES
    ('Ville de Nice', '0450047785', 2, 1),
    ('BOSS', '0615486223', 3, 2),
    ('Lili', '0685941335', 1, 3),
    ('ESCALA', '0102529164', 4, 4),
    ('Mystère', '0000000000', 5, 5);

INSERT INTO employes(emp_matricule, emp_nom, emp_prenom, emp_date_embauche, fonction_id) VALUES 
(1, "Roussotte", "Kévin", "2023-08-02", 1),
(2, "Schieber", "Florian", "2023-08-03", 2),
(3, "Robson", "Natana", "2023-08-04", 3),
(4, "Golay", "Jerry", "2023-08-07", 1),
(5, "Neymar", "Jean", "2023-08-07", 2),
(6, "Desplantes", "Guillaume", "2023-08-07", 2),
(7, "Desplanques", "Guy", "2010-08-07", 3);

INSERT INTO projets 
(   projet_ref, projet_date_depot, projet_date_fin_prevue, projet_date_fin_effective,projet_superficie_totale, projet_superficie_batie,
    projet_prix, client_ref, emp_matricule, adresse_id, type_travaux_id, type_projet_id )
VALUES 
('1', '2022-11-02', '2022-08-12', '2022-09-27', '500', '250', '9999.99', '5', '1', '1', '1', '1'),
('2', '2022-12-15', '2023-01-14', '2023-01-14', '700', '690', '100000', '4', '1', '2', '5', '3'),
('3', '2023-01-02', '2023-10-01', NULL,         '500', '300', '5412', '3', '4', '3', '4', '4'),
('4', '2023-02-10', '2023-10-02', NULL,         '200', '190', '4000', '2', '1', '4', '3', '2'),
('5', '2023-04-23', '2023-12-22', NULL,         '90', '50', '2500', '1', '4', '5', '3', '2');

INSERT INTO participer (emp_matricule,projet_ref)
VALUES 
(2,1),
(3,1),
(7,1),
(6,2),
(5,2),
(5,3),
(6,4),
(7,4),
(2,4),
(3,4);

SELECT p.projet_date_depot, p.projet_date_fin_prevue, p.projet_superficie_totale, p.projet_superficie_batie, p.projet_prix, c.client_nom, e.emp_nom AS nom_architecte
FROM projets p
JOIN clients c ON p.client_ref = c.client_ref
JOIN employes e ON p.emp_matricule = e.emp_matricule

SELECT p.projet_date_depot, p.projet_date_fin_prevue, p.projet_superficie_totale, p.projet_prix,
COUNT(participer.emp_matricule) - 2 AS nombre_intervenants
FROM projets p
JOIN participer ON p.projet_ref = p.projet_ref
GROUP BY p.projet_ref;

-- procedures --

USE db_architecte;
DELIMITER //
CREATE PROCEDURE recherche_emp_archi()
BEGIN
SELECT emp_matricule, emp_nom, emp_prenom
FROM employes 
JOIN fonctions ON fonctions.fonction_id = employes.fonction_id 
WHERE fonction_nom = 'architecte';
END //
DELIMITER ;

CALL recherche_emp_archi();

DELIMITER //
CREATE PROCEDURE recherche_empl_par_fonction(IN p_fonction_nom VARCHAR(50))
BEGIN
SELECT employes.emp_nom, employes.emp_prenom, employes.emp_date_embauche 
FROM employes
JOIN fonctions ON fonctions.fonction_id = employes.fonction_id
WHERE fonctions.fonction_nom = p_fonction_nom;
END //
DELIMITER ;

SET @fonction_nom := 'Dessinateur';
CALL recherche_empl_par_fonction( @fonction_nom);

DELIMITER //
CREATE PROCEDURE nb_effectif_par_fonction(IN p_nom_fonction VARCHAR(50), OUT p_nb_effectif INT)
BEGIN
SELECT COUNT(employes.emp_matricule) INTO p_nb_effectif
FROM employes
JOIN fonctions ON employes.fonction_id = fonctions.fonction_id
WHERE fonctions.fonction_nom = p_nom_fonction;
END //
DELIMITER ;

SET @nom_fonction = 'Dessinateur';
CALL nb_effectif_par_fonction(@nom_fonction, @nb_effectif) ;
SELECT @nb_effectif;

DELIMITER //
CREATE PROCEDURE list_projects_for_employee_par_nom(IN employee_nom VARCHAR(50))
BEGIN
SELECT projets.projet_ref, projets.projet_date_fin_prevue, projets.projet_prix
FROM projets
JOIN participer ON projets.projet_ref = participer.projet_ref
JOIN employes ON participer.emp_matricule = employes.emp_matricule
WHERE employes.emp_nom = employee_nom;
END //
DELIMITER ;

CALL list_projects_for_employee_par_nom('Robson');

DELIMITER //
CREATE PROCEDURE calcul_anciennete_par_nom(IN employee_nom VARCHAR(50), OUT p_annee_anciennete INT, OUT p_emp_date_embauche DATE)
BEGIN
SELECT employes.emp_date_embauche, TIMESTAMPDIFF(YEAR, employes.emp_date_embauche, CURDATE())
INTO p_emp_date_embauche, p_annee_anciennete
FROM employes
WHERE emp_nom = employee_nom
ORDER BY employes.emp_date_embauche DESC;
END //
DELIMITER ;

CALL calcul_anciennete_par_nom('Desplanques', @annee_anciennete, @emp_date_embauche); 
SELECT @annee_anciennete, @emp_date_embauche;

DELIMITER //
CREATE PROCEDURE calcul_anciennete()
BEGIN
SELECT employes.emp_nom, employes.emp_date_embauche, TIMESTAMPDIFF(SECOND, employes.emp_date_embauche, CURDATE()) AS anciennete
FROM employes
ORDER BY employes.emp_date_embauche DESC;
END //
DELIMITER ;

CALL calcul_anciennete();

DELIMITER //
CREATE PROCEDURE calcul_cumul_prix_projets (IN projet_id INT, INOUT projet_prix DECIMAL(10,2))
BEGIN
SELECT projets.projet_prix + projet_prix AS cumul INTO projet_prix
FROM projets
WHERE projets.projet_ref = projet_id;
END //
DELIMITER ;

SET @cumul = 0;
CALL calcul_cumul_prix_projets(3, @cumul);
SELECT @cumul AS total