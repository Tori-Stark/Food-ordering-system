CREATE DATABASE LE_PALACE_HOTEL;
CREATE TABLE Client(clientID INT(5) NOT NULL,
    clientFName CHAR(40) NOT NULL,
    clientLName CHAR(40) NOT NULL,
	clientUserName CHAR(40) NOT NULL,
	clientEmail VARCHAR(60) NOT NULL,
	clientPhoneNo INT(15) NOT NULL,
    clientPassword VARCHAR(40) NOT NULL,
    PRIMARY KEY Client(clientID));
CREATE TABLE TablesBooked(tableID INT(5) NOT NULL,
	tableLocation CHAR(20) NOT NULL, 
	PRIMARY KEY Tables(tableID));
CREATE TABLE ClientTable(clientID INT(5) NOT NULL,
	clientusername CHAR(40) NOT NULL,tableID INT(10) NOT NULL,tablesize INT(5) NOT NULL,
	bookingTime TIME NOT NULL,bookingdate DATE NOT NULL,PRIMARY KEY ClientTable(clientID,tableID),
	FOREIGN KEY (clientID) REFERENCES Client(clientID),FOREIGN KEY (tableID) REFERENCES TablesBooked(tableID));
CREATE TABLE Room(roomID INT(5) NOT NULL,roomName CHAR(20) NOT NULL,
	depositAmount INT(5) NOT NULL,PRIMARY KEY Room(roomID));
CREATE TABLE ClientRoom(roomID INT(5) NOT NULL,roomName CHAR(20) NOT NULL,
                        roomSize INT(5) NOT NULL,
                        clientID INT(5) NOT NULL,
                        clientusername CHAR(40) NOT NULL,
                        tableID VARCHAR(10)NOT NULL,
                        tablesize INT(5) NOT NULL,bookingTime TIME NOT NULL,
                        bookingdate DATE NOT NULL,
                        PRIMARY KEY ClientRoom(clientID,roomID),
	FOREIGN KEY (clientID) REFERENCES Client(clientID),
                        FOREIGN KEY (roomID) REFERENCES Room(roomID));
CREATE TABLE Menu(foodID INT(5) NOT NULL, foodName CHAR(40) NOT NULL,foodPrice INT(5) NOT NULL,
    PRIMARY KEY FOOD(foodID));

