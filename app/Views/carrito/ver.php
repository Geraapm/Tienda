<?php
// Vista del carrito
?>
<?= view('catalogo/header', ['titulo' => 'Carrito de Compras']) ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">Carrito de Compras</h1>
        </div>
    </div>

    <?php if (empty($carrito)): ?>
        <div class="alert alert-info">
            Su carrito está vacío
        </div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carrito as $id => $item): ?>
                        <tr>
                            <td><?= $item['nombre'] ?></td>
                            <td>$<?= number_format($item['precio'], 2) ?></td>
                            <td><?= $item['cantidad'] ?></td>
                            <td>$<?= number_format($item['precio'] * $item['cantidad'], 2) ?></td>
                            <td>
                                <form action="index.php/carrito/eliminar/<?= $id ?>" method="post" class="d-inline">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este producto?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Total:</strong></td>
                        <td colspan="2"><strong>$<?= number_format($total, 2) ?></strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <a href="index.php/" class="btn btn-secondary w-100">Seguir Comprando</a>
            </div>
            <div class="col-md-6">
                <a href="index.php/carrito/checkout" class="btn btn-success w-100">Finalizar Compra</a>
            </div>
        </div>
    <?php endif; ?>
</div>

<?= view('catalogo/footer') ?>
