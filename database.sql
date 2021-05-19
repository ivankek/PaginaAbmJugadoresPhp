create database jugadores;
use jugadores;

create table Usuario(
usuario varchar(30),
pass varchar(30),
primary key(usuario)
);

create table Jugador(
numero int,
nombre varchar(30),
descripcion varchar(500),
posicion varchar (30),
imagen varchar (500),
primary key(numero)
);


INSERT INTO Usuario (usuario,pass) 
		VALUES('ivank','1234');