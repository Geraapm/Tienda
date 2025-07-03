<?php

namespace App\Controllers;

class Carrito extends BaseController
{
    public function agregar($id)
    {
        try {
            // Verificar si el ID es válido
            if (!is_numeric($id)) {
                throw new \Exception('ID inválido');
            }

            // Simulamos que el producto se agregó correctamente
            session()->setFlashdata('success', '¡Producto agregado al carrito correctamente!');
            
            // Redirigir de vuelta a la página anterior
            return redirect()->back();
        } catch (\Exception $e) {
            // En caso de error, mostrar mensaje de error
            session()->setFlashdata('error', 'Error: ' . $e->getMessage());
            
            // Redirigir de vuelta a la página anterior
            return redirect()->back();
        }
    }
}
