CREATE TABLE Sala (
    id_sala INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    tipo_sala VARCHAR(30),
    descripcion VARCHAR(45),
    capacidad INT
);

CREATE TABLE Personal (
    id_personal INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(15),
    apellido_paterno VARCHAR(15),
    apellido_materno VARCHAR(15),
    fecha_nacimiento DATE,
    cargo VARCHAR(20),
    telefono VARCHAR(12),
    correo VARCHAR(30),
    domicilio VARCHAR(25),
    clasificacion VARCHAR(2)
);

CREATE TABLE Usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(30),
    correo VARCHAR(45),
    password VARCHAR(100),
    fk_personal INT,
    FOREIGN KEY (fk_personal) REFERENCES Personal(id_personal)
);

CREATE TABLE Paciente (
    id_paciente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(15),
    apellido_paterno VARCHAR(15),
    apellido_materno VARCHAR(15),
    fecha_nacimiento DATE,
    tipo_sangre VARCHAR(3),
    telefono VARCHAR(12),
    correo VARCHAR(30),
    tipo_paciente VARCHAR(15),
    rfc VARCHAR(20)
);

CREATE TABLE Cita (
    fk_paciente INT,
    fk_personal INT,
    fk_sala INT,
    fecha_hora DATETIME,
    motivo_cita VARCHAR(200),
    FOREIGN KEY (fk_paciente) REFERENCES Paciente(id_paciente),
    FOREIGN KEY (fk_personal) REFERENCES Personal(id_personal),
    FOREIGN KEY (fk_sala) REFERENCES Sala(id_sala)
);