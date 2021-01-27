create table usuario(
    Id_Usuario int(15) not null auto_increment primary key,
    Nombre varchar(60) not null,
    Apellido varchar(60) not null,
    Usuario varchar(40) not null,
    Contraseña varchar(80) not null,
    Perfil varchar(30) not null,
    Estado varchar(20) not null
);