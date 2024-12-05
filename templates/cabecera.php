<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location:../index.php');
}
?>

<!doctype html>
<html lang="es">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <style>
            body {
    background-color: #f8f9fa; /* Fondo gris claro */
    font-family: 'Arial', sans-serif;
    color: #343a40; /* Texto gris oscuro */
    margin: 0;
    padding: 0;
}s
            .navbar {
    background-color: #007bff; /* Azul de Bootstrap */
    padding: 10px 15px;
}

.navbar .nav-link:hover {
    color: #dfe6e9; /* Color gris claro al pasar el mouse */
}

/* Active link */
.navbar .nav-link.active {
    color: #ffc107; /* Amarillo para el enlace activo */
}

/* Container */
.container {
    margin-top: 20px;
    padding: 20px;
    background-color: #ffffff; /* Fondo blanco para el contenido */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra ligera */
    border-radius: 8px;
}

/* Header */
h1, h2, h3, h4, h5, h6 {
    font-weight: bold;
    color: #343a40;
}

/* Footer */
footer {
    background-color: #007bff;
    color: #ffffff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <nav class="navbar navbar-expand navbar-light bg-light">
                    <div class="nav navbar-nav">
                        <a class="nav-item nav-link active" href="vista_alumnos.php" aria-current="page">Inicio</a>
                        <a class="nav-item nav-link" href="vista_alumnos.php">Alumnos</a>
                        <a class="nav-item nav-link" href="vista_cursos.php">Cursos</a>
                        <a class="nav-item nav-link" href="cerrar.php">Cerrar Sesion</a>
                    </div>
                </nav>
                <div class="container">
                    
                </div>
        </div>
    </body>