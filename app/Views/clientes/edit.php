<!-- views/clientes/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <!-- Incluir los enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Cliente</h1>
        <form action="<?= base_url('clientes/update/' . $cliente['idclientes']) ?>" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="<?= $cliente['nombre'] ?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" class="form-control" value="<?= $cliente['telefono'] ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_de_nacimiento" class="form-control" value="<?= $cliente['fecha_de_nacimiento'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
        <br>
        <a href="<?= base_url('clientes') ?>" class="btn btn-secondary">Volver a la lista de clientes</a>
    </div>
    <!-- Incluir los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
