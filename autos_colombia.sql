CREATE database `parqueadero_auto_colombia`;

use `parqueadero_auto_colombia`;

CREATE TABLE pago(
    id_pago int NOT NULL AUTO_INCREMENT,
    numero int (20) NOT NULL,
    pago date NOT NULL,
    PRIMARY KEY(id_pago)
);

CREATE TABLE celda(
    id_celda int NOT NULL AUTO_INCREMENT,
    numero int (100) NOT NULL,
    tipo varchar (50) NOT NULL,
    PRIMARY KEY(id_celda)
);

CREATE TABLE vehiculo(
    id_vehiculo int NOT NULL AUTO_INCREMENT,
    placa varchar(6) NOT NULL,
    tipo varchar(15) NOT NULL,
    marca varchar(15) NOT NULL,
    color varchar(12) NOT NULL,
    id_celda int NOT NULL,
    PRIMARY KEY (id_vehiculo),
    FOREIGN KEY(id_celda) REFERENCES celda(id_celda)
);

CREATE TABLE usuario (
    id_usuario int NOT NULL AUTO_INCREMENT,
    nombre varchar (20) NOT NULL,
    apellido varchar (20) NOT NULL,
    cedula varchar (12) NOT NULL,
    telefono varchar(15) NOT NULL,
    telefono_se varchar (15),
    direccion varchar (20),
    id_vehiculo int NOT NULL,
    id_pago int NOT NULL,
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_vehiculo) REFERENCES vehiculo(id_vehiculo),
    FOREIGN KEY (id_pago) REFERENCES pago(id_pago)
);


