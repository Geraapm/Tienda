<?php

// Definimos el namespace para el controlador
namespace App\Controllers;

class ControladorVestido extends BaseController
{
    // Función principal que muestra los vestidos disponibles
    public function index()
    {
        // Preparamos los datos que se van a mostrar en la vista
        $data = [
            // Título de la página
            'titulo' => 'Vestidos - Tienda Online',
            
            // Lista de productos disponibles
            'productos' => [
                // Producto 1: Vestido de Fiesta 1
                [
                    'id' => 1,
                    'nombre' => 'Vestido de Fiesta 1',
                    'descripcion' => 'Vestido elegante para eventos especiales',
                    'precio' => 299.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ],
                // Producto 2: Vestido de Fiesta 2
                [
                    'id' => 2,
                    'nombre' => 'Vestido de Fiesta 2',
                    'descripcion' => 'Vestido de cóctel moderno',
                    'precio' => 349.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ]
            ]
        ];
        
        // Devolvemos la vista de vestidos con los datos preparados
        return view('ContenedorVestidos/Fiesta', $data);
    }

    // Función que muestra los vestidos formales disponibles
    public function formales()
    {
        // Preparamos los datos que se van a mostrar en la vista
        $data = [
            // Título de la página
            'titulo' => 'Vestidos Formales - Tienda Online',
            
            // Lista de productos disponibles
            'productos' => [
                // Producto 1: Vestido Formal 1
                [
                    'id' => 3,
                    'nombre' => 'Vestido Formal 1',
                    'descripcion' => 'Vestido de oficina elegante',
                    'precio' => 249.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ],
                [
                    'id' => 4,
                    'nombre' => 'Vestido Formal 2',
                    'descripcion' => 'Vestido para eventos corporativos',
                    'precio' => 299.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ]
            ]
        ];
        return view('ContenedorVestidos/Formal', $data);
    }
}
