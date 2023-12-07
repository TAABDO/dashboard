create DATABASE restoiaamv2;

create table users(
  id int primary key auto_increment,
  nom varchar(50),
  email varchar(50),
  password varchar(50),
  role enum ('client','admin'),
  adresse varchar(50),
  
);
create table menu(
id int primary key auto_increment,
nom varchar(50),
prix float,
status varchar(50)

);
create table orders(

id int primary key auto_increment,
nom varchar(50),
location varchar(50),
user_nom varchar(50),
users_id int,
foreign key (users_id) references users(id) on delete CASCADE

);


create table reservation(
 id int primary key auto_increment,
 date_reservation date,
 nombre_tables int,
 users_id int,
 foreign key (users_id) references users(id) on delete CASCADE
 
 );
create table elementorders(
id int primary key,
quantite int,
orders_id int,
foreign key (orders_id) references orders(id) on delete CASCADE

);
create table elementmenu(
id int primary key,
nom varchar(50),
prix float,
menu_id int,
foreign key (menu_id) references menu(id) on delete CASCADE

)
create table tables(
    id int primary key,
    nombre_tables int,
    reservation_id int,
    foreign key (reservation_id) references reservation(id) on delete CASCADE
)

insert into users (nom,email,password,role)
values ('abdo','taouil@gmail.com','abdo98','admin');
insert into orders (nom,location,users_id)
values ('abdo','youssoufia',2);