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

CREATE TABLE employees(
	id int AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(40) NOT NULL,
	password VARCHAR(40) NOT NULL,
	createAccess BOOLEAN NOT NULL,
	editAccess BOOLEAN NOT NULL,
	changeAccess BOOLEAN NOT NULL
	
);



INSERT INTO `employees` ( `username`, `password`, `createAccess`, `editAccess`, `changeAccess`) VALUES ('admin', 'admin', '1', '1', '1');
INSERT INTO `employees` ( `username`, `password`, `createAccess`, `editAccess`, `changeAccess`) VALUES ( 'manager', 'manager', '0', '1', '1');
INSERT INTO `employees` ( `username`, `password`, `createAccess`, `editAccess`, `changeAccess`) VALUES ( 'technician', 'technician', '0', '0', '0');

CREATE TABLE building(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(40) NOT NULL,
	manager_id	VARCHAR(40) references employees (id),
	technician_id VARCHAR(40) references employees (id)
	
);
ALTER TABLE building auto_increment=101;

INSERT INTO building( name, manager_id, technician_id) VALUES ( 'AAA', '2', '3');
INSERT INTO building( name, manager_id, technician_id) VALUES ( 'BBB', '2', '3');
INSERT INTO building( name, manager_id, technician_id) VALUES ( 'CCC', '2', '3');

CREATE TABLE form(
	fid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fname VARCHAR(40) NOT NULL,
	bid VARCHAR(40) references building(id)
	
);
INSERT INTO `form` ( `fname`, `bid`) VALUES ('whirlpool','1');

CREATE TABLE options(
	oid VARCHAR(40) PRIMARY KEY,
	types VARCHAR(40) NOT NULL,
	val VARCHAR(40) NOT NULL,
	display BOOLEAN NOT NULL
);

CREATE TABLE question(
	PRIMARY KEY(oid,fid),
	oid VARCHAR(40) references options(oid),
	fid int references form(fid),
	question VARCHAR(40) NOT NULL,
	property varchar(100)
);

CREATE TABLE records(
rec_id int NOT NULL auto_increment PRIMARY KEY,
oid VARCHAR(40) references options(oid), 
types VARCHAR(40) references options(types),
fid  int references form(fid),
val VARCHAR(40) references options(oid)
)


