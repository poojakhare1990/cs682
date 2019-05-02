



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

