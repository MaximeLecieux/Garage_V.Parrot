CREATE DATABASE garage;

USE garage;

CREATE USER 'Administrateur'@'localhost' IDENTIFIED BY 'Password123!';

CREATE TABLE Users (
    idUser int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    type varchar(50)
);

CREATE TABLE Services (
    idService int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(50) NOT NULL,
    description TEXT NOT NULL,
    img varchar(255)
);

CREATE TABLE Schedules (
    day varchar(50) NOT NULL PRIMARY KEY,
    morning varchar(50) NOT NULL,
    afternoon varchar(50) NOT NULL
);

CREATE TABLE Guests (
    idGuest int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(50),
    surname varchar(50),
    email varchar(255),
    phone varchar(255)
);

CREATE TABLE Opinions (
    idOpinion int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    commentary varchar(255) NOT NULL,
    note varchar(50) NOT NULL,
    status varchar(50) NOT NULL,
    id_guest int NOT NULL,
    FOREIGN KEY (id_guest) REFERENCES Guests(idGuest)
);

CREATE TABLE Cars (
    idCar int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(50) NOT NULL,
    price FLOAT NOT NULL,
    brand varchar(50) NOT NULL,
    model varchar(50) NOT NULL,
    year int NOT NULL,
    mileage INT NOT NULL,
    color varchar(50) NOT NULL,
    nb_door INT NOT NULL,
    gearbox varchar(50) NOT NULL,
    fuel varchar(50) NOT NULL,
    img_one varchar(255) NOT NULL,
    img_two varchar(255),
    img_three varchar(255),
    img_four varchar(255),
    img_five varchar(255),
    img_six varchar(255)
);

CREATE TABLE Contacts (
    idContact int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    message TEXT NOT NULL,
    note varchar(50),
    id_guest int NOT NULL,
    id_car int NOT NULL,
    FOREIGN KEY (id_guest) REFERENCES Guests(idGuest),
    FOREIGN KEY (id_car) REFERENCES Cars(idCar)
);

GRANT SELECT, INSERT, DELETE, UPDATE ON garage.Users TO 'Administrateur'@'localhost';
GRANT SELECT, INSERT, DELETE, UPDATE ON garage.Services TO 'Administrateur'@'localhost';
GRANT SELECT, INSERT, DELETE, UPDATE ON garage.Schedules TO 'Administrateur'@'localhost';
GRANT SELECT, INSERT, DELETE, UPDATE ON garage.Guests TO 'Administrateur'@'localhost';
GRANT SELECT, INSERT, DELETE, UPDATE ON garage.Opinions TO 'Administrateur'@'localhost';
GRANT SELECT, INSERT, DELETE, UPDATE ON garage.Cars TO 'Administrateur'@'localhost';
GRANT SELECT, INSERT, DELETE, UPDATE ON garage.Contacts TO 'Administrateur'@'localhost';
 
INSERT INTO Users (email, password, type) VALUES ('administrateur@garageparrot.fr', '$2y$10$6hRj1sncTTDtIEIhbfxYiOSzUMzS1SSiUcv6yFCXIzFq.hcgXSdKS', 'administrateur');

INSERT INTO Services (name, description, img) VALUES ('Entretient du véhicule', "Notre équipe vous proportionne un service de qualité pour l'entretient de votre voiture.", 'uploads/images/1.jpg');

INSERT INTO Services (name, description, img) VALUES ('Service du nettoyage', "Notre équipe vous proportionne un service de qualité pour le nettoyage votre voiture.", 'uploads/images/2.jpg');

INSERT INTO Services (name, description, img) VALUES ('Contrôle technique', "Notre équipe vous proportionne un service de qualité pour le contrôle technique de votre voiture. ", 'uploads/images/3.jpg');

INSERT INTO Guests (name) VALUES ('Maxime');

INSERT INTO Guests (name) VALUES ('Dominique');

INSERT INTO Guests (name) VALUES ('Camille');

INSERT INTO Opinions (commentary, note, status, id_guest)  VALUES ("De loin les meilleurs ! Service qualité prix au top ne changez rien ! Je recommande !!", 5, 'valid', 1);

INSERT INTO Opinions (commentary, note, status, id_guest)  VALUES ("J’avais confiance en aucun garage avant celui là je vous le recommande fortement!", 5, 'valid', 2);

INSERT INTO Opinions (commentary, note, status, id_guest)  VALUES ("Compétent, professionnel,bon prix et très disponible", 4, 'valid', 3);


INSERT INTO Schedules (day, morning, afternoon) VALUES ('Lundi', '8:00-12:00', '14:00-18:00');

INSERT INTO Schedules (day, morning, afternoon) VALUES ('Mardi', '8:00-12:00', '14:00-18:00');

INSERT INTO Schedules (day, morning, afternoon) VALUES ('Mercredi', '8:00-12:00', '14:00-18:00');

INSERT INTO Schedules (day, morning, afternoon) VALUES ('Jeudi', '8:00-12:00', '14:00-18:00');

INSERT INTO Schedules (day, morning, afternoon) VALUES ('Vendredi', '8:00-12:00', '14:00-18:00');

INSERT INTO Schedules (day, morning, afternoon) VALUES ('Samedi', '8:00-12:00', 'Fermé');

INSERT INTO Schedules (day, morning, afternoon) VALUES ('Dimanche', 'Fermé', 'Fermé');