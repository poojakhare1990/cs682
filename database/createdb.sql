/*  File edit by Student:
                Wenxiu Ye
                Pooja Khare
    Description: add new table inventory and undelivery_order
    
*/
-- Portable script for creating the pizza database
-- on your dev system:
-- mysql -u root -p < dev_setup.sql    
-- mysql -D pizzadb -u root -p < createdb.sql 
--  or, on topcat:
-- mysql -D <user>db -u <user> -p < createdb.sql 

CREATE TABLE login(
	id VARCHAR(40) PRIMARY KEY,
	username VARCHAR(40) NOT NULL,
	password VARCHAR(40) NOT NULL,
	createAccess BOOLEAN NOT NULL,
	editAccess BOOLEAN NOT NULL,
	changeAccess BOOLEAN NOT NULL
);



INSERT INTO `login` (`id`, `username`, `password`, `createAccess`, `editAccess`, `changeAccess`) VALUES ('101', 'admin', 'admin', '1', '1', '1');
INSERT INTO `login` (`id`, `username`, `password`, `createAccess`, `editAccess`, `changeAccess`) VALUES ('102', 'manager', 'manager', '0', '0', '1');
INSERT INTO `login` (`id`, `username`, `password`, `createAccess`, `editAccess`, `changeAccess`) VALUES ('103', 'technician', 'technician', '0', '0', '0');

--insert into inventory(product_id, product_name, quantity) values (12, 'cheese', 100);