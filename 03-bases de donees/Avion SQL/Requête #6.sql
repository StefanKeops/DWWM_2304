/*CREATE DATABASE avion

CREATE TABLE avion(
av INT AUTO_INCREMENT PRIMARY KEY,
avmarq VARCHAR(10) NOT NULL,
avtype VARCHAR(10) NOT NULL,
cap INT NOT NULL,
lo VARCHAR (10) NOT NULL
);

CREATE TABLE pilote(
pil INT AUTO_INCREMENT PRIMARY KEY,
pilnom VARCHAR(10) NOT NULL,
adr VARCHAR(10) NOT NULL
);

CREATE TABLE vols(
vol VARCHAR(5) PRIMARY KEY,
av INT NOT NULL,
pil INT NOT NULL,
vd VARCHAR(10) NOT NULL,
va VARCHAR(10) NOT NULL,
hd TIME NOT NULL,
ha TIME NOT NULL
)

ALTER TABLE vols
ADD CONSTRAINT fk_av FOREIGN KEY (av) REFERENCES	avion(av),
ADD CONSTRAINT fk_pil FOREIGN KEY (pil) REFERENCES pilote(pil)
;

ALTER TABLE avion 

AUTO_INCREMENT=100

INSERT INTO avion (avmarq, avtype, cap, lo)
VALUES ('AIRBUS', 'A320', 300, 'Nice'),
       ('BOEING', 'B707', 250, 'Paris'),
       ('AIRBUS', 'A320', 300, 'Toulouse'),
       ('CARAVELLE', 'Caravelle', 200, 'Toulouse'),
       ('BOEING', 'B747', 400, 'Paris'),
       ('AIRBUS', 'A320', 300, 'Grenoble'),
       ('ATR', 'ATR42', 50, 'Paris'),
       ('BOEING', 'B727', 300, 'Lyon'),
       ('BOEING', 'B727', 300, 'Nantes'),
       ('AIRBUS', 'A340', 350, 'Bastia')


INSERT INTO pilote (pilnom, adr)
VALUES ('SERGE', 'Nice'),
       ('JEAN', 'Paris'),
       ('CLAUDE', 'Grenoble'),
       ('ROBERT', 'Nates'),
       ('SIMON', 'Paris'),
       ('LUCIEN', 'Toulouse'),
       ('Bertrand', 'Lyon'),
		 ('Herve', 'Bastia'),
		 ('Luc', 'Paris')


INSERT INTO vols
VALUES ('IT100', 100, 1, 'NICE', 'PARIS', '07:00', '09:00'),
       ('IT101', 100, 2, 'PARIS', 'TOULOUSE', '11:00', '12:00'),
       ('IT102', 101, 1, 'PARIS', 'NICE', '12:00', '14:00'),
       ('IT103', 105, 3, 'GRENOBLE', 'TOULOUSE', '09:00', '11:00'),
       ('IT104', 105, 3, 'TOULOUSE', 'GRENOBLE', '17:00', '19:00'),
       ('IT105', 107, 7, 'LYON', 'PARIS', '06:00', '07:00'),
       ('IT106', 109, 8, 'BASTIA', 'PARIS', '10:00', '13:00'),
       ('IT107', 106, 9, 'PARIS', 'BRIVE', '07:00', '08:00'),
       ('IT108', 106, 9, 'BRIVE', 'PARIS', '19:00', '20:00'),
       ('IT109', 107, 7, 'PARIS', 'LYON', '18:00', '19:00'),
       ('IT110', 102, 2, 'TOULOUSE', 'PARIS', '15:00', '16:00'),
       ('IT111', 101, 4, 'NICE', 'NANTES', '17:00', '19:00'),
       ('IT112', 103, 5, 'PARIS', 'NICE', '11:00', '13:00'),
       ('IT113', 104, 6, 'NICE', 'PARIS', '13:00', '15:00')
; 

CREATE VIEW avion1 AS
SELECT *
FROM vols
WHERE vd = 'PARIS'
AND hd >= '12:00'
AND hd <= '14:00';

CREATE VIEW avion2 AS
SELECT *
FROM pilote
WHERE pilnom LIKE 'S%'

CREATE VIEW avion3 AS
SELECT lo AS ville,
COUNT(*) AS nombre_avions,
MIN(cap) AS capacite_minimale,
MAX(cap) AS capacite_maximale
FROM avion
GROUP BY lo;


CREATE VIEW avion4 AS
SELECT lo AS ville,
		 avtype AS type_avion,
AVG(cap) AS capacite_moyenne
FROM avion
GROUP BY lo, avtype
;

CREATE VIEW avion5 AS
SELECT lo as ville,
AVG(cap) AS capacite_moyenne
FROM avion
GROUP BY lo
HAVING COUNT(*) > 1;

CREATE VIEW avion6 AS
SELECT DISTINCT p.pilnom 
FROM pilote p
JOIN avion a ON p.adr = a.lo 
WHERE avmarq = 'AIRBUS'

CREATE VIEW avion7 AS
SELECT DISTINCT p.pilnom, p.adr, a.avmarq
FROM pilote p
JOIN vols v ON p.pil = v.pil  
JOIN avion a ON v.av = a.av OR p.adr = a.lo
WHERE a.avmarq = 'AIRBUS'  

CREATE VIEW avion9 AS
SELECT DISTINCT p.pilnom, p.adr, a.avmarq
FROM pilote p
JOIN vols v ON p.pil = v.pil
JOIN avion a ON v.av = a.av AND not a.lo = p.adr
WHERE a.avmarq = 'AIRBUS'*/

CREATE VIEW avion10 AS
SELECT DISTINCT v.vol, v.vd, v.va
FROM vols v
JOIN vols vo ON v.vd = vo.vd AND v.va = vo.va
JOIN pilote p
WHERE p.pilnom = 'Serge' AND v.pil = p.pil