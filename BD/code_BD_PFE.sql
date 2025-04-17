
-- TABLE: Notification
CREATE TABLE Notification (
    ID_notification INT PRIMARY KEY AUTO_INCREMENT,
    contenu_notification TEXT,
    Matricule_technicien VARCHAR(50),
    Matricule_responsable VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user),
    FOREIGN KEY (Matricule_responsable) REFERENCES Responsable(Matricule_user)
);

-- TABLE: Historique_donnees
CREATE TABLE Historique_donnees (
    ID_historique INT PRIMARY KEY AUTO_INCREMENT,
    Matricule_technicien VARCHAR(50),
    Matricule_responsable VARCHAR(50),
    date_historique DATETIME,
    contenu TEXT,
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user),
    FOREIGN KEY (Matricule_responsable) REFERENCES Responsable(Matricule_user)
);

-- TABLE: Produit
CREATE TABLE Produit (
    ID_produit INT PRIMARY KEY AUTO_INCREMENT,
    Nom_produit VARCHAR(100),
    information_produit TEXT,
    quantite_produit INT
);

-- TABLE: Note
CREATE TABLE Note (
    ID_note INT PRIMARY KEY AUTO_INCREMENT,
    contenu_note TEXT,
    Matricule_technicien VARCHAR(50),
    Matricule_responsable VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user),
    FOREIGN KEY (Matricule_responsable) REFERENCES Responsable(Matricule_user)
);

-- TABLE: Technicien
CREATE TABLE Technicien (
    Matricule_user VARCHAR(50) PRIMARY KEY
);

-- TABLE: Responsable
CREATE TABLE Responsable (
    Matricule_user VARCHAR(50) PRIMARY KEY
);

-- TABLES DE PROCESSUS (chacune liée à un produit et à un technicien)

CREATE TABLE Refonte_brute (
    ID_refonte_brute INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_technicien VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user)
);

CREATE TABLE chaulage (
    ID_chaulage INT PRIMARY KEY AUTO_INCREMENT,
    lait_de_chaux VARCHAR(100),
    CO2 VARCHAR(100),
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_technicien VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user)
);

CREATE TABLE premier_carbo (
    ID_premier_carbo INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_technicien VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user)
);

CREATE TABLE deuxieme_carbo (
    ID_deuxieme_carbo INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_technicien VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user)
);

CREATE TABLE evaporation (
    ID_evaporation INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_technicien VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user)
);

CREATE TABLE refonte_decoloree (
    ID_refonte_brute INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_technicien VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user)
);

CREATE TABLE refonte_epuree (
    ID_refonte_epure INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_technicien VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user)
);

CREATE TABLE Cristallisation (
    ID_cristallisation INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_technicien VARCHAR(50),
    FOREIGN KEY (Matricule_technicien) REFERENCES Technicien(Matricule_user)
);
