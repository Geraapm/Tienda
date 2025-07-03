<?php

// Definimos el namespace para el controlador
namespace App\Controllers;

class Productos extends BaseController
{
    // Función que muestra los zapatos casuales disponibles
    public function zapatosCasuales(): string
    {
        // Devolvemos la vista de los zapatos casuales
        return view('ContenedorZapatos/Casual');
    }

    // Función que muestra los zapatos deportivos disponibles
    public function zapatosDeportivos(): string
    {
        // Devolvemos la vista de los zapatos deportivos
        return view('ContenedorZapatos/Deportivos');
    }

    // Función que muestra los vestidos de fiesta disponibles
    public function vestidosFiesta(): string
    {
        // Devolvemos la vista de los vestidos de fiesta
        return view('ContenedorVestidos/Fiesta');
    }

    // Función que muestra los vestidos formales disponibles
    public function vestidosFormales(): string
    {
        // Devolvemos la vista de los vestidos formales
        return view('ContenedorVestidos/Formal');
    }

    // Función que muestra las joyas de plata disponibles
    public function joyasPlata(): string
    {
        // Devolvemos la vista de las joyas de plata
        return view('ContenedorJoyas/plata');
    }

    // Función que muestra las joyas de oro disponibles
    public function joyasOro(): string
    {
        // Devolvemos la vista de las joyas de oro
        return view('ContenedorJoyas/Oro');
    }
}
