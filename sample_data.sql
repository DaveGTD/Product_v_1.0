-- This SQL file is for inserting test data into 'product_v_1_0' database 

USE product_v_1_0;

INSERT INTO accounts (email, password) VALUES ('dave@dave.com', 'dave');
INSERT INTO accounts (email, password) VALUES ('anna@anna.com', 'anna');
INSERT INTO accounts (email, password) VALUES ('rae@rae.com', 'rae');
INSERT INTO accounts (email, password) VALUES ('someone@someone.com', 'someone');

INSERT INTO time_test (t, d, dt) VALUES ('21:00:23', '2016-01-20', '2011-02-27 23:43:42');