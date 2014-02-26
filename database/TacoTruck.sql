# Create the TacoTruck database

CREATE DATABASE TacoTruck;
use TacoTruck;

DROP TABLE IF EXISTS TacoTruck.Users;
DROP TABLE IF EXISTS TacoTruck.Orders;
DROP TABLE IF EXISTS TacoTruck.Tacos;
DROP TABLE IF EXISTS TacoTruck.TacoOrders;
DROP TABLE IF EXISTS TacoTruck.Tortillas;
DROP TABLE IF EXISTS TacoTruck.Rice;
DROP TABLE IF EXISTS TacoTruck.Cheeses;
DROP TABLE IF EXISTS TacoTruck.Beans;
DROP TABLE IF EXISTS TacoTruck.Sauces;
DROP TABLE IF EXISTS TacoTruck.Fillings;
DROP TABLE IF EXISTS TacoTruck.TacoVegetables;
DROP TABLE IF EXISTS TacoTruck.TacoExtras;
DROP TABLE IF EXISTS TacoTruck.Vegetables;
DROP TABLE IF EXISTS TacoTruck.Extras;

CREATE TABLE Users (
	user_id INT(30) NOT NULL AUTO_INCREMENT,
	givenName VARCHAR(255),
	surname VARCHAR(255),
	email VARCHAR(255),
	password VARCHAR(255),
	phoneNumber VARCHAR(255),
	CC_Provider VARCHAR(255),
	CC_Number VARCHAR(255),
	Primary Key (user_id)
);

CREATE TABLE Orders (
	order_id INT(30) NOT NULL AUTO_INCREMENT,
	user_id INT(30) NOT NULL,
	price INT(30),
	timePlaced DATETIME,
	Primary Key (order_id),
	Foreign Key (user_id) REFERENCES Users.user_id
);

CREATE TABLE Tacos (
	taco_id INT(30) NOT NULL AUTO_INCREMENT,
	filling_id INT(30) NOT NULL,
	tortilla_id INT(30) NOT NULL,
	rice_id INT(30),
	cheese_id INT(30),
	bean_id INT(30),
	sauce_id INT(30),
	Primary Key (taco_id),
	Foreign Key (filling_id) REFERENCES Fillings.filling_id,
	Foreign Key (tortilla_id) REFERENCES Tortillas.tortilla_id
);

CREATE TABLE TacoOrders (
	order_id NOT NULL,
	taco_id NOT NULL,
	Primary Key (order_id, taco_id)
);

CREATE TABLE Tortillas (
	tortilla_id INT(30) NOT NULL AUTO_INCREMENT,
	name VARCHAR(255),
	price DECIMAL(10,2)
);

