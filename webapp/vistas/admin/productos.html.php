<h2 style="float: left; margin-right: 30px;" >Gestión de productos</h2>
<a class="btn btn-primary mb-3" href="productos.php">Nuevo</a>
<form action="productos.php" method="post">
	<div class="row">
		<div class="col-1">
			<label for="inputPassword6" class="col-form-label">ID</label>
			<div class="input-group">
			<input class="form-control" type="text" name="id" value="<?php echo isset($producto) ? $producto['id'] : '' ?>" readonly>
			</div>
		</div>
		<div class="col-auto">
			<label for="inputPassword6" class="col-form-label">Nombre</label>
			<input class="form-control" type="text" name="nombre" value="<?php echo isset($producto) ? $producto['nombre'] : '' ?>" required>
		</div>
		<div class="col-auto">
			<label for="inputPassword6" class="col-form-label">Precio</label>
			<input class="form-control" type="text" name="precio" value="<?php echo isset($producto) ? $producto['precio'] : '' ?>" required>
		</div>
		<div class="col-auto">
			<label for="inputPassword6" class="col-form-label">Cantidad</label>
			<input class="form-control" type="text" name="cantidad" placeholder="Cantidad" value="<?php echo isset($producto) ? $producto['cantidad'] : '' ?>" required>
		</div>						
		<div class="col-auto mb-3">
			<label for="inputPassword6" class="col-form-label">C. Barras</label>
			<input class="form-control" type="text" name="codigo_barras" placeholder="C. Barras" value="<?php echo isset($producto) ? $producto['codigo_barras'] : '' ?>" required>
		</div>
		<div class="col-auto mb-3">
			<label for="inputPassword6" class="col-form-label">Categoría</label>
			<select class="form-select" name="categoria_id">
			<?php foreach($categorias as $categoria): ?>
			<option value="<?php echo $categoria['id'] ?>" <?=(isset($producto) and $categoria['id']==$producto['categoria_id']) ? 'selected':'' ?>><?php echo $categoria['nombre'] ?></option>
			<?php endforeach; ?>
			</select>
			<?php // echo createSelect('categoria_id', $categorias, 'id', 'nombre', isset($producto) ? $producto['categoria_id'] : null, 'form-select')?>
		</div>				
	</div>
	<input class="btn btn-success mb-3" type="submit" value="Guardar">
</form>
<?php if(isset($producto)): ?>

<form action="" method="post" enctype="multipart/form-data">
<div class="row">
	<input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
	<div class="col-5">
	<input type="file" class="form-control" name="foto">
	</div>
	<div class="col-3">
	<input class="btn btn-success mb-3" type="submit" value="Subir">
	</div>
</div>
</form>
<img style="height: 100px;" src="imagenes/productos/<?php echo $producto['id']?>.jpg">
<?php endif; ?>
<div style="float: right;">
<?php include "paginacion.html.php" ?>
</div>
<?php /*if (isset($producto)): ?>
	<img src="barcode.php?f=svg&s=ean-13-nopad&d=<?= $producto['codigo_barras'] ?>">
<?php endif;*/ ?>
<table class="table">
	<tr>
		<th class="text-end">ID</th>
		<th>Foto</th>
		<th>Nombre</th>
		<th class="text-end">Precio</th>
		<th class="text-end">Cantidad</th>
		<th class="text-center">C. Barras</th>
		<th class="text-center">Categoría</th>
		<th class="text-center">Acciones</th>
	</tr>
	<?php foreach ($productos as $producto): ?>
		<tr>
			<td class="text-end"><?= $producto['id'] ?></td>
			<td><img style="height: 30px;" src="imagenes/productos/<?php echo $producto['id']?>.jpg"></td>
			<td><?= $producto['nombre'] ?></td>
			<td class="text-end"><?= $producto['precio'] ?> &euro;</td>
			<td class="text-end"><?= $producto['cantidad'] ?></td>
			<td class="text-center"><?= $producto['codigo_barras'] ?></td>
			<td class="text-center"><?= $producto['categoria'] ?></td>
			<td class="text-center"><a class="btn btn-primary" href="productos.php?editar=<?= $producto['id'] ?>">Editar</a> <a class="btn btn-danger" href="productos.php?borrar=<?= $producto['id'] ?>">Borrar</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<div style="float: right;">
<?php include "paginacion.html.php" ?>
</div>