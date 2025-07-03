<?php
// Script para limpiar la caché de CodeIgniter
echo "Limpiando la caché de CodeIgniter...\n";

// Eliminar archivos de caché
$cacheDir = __DIR__ . '/writable/cache';
if (is_dir($cacheDir)) {
    $files = glob($cacheDir . '/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}

echo "Caché limpiada.\n";
