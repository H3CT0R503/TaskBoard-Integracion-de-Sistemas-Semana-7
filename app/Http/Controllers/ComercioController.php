<?php

namespace App\Http\Controllers;

use App\Models\Comercio;
use Illuminate\Http\Request;

class ComercioController extends Controller
{
    /**
     * Lista los comercios. Antes devolvía JSON; ahora manda la
     * colección a una vista Blade.
     *
     * withCount cuenta las transacciones en la misma consulta y las
     * deja en $comercio->transacciones_count.
     */
    public function index()
    {
        $comercios = Comercio::withCount('transacciones')->get();

        return view('comercios.index', [
            'comercios' => $comercios,
        ]);
    }

    /**
     * Detalle de un comercio. {comercio} llega ya convertido en
     * instancia del modelo; load() trae sus transacciones de una vez.
     */
    public function show(Comercio $comercio)
    {
        $comercio->load('transacciones');

        return view('comercios.show', [
            'comercio' => $comercio,
        ]);
    }
}
