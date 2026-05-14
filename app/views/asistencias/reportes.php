<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE_BUSINESS; ?> - Empleados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<?php include __DIR__ . '/../layouts/sidebar.php'; ?>

<!-- CONTENIDO PRINCIPAL -->
<main>
    <nav class="breadcrumb">
        <span>Dashboard</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span id="breadcrumb-page">Asistencias</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span id="breadcrumb-page">Reportes</span>
        
    </nav>
    <div class="main-content">
        <div class="table-responsive">
            <?php 
            if (empty($asistencias)) :?>
                <p>No hay registro</p>
            <?php else: ?>
            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID_Asistencia</th>
                        <th>Fecha</th>
                        <th>Hora de entrada</th>
                        <th>Hora de salida</th>
                        <th>Estado</th>
                        <th>ID_Empleado</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($asistencias as $asistenciota): ?>
                        <tr>
                            <td><?php echo $asistenciota['id_asistencia'] ?></td>
                            <td><?php echo $asistenciota['fecha'] ?></td>
                            <td><?php echo $asistenciota['hora_entrada'] ?></td>
                            <td><?php echo $asistenciota['hora_salida'] ?></td>
                            <td><?php echo htmlspecialchars($asistenciota['estado']) ?></td>
                            <td><?php echo htmlspecialchars($asistenciota['id_empleado']) ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
</main>
<script src="<?php echo BASE_URL; ?>/public/js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
