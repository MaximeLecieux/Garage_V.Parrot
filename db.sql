CREATE DATABASE garage;

USE garage;

CREATE USER 'Administrateur'@'localhost' IDENTIFIED BY '$2y$10$Z9XPXXm5K7qOzh3VhTszeuPVb.BGjRQdBr2O7C8gozyU7CsZIIUDK';

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
    commentary varchar(255),
    note varchar(50),
    status varchar(50),
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