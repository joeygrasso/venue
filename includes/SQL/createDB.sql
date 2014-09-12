CREATE DATABASE venue;

CREATE TABLE Customers(
	U_ID int NOT NULL AUTO_INCREMENT,
	USERNAME varchar(255) UNIQUE NOT NULL,
	PASSWORD varchar(255) NOT NULL,
	EMAIL_ADDRESS varchar(255) NOT NULL,
	FIRST_NAME varchar(255) NOT NULL,
	LAST_NAME varchar(255) NOT NULL,
	ADDRESS varchar(255) NOT NULL,
	CITY varchar(255) NOT NULL,
	STATE varchar(255) NOT NULL,
	ZIP char(5) NOT NULL,
	PHONE VARCHAR(255) NOT NULL,
	ALT_PHONE VARCHAR(255),
	BALANCE DECIMAL(5,2),
	SQ1 VARCHAR(255) NOT NULL,
	SQ2 VARCHAR(255) NOT NULL,
	SQ3 VARCHAR(255) NOT NULL,
	SQ4 VARCHAR(255) NOT NULL,
	SQ5 VARCHAR(255) NOT NULL,
	SA1 VARCHAR(255) NOT NULL,
	SA2 VARCHAR(255) NOT NULL,
	SA3 VARCHAR(255) NOT NULL,
	SA4 VARCHAR(255) NOT NULL,
	SA5 VARCHAR(255) NOT NULL,
	PRIMARY KEY (U_ID)
);


CREATE TABLE Venue(
	V_ID int NOT NULL AUTO_INCREMENT,
	V_Name varchar(25) NOT NULL,
	V_Description varchar(255) NOT NULL,
	V_CostDaily DECIMAL(5,2) NOT NULL,
	PRIMARY KEY (V_ID)
);

INSERT INTO Venue(V_Name, V_Description, V_CostDaily)
VALUES('Beach', 'Located on the beautiful white sands of Tybee Island', '250.00');

INSERT INTO Venue(V_Name, V_Description, V_CostDaily)
VALUES('Downtown', 'Located in the downtown historic district of Savannah', '300.00');


INSERT INTO Venue(V_Name, V_Description, V_CostDaily)
VALUES('Plantation', 'Located at Rose Hill Plantation in Bluffton, SC', '200.00');


CREATE TABLE Reservation(
	R_ID int NOT NULL AUTO_INCREMENT,
	START_DATE DATE NOT NULL,
	END_DATE DATE NOT NULL,
	Venue int,
	User int,
	PRIMARY KEY (R_ID),
	FOREIGN KEY (Venue) REFERENCES Venue(V_ID),
	FOREIGN KEY (User) REFERENCES Customers(U_ID)
);