-- This SLQ file is for creating tables to manage user accounts 
-- Database: product_v_1_0

CREATE DATABASE product_v_1_0;

USE product_v_1_0;

CREATE TABLE accounts
(
	user_id INT NOT NULL AUTO_INCREMENT,
	first_name varchar(255),
	last_name varchar(255),
	email varchar(255) NOT NULL,
	-- TODO: Hash the passwords and change this to CHAR(FixedLength) 
	password TEXT NOT NULL,
	PRIMARY KEY (user_id) 
);

CREATE TABLE time_test
(
	id INT NOT NULL AUTO_INCREMENT,
	t TIME,
	d DATE, 
	dt DATETIME,
	PRIMARY KEY (id) 
);