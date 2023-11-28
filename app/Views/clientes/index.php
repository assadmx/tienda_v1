<!-- views/clientes/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <!-- Incluir los enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Lista de Clientes</h1>
        <a href="<?= base_url('clientes/create') ?>" class="btn btn-primary">Agregar Cliente</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= $cliente['idclientes'] ?></td>
                        <td><?= $cliente['nombre'] ?></td>
                        <td><?= $cliente['telefono'] ?></td>
                        <td><?= $cliente['fecha_de_nacimiento'] ?></td>
                        <td>
                            <a href="<?= base_url('clientes/edit/' . $cliente['idclientes']) ?>" class="btn btn-warning">Editar</a>
                            <a href="<?= base_url('clientes/delete/' . $cliente['idclientes']) ?>" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este cliente?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Incluir los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
