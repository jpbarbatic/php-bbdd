<h2>Gestión de categorías</h2>
<a class="btn btn-primary mb-3" href="categorias.php">Nuevo</a>

<form action="categorias.php" method="post" class="form-inline">
	<div class="row">
		<div class="form-group col-2">
			<label>ID</label>
			<input class="form-control" type="text" name="id" placeholder="ID" value="<?php echo isset($categoria) ? $categoria['id'] : '' ?>" readonly>
		</div>
		<div class="form-group col-4">
			<label>Nombre</label>
			<input class="form-control mb-3" type="text" name="nombre" placeholder="Nombre" value="<?php echo isset($categoria) ? $categoria['nombre'] : '' ?>" required>
		</div>
	</div>
	<input class="btn btn-success"  type="submit" value="Guardar">
</form>

<table class="table">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<?php foreach ($categorias as $categoria): ?>
		<tr>
			<td><?= $categoria['id'] ?></td>
			<td><?= $categoria['nombre'] ?></td>
			<td><a class="btn btn-primary"  href="categorias.php?editar=<?= $categoria['id'] ?>">Editar</a> <a class="btn btn-danger"  href="categorias.php?borrar=<?= $categoria['id'] ?>">Borrar</a></td>
		</tr>
	<?php endforeach; ?>
</table>