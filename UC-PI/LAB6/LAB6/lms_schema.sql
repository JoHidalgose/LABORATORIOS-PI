CREATE DATABASE IF NOT EXISTS universidad_central;
USE universidad_central;

-- Tabla de Profesores
CREATE TABLE Profesor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    cedula VARCHAR(20) UNIQUE NOT NULL,
    correo VARCHAR(100) NOT NULL
);

-- Tabla de Estudiantes
CREATE TABLE Estudiante (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    carnet INT UNIQUE NOT NULL,
    carrera VARCHAR(100) NOT NULL
);

-- Tabla de Cursos
CREATE TABLE Curso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(20) UNIQUE NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    creditos INT NOT NULL,
    horario VARCHAR(50)
);

-- Relación: Profesor imparte Curso (muchos a muchos)
CREATE TABLE Profesor_Curso (
    profesor_id INT,
    curso_id INT,
    PRIMARY KEY (profesor_id, curso_id),
    FOREIGN KEY (profesor_id) REFERENCES Profesor(id) ON DELETE CASCADE,
    FOREIGN KEY (curso_id) REFERENCES Curso(id) ON DELETE CASCADE
);

-- Relación: Estudiante matricula Curso (muchos a muchos)
CREATE TABLE Estudiante_Curso (
    estudiante_id INT,
    curso_id INT,
    PRIMARY KEY (estudiante_id, curso_id),
    FOREIGN KEY (estudiante_id) REFERENCES Estudiante(id) ON DELETE CASCADE,
    FOREIGN KEY (curso_id) REFERENCES Curso(id) ON DELETE CASCADE
);
