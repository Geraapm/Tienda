<?php
// Vista para joyas de oro
?>
<?= view('catalogo/header', ['titulo' => $titulo]) ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4"><?= $titulo ?></h1>
        </div>
    </div>

    <div class="row g-4">
        <?php
$imagenes_oro = [
    'Joyas-de-oro.jpg',
    'joyaoro2.jpg',
    'joyaoro3.jpg',
    'joyaoro4.jpg'
];
$i = 0;
foreach ($productos as $producto): 
    $producto['imagen'] = $imagenes_oro[$i % count($imagenes_oro)];
    $i++; ?>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?= base_url('public/img/' . $producto['imagen']) ?>" class="card-img-top" alt="<?= $producto['nombre'] ?>" style="height: 200px; width: 100%; object-fit: cover; border-radius: 10px 10px 0 0;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                        <p class="card-text"><?= $producto['descripcion'] ?></p>
                        <p class="card-text"><strong>$<?= number_format($producto['precio'], 2) ?></strong></p>
                        <a href="index.php/producto/<?= $producto['id'] ?>" class="btn btn-primary">Ver detalles</a>
                        <a href="<?= base_url('carrito/agregar/' . $producto['id']) ?>" class="btn btn-success btn-agregar-carrito">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= view('catalogo/footer') ?>
