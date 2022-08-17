CREATE DATABASE Coktop;

USE Coktop;

CREATE TABLE receitas(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    modo_preparo TEXT NOT NULL,
    autor VARCHAR(255) NOT NULL,
    ingredientes TEXT NOT NULL,
    equipamentos TEXT NOT NULL
);
