<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/alumnos.php'); ?>
<style>
    body {
    background-color: #f0f2f5; /* Fondo gris claro */
    font-family: 'Arial', sans-serif;
    color: #343a40; /* Texto gris oscuro */
    margin: 0;
    padding: 0;
}

.card {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #007bff; /* Azul */
    color: #fff;
    font-weight: bold;
    text-align: center;
    border-bottom: 2px solid #0056b3;
}

.card-body {
    padding: 20px;
    background-color: #ffffff;
}

/* Formulario */
.form-label {
    font-weight: bold;
    color: #495057;
}

.form-control {
    border-radius: 6px;
    border: 1px solid #ced4da;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}

.btn-group .btn {
    margin-right: 5px;
    border-radius: 6px;
}

/* Botones */
.btn-success {
    background-color: #28a745;
    border: none;
}

.btn-warning {
    background-color: #ffc107;
    border: none;
    color: #212529;
}

.btn-danger {
    background-color: #dc3545;
    border: none;
}

/* Tabla */
.table {
    margin-top: 20px;
    border-radius: 8px;
    overflow: hidden;
}

.table th {
    background-color: #007bff; /* Azul */
    color: #ffffff;
    font-weight: bold;
    text-align: center;
}

.table-primary tbody tr:hover {
    background-color: #f8f9fa; /* Resaltado al pasar el mouse */
}

.table td, .table th {
    vertical-align: middle;
    text-align: center;
    padding: 10px;
}

/* Enlaces a cursos */
a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.2s;
}

a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Tom Select */
.tom-select {
    margin-top: 10px;
    border-radius: 6px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

</style>
<div class="row">
    <div class="col-5">
        <form action="" method="post">
            <div class="card">
                <div class="card-header">Alumnos</div>
                <div class="card-body">

                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input
                            type="text"
                            class="form-control"
                            name="id"
                            value="<?php echo $id;?>"
                            id="id"
                            aria-describedby="helpId"
                            placeholder="ID"/>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombre"
                            value="<?php echo $nombre;?>"
                            id="nombre"
                            aria-describedby="helpId"
                            placeholder="Escriba el Nombre"/>
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input
                            type="text"
                            class="form-control"
                            name="apellidos"
                            value="<?php echo $apellidos;?>"
                            id="apellidos"
                            aria-describedby="helpId"
                            placeholder="Escriba los Apellidos"/>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Cursos del Alumno:</label>
                        <select
                            multiple class="form-select form-select-lg"
                            name="cursos[]"
                            id="listaCursos">

                            <?php foreach($cursos as $curso){ ?>
                            <option 
                            <?php 
                                if(!empty($arregloCursos)):
                                    if(in_array($curso['id'],$arregloCursos)):
                                        echo 'selected';
                                    endif;
                                endif;
                            ?>
                            value="<?php echo $curso['id'];?>" ><?php echo $curso['id'];?> - <?php echo $curso['nombre_curso'];?></option>
                            <?php } ?>
                        </select>

                    </div>
                    
                    <div class="btn-group" role="group" aria-label="Button group name">
                        <button
                            type="submit"
                            name="accion"
                            value="agregar"
                            class="btn btn-success"
                        >
                            Agregar
                        </button>
                        <button
                            type="submit"
                            name="accion"
                            value="editar"
                            class="btn btn-warning"
                        >
                            Editar
                        </button>
                        <button
                            type="submit"
                            name="accion"
                            value="borrar"
                            class="btn btn-danger"
                        >
                            Borrar
                        </button>
                    </div>
                    
                    
                    
                </div>
            </div>
            
        </form>
    </div>
    <div class="col-7">
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($alumnos as $alumno): ?>
                    <tr class="">
                        <td><?php echo $alumno['id'];?></td>
                        <td>
                            <?php echo $alumno['nombre'];?> <?php echo $alumno['apellidos'];?>
                            <br>    
                            <?php foreach($alumno["cursos"] as $curso){ ?>
                                - <a href="certificados.php?idcurso=<?php echo $curso['id']?>&idalumno=<?php echo $alumno['id']?>"><?php echo $curso['nombre_curso']; ?></a> <br>



                                <?php }?>
                        </td>
                        <td>
                        <form action="" method="post">

                        <input type="hidden" name="id" value="<?php echo $alumno['id'];?>">
                        <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                        </form>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/js/tom-select.complete.min.js"></script>

<script>
    new TomSelect('#listaCursos');
</script>

<?php include('../templates/pie.php'); ?>