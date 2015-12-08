CREATE DATABASE oldbutgold_boissi_h;

USE oldbutgold_boissi_h;

CREATE TABLE Role
(
    ID int NOT NULL AUTO_INCREMENT,
    Libelle varchar(255) NOT NULL,
    Description varchar(255) NOT NULL,
    Date_creation DATETIME NOT NULL,
    Date_modification DATETIME NOT NULL,
    PRIMARY KEY (ID)
);

CREATE TABLE Utilisateurs
(
    ID int NOT NULL AUTO_INCREMENT,
    Nom varchar(255) NOT NULL,
    Prenom varchar(255) NOT NULL,
    Date_de_naissance DATE NOT NULL,
    Ville varchar(255) NOT NULL,
    Adresse varchar(255) NOT NULL,
    Code_postale int NOT NULL,
    Pays varchar(255)NOT NULL,
    Sexe varchar(255) NOT NULL,
    Role int NOT NULL REFERENCES Role(ID),
    Date_creation DATETIME NOT NULL,
    Telephone varchar(255) NOT NULL,
    Mail varchar(255) NOT NULL,
    Mot_de_passe varchar(255) NOT NULL,
    Date_modification DATETIME NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (Role) REFERENCES Role(ID)
);

CREATE TABLE Produits
(
    ID int NOT NULL AUTO_INCREMENT,
    Libelle varchar(255) NOT NULL,
    Description varchar(255) NOT NULL,
    Prix_achat float NOT NULL,
    Prix_vente float NOT NULL,
    Nombres_produit int NOT NULL,
    Image varchar(255) NOT NULL,
    Date_creation DATETIME NOT NULL,
    Date_modification DATETIME NOT NULL,
    PRIMARY KEY(ID)
);

CREATE TABLE Categories
(
    ID int NOT NULL AUTO_INCREMENT,
    Libelle varchar(255) NOT NULL,
    Description varchar(255) NOT NULL,
    Date_creation DATETIME NOT NULL,
    Date_modification DATETIME NOT NULL,
    PRIMARY KEY(ID)
);

CREATE TABLE Categorie_produit
(
    ID_categorie int NOT NULL,
    ID_produit int NOT NULL,
    FOREIGN KEY(ID_categorie) REFERENCES Categories(ID),
    FOREIGN KEY(ID_produit) REFERENCES Produits(ID)
);

CREATE TABLE Produit_Utilisateur
(
    ID_produit int NOT NULL,
    ID_utilisateur int NOT NULL,
    FOREIGN KEY(ID_produit) REFERENCES Produits(ID),
    FOREIGN KEY(ID_utilisateur) REFERENCES Utilisateurs(ID)
);

CREATE TABLE Type_jeu_produit
(
    ID_categorie int NOT NULL,
    ID_jeu int NOT NULL,
    FOREIGN KEY(ID_categorie) REFERENCES Categories(ID),
    FOREIGN KEY(ID_jeu) REFERENCES Produits(ID)
);

CREATE TABLE Commentaires
(
    ID int NOT NULL,
    Pseudo varchar(255) NOT NULL,
    Com varchar(255) NOT NULL,
    Date_post DATETIME NOT NULL,
    ID_produit int NOT NULL 
);
 
INSERT INTO Role (Libelle, Description, Date_creation, Date_modification)
VALUES ('Président','Les fondateurs du site','2015-11-17 12:30:45','2015-11-17 12:30:45');
 
INSERT INTO Role (Libelle, Description, Date_creation, Date_modification)
VALUES ('Employé','Les employés du site','2015-11-17 12:30:45','2015-11-17 12:30:45');
 
INSERT INTO Role (Libelle, Description, Date_creation, Date_modification)
VALUES ('Client','Les clients du site','2015-11-17 12:30:45','2015-11-17 12:30:45');

INSERT INTO Utilisateurs (Nom, Prenom, Date_de_naissance, Ville, Adresse, Code_postale, Pays, Sexe, Role, Date_creation, Telephone, Mail, Mot_de_passe, Date_modification)
VALUES ('Boissière','Hugo','1997-12-24','Ivry','Rue Maurice Grandcoing', 94200, 'France', 'Homme', 1, '2015-11-17 12:30:45', '0612345789', 'boissi_h@etna-alternance.net', 'adminpass', '2015-11-19 13:37:02');
 
INSERT INTO Utilisateurs (Nom, Prenom, Date_de_naissance, Ville, Adresse, Code_postale, Pays, Sexe, Role, Date_creation, Telephone, Mail, Mot_de_passe, Date_modification)
VALUES ('Goupy','Marvin','1996-02-13','Paris','Rue de la République', 75100, 'France', 'Homme', 1, '2015-11-17 12:31:42', '0698754321', 'goupy_m@etna-alternance.net', 'admoinpass', '2015-11-19 13:37:02'); 

INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Megaman 2', 'Le jeu vidéo Megaman 2', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://2.bp.blogspot.com/-m6nzKlbRoD4/UNf94tmEbxI/AAAAAAAACwI/dStEOZ_aip8/s1600/megaman2box_front.jpg');
 
INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Super Metroid', 'Le jeu vidéo Super Metroid', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://www.thebeancocktail.com/wp-content/uploads/2012/03/130312_super-metroid_cover.jpg');
 
INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Zelda 2', 'Le jeu vidéo Zelda 2', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://vignette2.wikia.nocookie.net/nintendo/images/f/f0/Zelda_II_The_Adventure_of_Link_(NA).jpg/revision/latest?cb=20090420193232&path-prefix=en');
 
INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Spyro', 'Le jeu vidéo Spyro', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://www.historiquedesjeuxvideo.com/bdd/jeu/img/Playstation/525.jpg');
 
INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Tomb Raider', 'Le jeu vidéo Tomb Raider', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://image.jeuxvideo.com/images/ps/t/b/tbraps0f.jpg');
 
INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Mario Bros', 'Le jeu vidéo Mario Bros', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://gameinferno.fr/wp-content/uploads/2013/12/Super_Mario_Bros._NA.png');
 
INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Final Fantasy VII', 'Le jeu vidéo Final Fantasy VII', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://cdn-static.gamekult.com/gamekult-com/images/photos/00/00/80/79/final-fantasy-vii-jaquette-ME0000807988_2.jpg');
 
INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Chrono Trigger', 'Le jeu vidéo Chrono Trigger', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://media.senscritique.com/media/000007080744/source_big/Chrono_Trigger.jpg');
 
INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Donkey Kong Country', 'Le jeu vidéo Donkey Kong Country', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://media.senscritique.com/media/000006892962/source_big/Donkey_Kong_Country.jpg');
 
INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Final Fantasy VI', 'Le jeu vidéo Final Fantasy VI', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://babysoftmurderhands.com/wp-content/uploads/2013/01/Final-Fantasy-VI-Cover-Art-Japan-Super-Famicom.jpg');

INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Tetris 2', 'Le jeu vidéo Tetris 2', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://image.jeuxvideo.com/images/ns/t/e/tet2ns0f.jpg');

INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('LUFIA : The Fortresss of Doom', 'Le jeu vidéo LUFIA : The Fortress of Doom', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://img.gamefaqs.net/box/8/8/5/50885_front.jpg');

INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Hoshigami: Ruining Blue Earth', 'Le jeu vidéo Hoshigami: Ruining Blue Earth', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'https://upload.wikimedia.org/wikipedia/en/2/28/Hoshigami.jpg');

INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Mighty Final Fight', 'Le jeu vidéo Mighty Final Fight', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://amigamuseum.emu-france.info/Fichiers/sites/final_fight/fichiers/images/jaquettes_boites/ff_mighty_final_fight_jaquette_nes.jpg');

INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Nombres_produit, Date_creation, Date_modification, Image)
VALUES ('Double Dragon II: The Revenge', 'Le jeu vidéo Double Dragon II: The Revenge', 0.50, 0.75, 150, '2015-11-17 12:30:45','2015-11-17 12:30:45', 'http://www.gametronik.com/site/rubriques/mame/Jeux/Double%20Dragon%20II%20-%20The%20Revenge/Scans/67001301.jpg');

INSERT INTO `Categories` (`Libelle`, `Description`, `Date_creation`, `Date_modification`) VALUES
('NES', 'La catégorie NES', '2015-11-17 12:30:45', '2015-11-17 12:30:45'),
('Super NES', 'La catégorie Super NES', '2015-11-17 12:30:45', '2015-11-17 12:30:45'),
('Playstation 1', 'La catégorie Playstation 1', '2015-11-17 12:30:45', '2015-11-17 12:30:45'),
('Action-aventure', 'La catégorie action-aventure', '2015-11-17 12:30:45', '2015-11-17 12:30:45'),
('Plateforme', 'La catégorie plateforme', '2015-11-17 12:30:45', '2015-11-17 12:30:45'),
('RPG', 'La catégorie RPG', '2015-11-17 12:30:45', '2015-11-17 12:30:45'),
('Beat-em-up', 'La catégorie Beat-em-up', '2015-11-17 12:30:45', '2015-11-17 12:30:45'),
('Puzzle Game', 'La catégorie Puzzle Game', '2015-11-17 12:30:45', '2015-11-17 12:30:45');

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (1, 1);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (2, 2);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (1, 3);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (3, 4);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (3, 5);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (1, 6);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (3, 7);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (2, 8);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (2, 9);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (2, 10);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (1, 11);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (2, 12);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (3, 13);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (1, 14);

INSERT INTO Categorie_produit (ID_categorie, ID_produit)
VALUES (1, 15);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (4, 1);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (4, 2);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (6, 3);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (5, 4);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (4, 5);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (5, 6);


INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (6, 7);


INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (6, 8);


INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (5, 9);


INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (6, 10);


INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (8, 11);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (6, 12);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (6, 13);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (7, 14);

INSERT INTO Type_jeu_produit (ID_categorie, ID_jeu)
VALUES (7, 15);



