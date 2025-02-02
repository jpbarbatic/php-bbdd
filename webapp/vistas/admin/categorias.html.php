<h2>Gestión de categorías</h2>
<a class="btn btn-primary" href="categorias.php">Nuevo</a>
<form action="categorias.php" method="post">
	<input class="form-control" type="text" name="id" placeholder="ID" value="<?php echo isset($categoria) ? $categoria['id'] : '' ?>" readonly>
	<input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo isset($categoria) ? $categoria['nombre'] : '' ?>" required>
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