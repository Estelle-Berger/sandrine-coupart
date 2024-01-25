CREATE DATABASE Sandrine_coupart;
USE SandrineCoupart;

CREATE TABLE users(
    id_user int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(255) NOT NULL,
    mdp VARCHAR(255) NOT NULL
)

INSERT INTO users VALUES('s.coupart','S1234');

CREATE TABLE patient(
    id_patient int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    birthdate VARCHAR(255) NOT NULL,
    user VARCHAR(255) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    genre TINYINT(4) NOT NULL,
    allergene_1 TINYINT(4) NOT NULL,
    allergene_2 TINYINT(4) NOT NULL,
    allergene_3 TINYINT(4) NOT NULL,
    allergene_4 TINYINT(4) NOT NULL,
    allergene_5 TINYINT(4) NOT NULL,
    allergene_6 TINYINT(4) NOT NULL,
    allergene_7 TINYINT(4) NOT NULL,
    allergene_8 TINYINT(4) NOT NULL,
    allergene_9 TINYINT(4) NOT NULL,
    allergene_10 TINYINT(4) NOT NULL,
    allergene_11 TINYINT(4) NOT NULL,
    allergene_12 TINYINT(4) NOT NULL,
    allergene_13 TINYINT(4) NOT NULL,
    allergene_14 TINYINT(4) NOT NULL,
    regime_1 TINYINT(4) NOT NULL,
    regime_2 TINYINT(4) NOT NULL,
    regime_3 TINYINT(4) NOT NULL,
    regime_4 TINYINT(4) NOT NULL,
    regime_5 TINYINT(4) NOT NULL,
    regime_6 TINYINT(4) NOT NULL,
    regime_7 TINYINT(4) NOT NULL,
    regime_8 TINYINT(4) NOT NULL,
    regime_9 TINYINT(4) NOT NULL
)

CREATE TABLE recipes(
    id_recette INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    description VARCHAR(5000) NOT NULL,
    preparation VARCHAR(255) NOT NULL,
    repos VARCHAR(255) NOT NULL,
    cuisson VARCHAR(255) NOT NULL,
    ingredient VARCHAR(255) NOT NULL,
    etape VARCHAR(255) NOT NULL,
    for_patient TINYINT(4) NOT NULL,
    allergene_1 TINYINT(4) NOT NULL,
    allergene_2 TINYINT(4) NOT NULL,
    allergene_3 TINYINT(4) NOT NULL,
    allergene_4 TINYINT(4) NOT NULL,
    allergene_5 TINYINT(4) NOT NULL,
    allergene_6 TINYINT(4) NOT NULL,
    allergene_7 TINYINT(4) NOT NULL,
    allergene_8 TINYINT(4) NOT NULL,
    allergene_9 TINYINT(4) NOT NULL,
    allergene_10 TINYINT(4) NOT NULL,
    allergene_11 TINYINT(4) NOT NULL,
    allergene_12 TINYINT(4) NOT NULL,
    allergene_13 TINYINT(4) NOT NULL,
    allergene_14 TINYINT(4) NOT NULL,
    regime_1 TINYINT(4) NOT NULL,
    regime_2 TINYINT(4) NOT NULL,
    regime_3 TINYINT(4) NOT NULL,
    regime_4 TINYINT(4) NOT NULL,
    regime_5 TINYINT(4) NOT NULL,
    regime_6 TINYINT(4) NOT NULL,
    regime_7 TINYINT(4) NOT NULL,
    regime_8 TINYINT(4) NOT NULL,
    regime_9 TINYINT(4) NOT NULL
)

CREATE TABLE ateliers (
    id_atelier INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    tps VARCHAR(255) NOT NULL,
    lieu VARCHAR(255) NOT NULL,
    tarif VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    image VARCHAR(255) NULL
)

CREATE TABLE avis (
    id_avis INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_recette INT(11) NOT NULL,
    avis VARCHAR(255) NOT NULL,
    note  INT(11) NOT NULL
)
