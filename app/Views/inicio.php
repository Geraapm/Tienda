<?php
// Vista principal de la tienda
?>
<?= view('catalogo/header', ['titulo' => $titulo]) ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold mb-4">Bienvenido a Tienda Online</h1>
            <p class="lead text-muted mb-5">Descubre nuestra colección de moda y accesorios</p>
        </div>
    </div>

    <!-- Categorías principales -->
    <div class="row g-4">
        <?php foreach ($categorias as $categoria): ?>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm rounded-3">
                    <?php if ($categoria['nombre'] === 'Zapatos'): ?>
                        <img src="<?= base_url('public/img/zapatocasual.jpg') ?>" class="card-img-top h-100 object-fit-cover rounded-top-3" alt="Zapatos">
                    <?php elseif ($categoria['nombre'] === 'Vestidos'): ?>
                        <img src="<?= base_url('public/img/vestidodefiesta.jpg') ?>" class="card-img-top h-100 object-fit-cover rounded-top-3" alt="Vestidos">
                    <?php elseif ($categoria['nombre'] === 'Joyas'): ?>
                        <img src="<?= base_url('public/img/joyaplata2.jpg') ?>" class="card-img-top h-100 object-fit-cover rounded-top-3" alt="Joyas">
                    <?php endif; ?>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3"><?= $categoria['nombre'] ?></h5>
                        <p class="card-text text-muted mb-4">Explora nuestra colección de <?= strtolower($categoria['nombre']) ?></p>
                        <?php foreach ($categoria['subcategorias'] as $subcategoria): ?>
                            <a href="index.php<?= $subcategoria['ruta'] ?>" class="btn btn-outline-primary mb-2 w-100"><?= $subcategoria['nombre'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Destacados -->
    <div class="row mt-5">
        <div class="col-12 text-center mb-4">
            <h2 class="fw-bold mb-4">Productos Destacados</h2>
        </div>
        
        <?php foreach ($productos_destacados as $producto): ?>
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm rounded-3">
                    <img src="<?= $producto['imagen'] ?>" class="card-img-top h-200 object-fit-cover" alt="<?= $producto['nombre'] ?>">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><?= $producto['nombre'] ?></h5>
                        <p class="card-text text-muted"><?= $producto['descripcion'] ?></p>
                        <div class="d-grid gap-2">
                            <a href="index.php<?= $producto['ruta'] ?>" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= view('catalogo/footer') ?>
