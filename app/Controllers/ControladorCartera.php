<?php

namespace App\Controllers;

class ControladorCartera extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Joyas de Plata - Tienda Online',
            'productos' => [
                [
                    'id' => 1,
                    'nombre' => 'Pulsera de Plata',
                    'precio' => 149.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ],
                [
                    'id' => 2,
                    'nombre' => 'Collar de Plata',
                    'descripcion' => 'Collar de plata con piedras preciosas',
                    'precio' => 199.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ]
            ]
        ];
        return view('ContenedorJoyas/plata', $data);
    }

    public function oro()
    {
        $data = [
            'titulo' => 'Joyas de Oro - Tienda Online',
            'productos' => [
                [
                    'id' => 3,
                    'nombre' => 'Anillo de Oro',
                    'descripcion' => 'Anillo de oro con diamantes',
                    'precio' => 999.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ],
                [
                    'id' => 4,
                    'nombre' => 'Pendientes de Oro',
                    'descripcion' => 'Pendientes de oro con zafiros',
                    'precio' => 799.99,
                    'imagen' => 'https://via.placeholder.com/300x200'
                ]
            ]
        ];
        return view('ContenedorJoyas/Oro', $data);
    }
}
