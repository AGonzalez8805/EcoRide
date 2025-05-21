CREATE DATABASE EcoRide;
USE EcoRide;
-- Créer la table Utilisateur
CREATE TABLE utilisateurs(
    id Int Auto_increment NOT NULL,
    nom Varchar (50) NOT NULL,
    prenom Varchar (50) NOT NULL,
    email Varchar (100) NOT NULL,
    password Varchar (255) NOT NULL,
    pseudo Varchar (50) NOT NULL,
    role Varchar (50) NULL,
    credit Int NULL,
    CONSTRAINT utilisateur_PK PRIMARY KEY (id)
) ENGINE = InnoDB;
-- Créer la table voiture
CREATE TABLE voiture(
    id Int Auto_increment NOT NULL,
    modele Varchar (50) NOT NULL,
    immatriculation Varchar (50) NOT NULL,
    energie Varchar (50) NOT NULL,
    couleur Varchar (50) NOT NULL,
    marque Varchar (50) NOT NULL,
    datePremierImmatriculation Date NOT NULL,
    id_utilisateurs Int NOT NULL,
    CONSTRAINT voiture_PK PRIMARY KEY (id),
    CONSTRAINT voiture_utilisateur_FK FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id)
) ENGINE = InnoDB;
-- Créer la table covoiturage
CREATE TABLE covoiturage(
    id Int Auto_increment NOT NULL,
    dateDepart Date NOT NULL,
    heureDepart Varchar (50) NOT NULL,
    lieuDepart Varchar (50) NOT NULL,
    dateArrivee Date NOT NULL,
    heureArrivee Varchar (50) NOT NULL,
    lieuArrivee Varchar (50) NOT NULL,
    statut Varchar (50) NOT NULL,
    nbPlace Int NOT NULL,
    prixPersonne Float NOT NULL,
    id_utilisateurs Int NOT NULL,
    id_voiture Int NOT NULL,
    CONSTRAINT covoiturage_PK PRIMARY KEY (id),
    CONSTRAINT covoiturage_utilisateur_FK FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id),
    CONSTRAINT covoiturage_voiture0_FK FOREIGN KEY (id_voiture) REFERENCES voiture(id)
) ENGINE = InnoDB;
-- Créer la table administrateur
CREATE TABLE administrateur(
    id Int Auto_increment NOT NULL,
    pseudo Varchar (50) NOT NULL,
    password Varchar (255) NOT NULL,
    CONSTRAINT administrateur_PK PRIMARY KEY (id)
) ENGINE = InnoDB;
-- Créer la table employe
CREATE TABLE employe(
    id Int Auto_increment NOT NULL,
    pseudo Varchar (50) NOT NULL,
    email Varchar (100) NOT NULL,
    id_administrateur Int NOT NULL,
    CONSTRAINT employe_PK PRIMARY KEY (id),
    CONSTRAINT employe_administrateur_FK FOREIGN KEY (id_administrateur) REFERENCES administrateur(id)
) ENGINE = InnoDB;
-- Créer la table avis
CREATE TABLE avis(
    id Int Auto_increment NOT NULL,
    commentaire Varchar (50) NOT NULL,
    note Varchar (50) NOT NULL,
    statut Varchar (50) NOT NULL,
    datePublication Date NOT NULL,
    id_utilisateurs Int NOT NULL,
    id_employe Int NOT NULL,
    CONSTRAINT avis_PK PRIMARY KEY (id),
    CONSTRAINT avis_utilisateur_FK FOREIGN KEY (id_utilisateurs) REFERENCES utilisateurs(id),
    CONSTRAINT avis_employe0_FK FOREIGN KEY (id_employe) REFERENCES employe(id)
) ENGINE = InnoDB;
CREATE TABLE role(
    id Int Auto_increment NOT NULL,
    description Varchar (50) NOT NULL,
    CONSTRAINT role_PK PRIMARY KEY (id)
) ENGINE = InnoDB;
CREATE TABLE possede(
    id Int NOT NULL,
    id_utilisateurs Int NOT NULL,
    CONSTRAINT possede_PK PRIMARY KEY (id, id_utilisateurs),
    CONSTRAINT possede_role_FK FOREIGN KEY (id) REFERENCES role(id),
    CONSTRAINT possede_utilisateur0_FK FOREIGN KEY (id_utilisateurs) REFERENCES utilisateurs(id)
) ENGINE = InnoDB;