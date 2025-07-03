<?php
// Vista principal del catálogo
?>
<div class="row">
    <div class="col-12">
        <h2 class="text-center mb-4"><?php echo $titulo ?? 'Productos'; ?></h2>
    </div>
</div>

<div class="row g-4">
    <?php if (isset($productos) && !empty($productos)): ?>
        <?php foreach ($productos as $producto): ?>
            <div class="col-md-4 col-lg-3">
                <div class="card h-100">
                    <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                        <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                        <p class="card-text"><strong>$<?php echo number_format($producto['precio'], 2); ?></strong></p>
                        <a href="/producto/<?php echo $producto['id']; ?>" class="btn btn-primary">Ver detalles</a>
                        <a href="/carrito/agregar/<?php echo $producto['id']; ?>" class="btn btn-success">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="col-12">
            <div class="alert alert-info">
                No hay productos disponibles en esta categoría.
            </div>
        </div>
    <?php endif; ?>
</div>
</html>