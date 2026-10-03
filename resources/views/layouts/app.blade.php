<!DOCTYPE html>
{{-- Layout maestro. Las vistas hijas lo heredan con @extends('layouts.app') --}}
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Pasarela de Pagos — TaskBoard')</title>

    {{-- Estilos mínimos para que las etiquetas se vean de colores --}}
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            margin: 0;
            /* Fondo y color explícitos: si no, el navegador en modo
               oscuro deja el texto ilegible */
            background: #F5F8FC;
            color: #13233D;
        }
        nav {
            background: #0B2E59;
            color: #fff;
            padding: 1rem 2rem;
        }
        main {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }
        footer {
            text-align: center;
            color: #5B6B85;
            font-size: 0.85rem;
            padding: 2rem 0;
        }
        .transaccion {
            border: 1px solid #D7E1EF;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
        }
        .badge {
            display: inline-block;
            padding: 0.2rem 0.7rem;
            border-radius: 999px;
            font-size: 0.78rem;
            font-weight: bold;
            color: #fff;
        }
        .badge.verde { background: #1E7E52; }
        .badge.rojo { background: #C23B32; }
        .badge.amarillo { background: #F2A900; color: #13233D; }
        .badge.gris { background: #9AAAC4; }
    </style>
</head>
<body>
    <nav>Pasarela de Pagos · TaskBoard</nav>

    <main>
        {{-- Hueco que cada vista hija llena con @section('contenido') --}}
        @yield('contenido')
    </main>

    <footer>&copy; {{ date('Y') }} UPED — Integración de Sistemas</footer>
</body>
</html>
