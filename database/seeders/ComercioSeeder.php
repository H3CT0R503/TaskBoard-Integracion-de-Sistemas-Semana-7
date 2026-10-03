<?php

namespace Database\Seeders;

use App\Models\Comercio;
use Illuminate\Database\Seeder;

/**
 * Datos de prueba que pide la guía: un comercio con dos transacciones
 * y otro sin ninguna, para poder ver los dos casos en pantalla.
 */
class ComercioSeeder extends Seeder
{
    public function run(): void
    {
        $cafe = Comercio::create([
            'nombre_comercio' => 'Café Amanecer',
            'rubro' => 'Restaurante',
            'fecha_afiliacion' => '2026-09-10',
            'telefono' => '2222-1234',
        ]);

        $cafe->transacciones()->createMany([
            [
                'monto' => 45.00,
                'moneda' => 'USD',
                'cliente_nombre' => 'María López',
                'metodo_pago' => 'Tarjeta',
                'estado' => 'Completada',
            ],
            [
                'monto' => 12.50,
                'moneda' => 'USD',
                'cliente_nombre' => 'Juan Pérez',
                'metodo_pago' => 'Transferencia',
                'estado' => 'Iniciada',
            ],
        ]);

        // Sin transacciones y sin teléfono: sirve para probar @empty,
        // la etiqueta "Sin actividad" y el ?? de la vista de detalle.
        Comercio::create([
            'nombre_comercio' => 'Ferretería El Tornillo',
            'rubro' => 'Ferretería',
            'fecha_afiliacion' => '2026-09-12',
        ]);
    }
}
