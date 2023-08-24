-- create database

-- CREATE DATABASE bonus

-- create table

-- CREATE TABLE representant(
-- 	num_rep INT AUTO_INCREMENT,
-- 	nom_rep VARCHAR(50) NOT NULL,
-- 	ad_rep VARCHAR(100) NOT NULL,
-- 	cp_rep INT NOT NULL,
-- 	vil_rep VARCHAR(50) NOT NULL,
-- 	age_rep INT NOT NULL,
-- 	PRIMARY KEY (num_rep)
-- 	);

-- CREATE TABLE departament(
-- 	code_dep INT,
-- 	nom_dep VARCHAR(50) NOT NULL,
-- 	chef_secteur VARCHAR(50) NOT NULL,
-- 	PRIMARY KEY (code_dep)
-- 	);
	
-- CREATE TABLE categorie_tarifaire(
-- 	num_cat INT AUTO_INCREMENT,
-- 	nom_cat VARCHAR(50) NOT NULL,
-- 	remise VARCHAR(5) NOT NULL,
-- 	PRIMARY KEY (num_cat),
-- 	UNIQUE(nom_cat)
-- 	);

-- CREATE TABLE clients(
-- 	code_clt INT AUTO_INCREMENT,
-- 	nom_clt VARCHAR(50) NOT NULL,
-- 	num_rep INT NOT NULL,
-- 	num_cat INT NOT NULL,
-- 	PRIMARY KEY (code_clt),
-- 	FOREIGN KEY (num_rep) REFERENCES representant(num_rep),
-- 	FOREIGN KEY (num_cat) REFERENCES categorie_tarifaire(num_cat)
-- 	);

-- CREATE TABLE couvrir(
-- 	num_rep INT,
-- 	code_dep INT,
-- 	PRIMARY KEY (num_rep, code_dep),
-- 	FOREIGN KEY (num_rep) REFERENCES representant(num_rep),
-- 	FOREIGN KEY (code_dep) REFERENCES departament(code_dep)
-- 	);

-- insert data
	
--	INSERT INTO representant(nom_rep, ad_rep, cp_rep, vil_rep, age_rep)
--	VALUES ('DELMOTTE', '18 rue Aistide Briand', 75012, 'PARIS', 26),
--			 ('HINAUD', '25 rue Martel', 94120, 'FONTENAY SOUS BOIS', 31),
--			 ('LAPIERRE', '89 rue Gaston berger', 95100, 'ARGENTEUIL', 52),
--			 ('LATOUR', '7 rue du Four', 91700, 'FLEURY MÈROGIS', 44),
--			 ('LEMOINE', '5 rue Auboïs', 91700, 'FLEURY MÈROGIS', 28),
--			 ('LEMOINE', '12 route des Fiacres ', 93140, 'BONDY', 34);

-- INSERT INTO departament
-- VALUES (75, 'Paris', 'PONS'),
--        (91, 'Essonne', 'BERTRAND'),
--        (92, 'Hauts de Seine ', 'FISCHER'),
--        (93, 'Seine Saint Denis', 'FISCHER'),
--        (94, 'Val de Marne', 'BERTRAND'),
--        (95, 'Val d_Oise', 'BERTAND');

-- INSERT INTO categorie_tarifaire(nom_cat, remise)
-- VALUES ('ENTREPRISES', '10%'),
-- 		 ('COLLECTIVITES', '5%'),
-- 		 ('PARTICULIERS', '0%');

-- INSERT INTO couvrir
-- VALUES (1, 75),
-- 		 (1, 94),
-- 		 (2, 93),
-- 		 (2, 94),
-- 		 (3, 91),
-- 		 (3, 75),
-- 		 (4, 95),
-- 		 (5, 93),
-- 		 (5, 91),
-- 		 (6, 92),
-- 		 (6, 95);

-- INSERT INTO clients(nom_clt, num_rep, num_cat)
-- VALUES ('BOCCARD', 1, 1),
-- 		 ('RALDI', 2, 1),
-- 		 ('PIERROL', 2, 3),
-- 		 ('ENGELI', 2, 3),
-- 		 ('ATR', 4, 2),
-- 		 ('PARTOLI', 4, 3);

-- reauets
-- 1) Afficher la liste des clients appartenant à la catégorie tarifaire n°1, classée par ordre alphabétique

-- CREATE VIEW e1 AS
-- SELECT *
-- FROM clients
-- WHERE num_cat = "1"
-- ORDER BY nom_clt ASC;


-- 2) Afficher la liste des clients (code, nom de client) rattachés au représentant HINAUD

-- CREATE VIEW e2 AS
-- SELECT clients.code_clt, clients.nom_clt
-- FROM clients
-- JOIN representant ON clients.num_rep = representant.num_rep
-- WHERE representant.nom_rep = 'Hinaud'

-- 3) Afficher la liste des clients bénéficiant d'une remise de 10%

-- CREATE VIEW e3 AS
-- SELECT clients.code_clt, clients.nom_clt
-- FROM clients
-- JOIN categorie_tarifaire ON clients.num_cat = categorie_tarifaire.num_cat
-- WHERE categorie_tarifaire.remise = '10%'

-- 4) Afficher la liste des représentants (Numéro et nom) dépendant du chef de secteur PONS

CREATE VIEW e4 AS
SELECT representant.num_rep, representant.nom_rep
FROM representant
join

-- 5) Afficher la liste des départements (code, nom, chef de secteur)



-- 6) Afficher la liste des chefs de secteur 
