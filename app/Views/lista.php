<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO ALUMNOS</title>
</head>
<body>


</body>
</html><!-- Ejemplo de tabla Bootstrap moderna -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container my-4">
  
  <div>
<style>
.btn-placeholder {
  background-color: #0d6efd;
  color: #fff;
  border: none;
  transition: background-color 0.2s;
}
.btn-placeholder:hover {
  background-color: #198754; /* Verde al pasar el mouse */
  color: #fff;
}
.btn-placeholder:active {
  background-color: #dc3545; /* Rojo al hacer clic */
  color: #fff;
}
</style>

<button type="button" class="btn btn-placeholder">Registrar Matricula</button>


<h2 class="mb-4 text-center">Lista de Matrículas</h2>
</div>
  
  <div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
      <thead class="table-dark">
        <tr>
          <th>ID Matrícula</th>
          <th>Nombre Alumno</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($matriculaJose as $matricula): ?>
          <tr>
            <td><?= $matricula->id_matricula ?></td>
            <td><?= $matricula->Nombre_alumno ?></td>
            <td><?= $matricula->ape_paterno ?></td>
            <td><?= $matricula->ape_materno ?></td>
            <td>
              <span class="badge <?= $matricula->estado == 'Activo' ? 'bg-success' : 'bg-secondary' ?>">
                <?= $matricula->estado ?>
              </span>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>