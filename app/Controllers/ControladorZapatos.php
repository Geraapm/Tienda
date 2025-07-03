<?php

// Definimos el namespace para el controlador
namespace App\Controllers;

class ControladorZapatos extends BaseController
{
    // Función principal que muestra los zapatos casuales disponibles
    public function index()
    {
        // Preparamos los datos que se van a mostrar en la vista
        $data = [
            // Título de la página
            'titulo' => 'Zapatos - Tienda Online',
            
            // Lista de productos disponibles
            'productos' => [
                // Producto 1: Zapato Casual 1
                [
                    'id' => 1,
                    'nombre' => 'Zapato Casual 1',
                    'descripcion' => 'Zapato casual de alta calidad',
                    'precio' => 99.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ],
                // Producto 2: Zapato Casual 2
                [
                    'id' => 2,
                    'nombre' => 'Zapato Casual 2',
                    'descripcion' => 'Zapato casual elegante',
                    'precio' => 129.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ]
            ]
        ];
        
        // Devolvemos la vista de zapatos casuales con los datos preparados
        return view('ContenedorZapatos/Casual', $data);
    }

    // Función que muestra los zapatos deportivos disponibles
    public function deportivos()
    {
        // Preparamos los datos que se van a mostrar en la vista
        $data = [
            // Título de la página
            'titulo' => 'Zapatos Deportivos - Tienda Online',
            
            // Lista de productos disponibles
            'productos' => [
                // Producto 1: Zapato Deportivo 1
                [
                    'id' => 3,
                    'nombre' => 'Zapato Deportivo 1',
                    'descripcion' => 'Zapato deportivo para running',
                    'precio' => 149.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ],
                // Producto 2: Zapato Deportivo 2
                [
                    'id' => 4,
                    'nombre' => 'Zapato Deportivo 2',
                    'descripcion' => 'Zapato deportivo para fútbol',
                    'precio' => 179.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ]
            ]
        ];
        
        // Devolvemos la vista de zapatos deportivos con los datos preparados
        return view('ContenedorZapatos/Deportivos', $data);
    }
}
