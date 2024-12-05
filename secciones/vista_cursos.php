<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/cursos.php'); ?>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 20px;
    color: #333;
}

h1, h2, h3 {
    color: #4CAF50;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.card {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.card-header {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.card-body {
    padding: 20px;
}

.form-label {
    font-weight: bold;
    color: #333;
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px;
    margin-bottom: 15px;
    width: 100%;
}

.btn-group .btn {
    margin-right: 5px;
}

.btn-success {
    background-color: #4CAF50;
    border: none;
}

.btn-success:hover {
    background-color: #45a049;
}

.btn-warning {
    background-color: #ff9800;
    border: none;
}

.btn-warning:hover {
    background-color: #fb8c00;
}

.btn-danger {
    background-color: #f44336;
    border: none;
}

.btn-danger:hover {
    background-color: #e53935;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 16px;
}

.table thead {
    background-color: #4CAF50;
    color: white;
}

.table th, .table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

.table-primary {
    background-color: #e8f5e9;
}

.btn-info {
    background-color: #2196F3;
    color: white;
    border: none;
}

.btn-info:hover {
    background-color: #1e88e5;
}

@media (max-width: 768px) {
    .col-5, .col-7 {
        flex: 100%;
        max-width: 100%;
    }

    .btn-group {
        flex-direction: column;
        margin: 0 auto;
    }

    .btn-group .btn {
        margin-bottom: 5px;
    }
}
</style>

<div class="row">
    <div class="col-12">
        <br>
        <div class="row"></div>
    </div>
</div>


<div class="col-5">

<form action="" method="post">
<div class="card">
    <div class="card-header">Cursos</div>
    <div class="card-body">
    <div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input type="text"
        class="form-control"
        name="id"
        id="id"
        value="<?php echo $id; ?>"
        aria-describedby="helpId"
        placeholder="ID"
    />
</div>
<div class="mb-3">
        <label for="nombre_curso" class="form-label">Nombre</label>
        <input type="text"
            class="form-control"
            name="nombre_curso"
            id="nombre_curso"
            value="<?php echo $nombre_curso; ?>"
            aria-describedby="helpId"
            placeholder="Nombre del Curso"
        />
</div>
<div class="btn-group" role="group" aria-label="Button group name">
    <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
    <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
    <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
</div>

    </div>
</div>  
</form>



</div>
<div class="col-7">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach($listaCursos as $curso) { ?>
                <tr class="">
                    <td> <?php echo $curso['id']; ?> </td>
                    <td><?php echo $curso['nombre_curso']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo $curso['id']; ?>"/>
                            <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </divclass=>
    
</div>
</div>
</div>
<?php include('../templates/pie.php'); ?>