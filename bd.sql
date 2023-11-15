CREATE TABLE Sala (
    id_sala INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    tipo_sala VARCHAR(30),
    descripcion VARCHAR(100),
    capacidad INT
);


INSERT INTO Sala (nombre, tipo_sala, descripcion, capacidad) VALUES
('Espera', 'Espera', 'Área de espera para pacientes', 20),
('Consultorio 1', 'Consultorio', 'Consultorio médico para consultas generales', 1),
('Consultorio 2', 'Consultorio', 'Consultorio médico para consultas especializadas', 1),
('Rayos X', 'Radiología', 'Sala para procedimientos de Rayos X', 5),
('Rehabilitación', 'Rehabilitación', 'Sala para terapias y rehabilitación', 10);

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

INSERT INTO Personal (nombre, apellido_paterno, apellido_materno, fecha_nacimiento, cargo, telefono, correo, domicilio, clasificacion) VALUES
('Dr. Juan', 'González', 'López', '1980-05-15', 'Médico General', '555-1234', 'juan.gonzalez@example.com', 'Calle Principal 123', 'D'),
('Dra. Ana', 'Martínez', 'Pérez', '1985-08-22', 'Cirujano', '555-5678', 'ana.martinez@example.com', 'Avenida Central 456', 'D'),
('Dr. Carlos', 'Díaz', 'Hernández', '1975-11-10', 'Cardiólogo', '555-8765', 'carlos.diaz@example.com', 'Plaza Mayor 789', 'D');

CREATE TABLE Usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    usuario VARCHAR(100),
    password VARCHAR(100)
);

INSERT INTO Usuario (nombre, usuario, password) VALUES ('a@a', SHA1('a@a'), SHA1('a'));

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


INSERT INTO Paciente (nombre, apellido_paterno, apellido_materno, fecha_nacimiento, tipo_sangre, telefono, correo, tipo_paciente, rfc) VALUES
('Juan', 'Gómez', 'López', '1990-05-15', 'O+', '555-1234', 'juan@gmail.com', 'normal', 'GOLJ900515ABC'),
('María', 'Hernández', 'Pérez', '1985-08-22', 'A-', '555-5678', 'maria@hotmail.com', 'frecuente', 'HEPP850822ABC'),
('Carlos', 'Martínez', 'Ramírez', '1972-12-10', 'B+', '555-8765', 'carlos@yahoo.com', 'especial', 'MARC721210ABC'),
('Ana', 'Sánchez', 'Gutiérrez', '1995-03-28', 'AB+', '555-4321', 'ana@gmail.com', 'discapacitado', 'SAGA950328ABC'),
('Pedro', 'Díaz', 'Vargas', '1980-06-17', 'O-', '555-9876', 'pedro@hotmail.com', 'vip', 'DIVP800617ABC');


CREATE VIEW VistaPaciente AS
SELECT
    id_paciente,
    CONCAT(nombre, ' ', apellido_paterno, ' ', apellido_materno) AS nombre_completo,
    fecha_nacimiento,
    tipo_sangre,
    telefono,
    correo,
    tipo_paciente,
    rfc
FROM Paciente;


CREATE TABLE AuditoriaPaciente (
    id_auditoria INT PRIMARY KEY,
    nombre VARCHAR(15),
    apellido_paterno VARCHAR(15),
    apellido_materno VARCHAR(15),
    fecha_nacimiento DATE,
    tipo_sangre VARCHAR(3),
    telefono VARCHAR(12),
    correo VARCHAR(30),
    tipo_paciente VARCHAR(15),
    rfc VARCHAR(20),
    accion VARCHAR(10),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DELIMITER //
CREATE TRIGGER eliminar_paciente_trigger
BEFORE DELETE ON Paciente
FOR EACH ROW
BEGIN
    INSERT INTO AuditoriaPaciente (id_auditoria, nombre, apellido_paterno, apellido_materno, fecha_nacimiento, tipo_sangre, telefono, correo, tipo_paciente, rfc, accion)
    VALUES (OLD.id_paciente, OLD.nombre, OLD.apellido_paterno, OLD.apellido_materno, OLD.fecha_nacimiento, OLD.tipo_sangre, OLD.telefono, OLD.correo, OLD.tipo_paciente, OLD.rfc, 'DELETE');
END;
//
DELIMITER ;

CREATE TABLE Cita (
    id_cita INT PRIMARY KEY AUTO_INCREMENT,
    fk_paciente INT,
    fk_personal INT,
    fk_sala INT,
    fecha_hora DATETIME,
    motivo_cita VARCHAR(200),
    FOREIGN KEY (fk_paciente) REFERENCES Paciente(id_paciente),
    FOREIGN KEY (fk_personal) REFERENCES Personal(id_personal),
    FOREIGN KEY (fk_sala) REFERENCES Sala(id_sala)
);

INSERT INTO Cita (fk_paciente, fk_personal, fk_sala, fecha_hora, motivo_cita) VALUES
(3, 1, 9, '2023-11-01 09:00:00', 'Consulta de rutina'),
(5, 2, 9, '2023-11-02 10:30:00', 'Cirugía programada'),
(6, 3, 8, '2023-11-03 15:45:00', 'Examen cardiológico'),
(6, 2, 7, '2023-11-04 11:15:00', 'Consulta de seguimiento');