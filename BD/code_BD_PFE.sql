-- TABLE: Technicien
CREATE TABLE Technicien (
    Matricule_tech VARCHAR(50) PRIMARY KEY,
    Nom_tech VARCHAR(100) NOT NULL,
    Email_tech VARCHAR(100),
    Mot_de_passe_tech VARCHAR(255) NOT NULL
);

-- TABLE: Responsable
CREATE TABLE Responsable (
    Matricule_resp VARCHAR(50) PRIMARY KEY,
    Nom_resp VARCHAR(100) NOT NULL,
    Email_resp VARCHAR(100),
    Mot_de_passe VARCHAR(255) NOT NULL
);

-- TABLE: Notification
CREATE TABLE Notification (
    ID_notification INT PRIMARY KEY AUTO_INCREMENT,
    contenu_notification TEXT,
    Matricule_technicien_notif VARCHAR(50),
    Matricule_responsable_notif VARCHAR(50),
    FOREIGN KEY (Matricule_technicien_notif) REFERENCES Technicien(Matricule_tech),
    FOREIGN KEY (Matricule_responsable_notif) REFERENCES Responsable(Matricule_resp)
);

-- TABLE: Historique_donnees
CREATE TABLE Historique_donnees (
    ID_historique INT PRIMARY KEY AUTO_INCREMENT,
    Matricule_technicien_historique VARCHAR(50),
    Matricule_responsable_historique VARCHAR(50),
    date_historique DATETIME,
    contenu TEXT,
    FOREIGN KEY (Matricule_technicien_historique) REFERENCES Technicien(Matricule_tech),
    FOREIGN KEY (Matricule_responsable_historique) REFERENCES Responsable(Matricule_resp)
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
    Matricule_tech_note VARCHAR(50),
    Matricule_resp_note VARCHAR(50),
    FOREIGN KEY (Matricule_tech_note) REFERENCES Technicien(Matricule_tech),
    FOREIGN KEY (Matricule_resp_note) REFERENCES Responsable(Matricule_resp)
);

-- TABLE: Refonte_brute
CREATE TABLE Refonte_brute (
    ID_refonte_brute INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_tech_refonte VARCHAR(50),
    FOREIGN KEY (Matricule_tech_refonte) REFERENCES Technicien(Matricule_tech)
);

-- TABLE: Chaulage
CREATE TABLE Chaulage (
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
    Matricule_tech_chaulage VARCHAR(50),
    FOREIGN KEY (Matricule_tech_chaulage) REFERENCES Technicien(Matricule_tech)
);

-- TABLE: Premier_carbo
CREATE TABLE Premier_carbo (
    ID_premier_carbo INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_tech_premier_carbo VARCHAR(50),
    FOREIGN KEY (Matricule_tech_premier_carbo) REFERENCES Technicien(Matricule_tech)
);

-- TABLE: Deuxieme_carbo
CREATE TABLE Deuxieme_carbo (
    ID_deuxieme_carbo INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_tech_deuxieme_carbo VARCHAR(50),
    FOREIGN KEY (Matricule_tech_deuxieme_carbo) REFERENCES Technicien(Matricule_tech)
);

-- TABLE: Evaporation
CREATE TABLE Evaporation (
    ID_evaporation INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_tech_evaporation VARCHAR(50),
    FOREIGN KEY (Matricule_tech_evaporation) REFERENCES Technicien(Matricule_tech)
);

-- TABLE: Refonte_decoloree
CREATE TABLE Refonte_decoloree (
    ID_refonte_decoloree INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_tech_decoloree VARCHAR(50),
    FOREIGN KEY (Matricule_tech_decoloree) REFERENCES Technicien(Matricule_tech)
);

-- TABLE: Refonte_epuree
CREATE TABLE Refonte_epuree (
    ID_refonte_epure INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_tech_epuree VARCHAR(50),
    FOREIGN KEY (Matricule_tech_epuree) REFERENCES Technicien(Matricule_tech)
);

-- TABLE: Cristallisation
CREATE TABLE Cristallisation (
    ID_cristallisation INT PRIMARY KEY AUTO_INCREMENT,
    produit_utilise VARCHAR(100),
    PH FLOAT,
    bx FLOAT,
    temperature FLOAT,
    alcal FLOAT,
    couleur VARCHAR(50),
    DateHeure DATETIME,
    Matricule_tech_cristallisation VARCHAR(50),
    FOREIGN KEY (Matricule_tech_cristallisation) REFERENCES Technicien(Matricule_tech)
);
