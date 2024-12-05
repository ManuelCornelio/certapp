<?php include('../templates/cabecera.php'); ?>
    <style>
        body {
    background-color: #f8f9fa; /* Fondo gris claro */
    font-family: 'Arial', sans-serif;
    color: #343a40; /* Texto gris oscuro */
    margin: 0;
    padding: 0;
}

/* Encabezado principal */
.p-5 {
    background-color: #e9ecef; /* Fondo ligeramente más oscuro */
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra ligera */
    padding: 30px;
}

.p-5 h1 {
    color: #007bff; /* Azul principal */
    font-weight: 700;
    font-size: 3rem;
    margin-bottom: 20px;
}

.p-5 p {
    color: #495057; /* Gris medio */
    font-size: 1.25rem;
    line-height: 1.5;
}

/* Línea separadora */
.p-5 hr {
    border-top: 2px solid #007bff; /* Azul principal */
    width: 80px;
    margin: 20px 0;
}

/* Botón */
.btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    font-size: 1.25rem;
    border-radius: 8px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3; /* Azul más oscuro */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Efecto al pasar el mouse */
}

.btn-primary:active {
    background-color: #003f7f; /* Azul más profundo */
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.2); /* Efecto al presionar */
}

/* Contenedor interno */
.container-fluid {
    max-width: 800px;
    margin: auto;
    text-align: center; /* Centra el texto */
    padding: 40px 20px;
}
    </style>
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Bienvenid@ a la aplicacion de certificados</h1>
        <p class="col-md-8 fs-4">
            Genere Certificados a la Medida
        </p>
        <hr class="my-2">
        <p>Iniciar la aplicacion</p>
        <a class="btn btn-primary btn-lg" href="vista_alumnos.php" role="button">Iniciar</a>
    </div>
</div>


<?php include('../templates/pie.php'); ?>