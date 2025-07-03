<?php

// Definimos el namespace para el controlador
namespace App\Controllers;

// Importamos la clase BaseController que contiene funcionalidades básicas
use App\Controllers\BaseController;

// Clase principal del controlador Home que maneja la página principal
class Home extends BaseController
{
    // Función principal que muestra la página de inicio
    public function index()
    {
        // Preparamos los datos que se van a mostrar en la vista
        $data = [
            // Título de la página
            'titulo' => 'Bienvenido a Tienda Online',
            
            // Lista de categorías principales con sus subcategorías
            'categorias' => [
                // Categoría de Zapatos
                'zapatos' => [
                    'nombre' => 'Zapatos',
                    'subcategorias' => [
                        // Subcategoría de Zapatos Casuales
                        [
                            'nombre' => 'Casuales',
                            'ruta' => '/zapatos/casuales'
                        ],
                        // Subcategoría de Zapatos Deportivos
                        [
                            'nombre' => 'Deportivos',
                            'ruta' => '/zapatos/deportivos'
                        ]
                    ]
                ],
                // Categoría de Vestidos
                'vestidos' => [
                    'nombre' => 'Vestidos',
                    'subcategorias' => [
                        // Subcategoría de Vestidos de Fiesta
                        [
                            'nombre' => 'Fiesta',
                            'ruta' => '/vestidos/fiesta'
                        ],
                        // Subcategoría de Vestidos Formales
                        [
                            'nombre' => 'Formales',
                            'ruta' => '/vestidos/formales'
                        ]
                    ]
                ],
                // Categoría de Joyas
                'joyas' => [
                    'nombre' => 'Joyas',
                    'subcategorias' => [
                        // Subcategoría de Joyas de Plata
                        [
                            'nombre' => 'Plata',
                            'ruta' => '/joyas/plata'
                        ],
                        // Subcategoría de Joyas de Oro
                        [
                            'nombre' => 'Oro',
                            'ruta' => '/joyas/oro'
                        ]
                    ]
                ]
            ],
            // Lista de productos destacados que aparecen en la página principal
            'productos_destacados' => [
                // Producto destacado de zapatos
                [
                    'nombre' => 'Zapatocasual',
                    'descripcion' => 'Zapato casual de alta calidad',
                    'imagen' => base_url('public/img/zapatocasual.jpg'),
                    'ruta' => '/zapatos/casuales'
                ],
                // Producto destacado de vestidos
                [
                    'nombre' => 'Vestidodefiesta',
                    'descripcion' => 'Vestido para eventos especiales',
                    'imagen' => base_url('public/img/fiesta2.jpg'),
                    'ruta' => '/vestidos/fiesta'
                ],
                // Producto destacado de joyas
                [
                    'nombre' => 'Joyaplata',
                    'descripcion' => 'Collar de plata con diseño moderno',
                    'imagen' => base_url('public/img/joyaplata2.jpg'),
                    'ruta' => '/joyas/plata'
                ],
                // Producto destacado de zapatos deportivos
                [
                    'nombre' => 'Zapatodeportivo',
                    'descripcion' => 'Zapato deportivo profesional',
                    'imagen' => base_url('public/img/zapato-deportivo.jpeg'),
                    'ruta' => '/zapatos/deportivos'
                ]
            ]
        ];
        
        // Devolvemos la vista 'inicio' con los datos preparados
        return view('inicio', $data);
    }

    // Función que muestra un formulario específico
    public function test()
    {
        // Muestra la vista del formulario de prueba
        return view('test');
    }

    // Función que muestra un formulario específico
    public function index1(): string
    {
        // Muestra la vista del formulario 1
        return view('VistaLogin/Formulario1');
    }

    // Función que muestra un formulario específico
    public function index2(): string
    {
        // Muestra la vista del formulario 2
        return view('VistaFormulario/Formulario2');
    }

    // Función que muestra la estructura básica del sitio
    public function index3()
    {
        echo view('catalogo/header');
        echo view('catalogo/body');
        echo view('catalogo/footer');
    }
}
