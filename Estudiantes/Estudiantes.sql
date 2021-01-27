create table estudiante(
    Id_Estudiante int(15) not null auto_increment primary key,
    Nombre varchar(60) not null,
    Apellido varchar(60) not null,
    Documento varchar(12) not null,
    Correo varchar(60) not null,
    Materia varchar(30) not null,
    Docente varchar(60) not null,
    Promedio int(3) not null,
    Fecha_Registro date not null
);