CREATE TABLE IF NOT EXISTS restaurants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom TEXT,
    adresse TEXT,
    prix DECIMAL(10, 2),
    Commentaire TEXT,
    Note DOUBLE,
    visite DATE
)