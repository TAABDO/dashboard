CREATE DATABASE restoiaam;

CREATE TABLE client(

    id int primary key AUTO_INCREMENT,
    Customer_Name varchar(50),
    adresse varchar(50),
    email varchar(50),
    Bill int,
);

CREATE table menu(
    id int primary key AUTO_INCREMENT,
    Quantity int,
    Price double,
    Name varchar(50)
    Status varchar(50)

);

CREATE TABLE orderes(

    id int PRIMARY KEY AUTO_INCREMENT,
    Order_Name varchar(50),	
    client_Name varchar(50),	
    Location varchar(50),	
    Price double

);
CREATE TABLE reservation(

    id int PRIMARY key AUTO_INCREMENT,
    date_reservation date,
    TableNumber varchar(50),
    client_id int, 
    FOREIGN KEY (client_id) REFERENCES client(id) ON DELETE CASCADE

);

CREATE Table client_orderes(
    id int primary key AUTO_INCREMENT,
    location varchar(50),
    client_id int,
    orderes_id int,
    FOREIGN KEY (client_id) REFERENCES client(id)ON DELETE CASCADE,
    FOREIGN KEY (orderes_id) REFERENCES orderes(id)
);
CREATE Table client_menu(
    id int primary key AUTO_INCREMENT,
    name varchar(50),
    client_id int,
    menu_id int,
    FOREIGN KEY (client_id) REFERENCES client(id),
    FOREIGN KEY (menu_id) REFERENCES menu(id)
)


insert into reservation (date_reservation,TableNumber,client_id)
values ("2000-02-03",2,7);

UPDATE `reservation`
SET `id`=$N_reservation,`date_reservation`=$date_reservation,`TableNumber`=$TableNumber,`client_id`=$client_id; 

INSERT INTO client(Customer_Name, adresse, email, Bill) 
VALUES ("saad","youssoufia","abdo@gmail.com",24);

ALTER TABLE client
AUTO_INCREMENT=1;