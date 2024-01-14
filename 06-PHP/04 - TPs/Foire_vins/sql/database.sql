CREATE DATABASE festival.

CREATE TABLE IF NOT EXISTS candidats (
 id_user int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
 lastname_user varchar(50) NOT NULL,
 firstname_user varchar(50) NOT NULL,
 mail_user varchar(150) NOT NULL,
 pass_user varchar(400) NOT NULL,
 departement_user int(10) UNSIGNED NOT NULL,
 age_user int(10) UNSIGNED NOT NULL,
 PRIMARY KEY (id_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `departements` ( 
`id_dep` int UNSIGNED NOT NULL PRIMARY KEY, 
`Name` varchar(50) NOT NULL, 
`dep_actif` int(10) UNSIGNED NOT NULL, 
`dep_taux` decimal(5,2) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Departements';