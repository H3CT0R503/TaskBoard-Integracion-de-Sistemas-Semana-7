{{-- comercios/index.blade.php --}}
@extends('layouts.app')

@section('titulo', 'Comercios afiliados')

@section('contenido')
    <h1>Comercios afiliados a la pasarela</h1>

    {{-- @forelse recorre la lista y además define qué mostrar si va vacía --}}
    <ul>
        @forelse ($comercios as $comercio)
            <li>
                <a href="{{ route('comercios.show', $comercio) }}">
                    {{ $comercio->nombre_comercio }}
                </a>
                — {{ $comercio->rubro }}
                ({{ $comercio->transacciones_count }} transacciones)
                <x-badge-actividad :totalTransacciones="$comercio->transacciones_count" />
            </li>
        @empty
            <li>Aún no hay comercios afiliados.</li>
        @endforelse
    </ul>
@endsection
