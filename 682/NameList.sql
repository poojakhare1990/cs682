CREATE TABLE NameList(
	username VARCHAR(40) PRIMARY KEY,
	password VARCHAR(40) NOT NULL,
	createAccess BOOLEAN NOT NULL,
	editAccess BOOLEAN NOT NULL,
	changeAccess BOOLEAN NOT NULL
);
