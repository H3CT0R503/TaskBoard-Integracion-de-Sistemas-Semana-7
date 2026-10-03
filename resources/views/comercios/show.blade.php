{{-- comercios/show.blade.php --}}
@extends('layouts.app')

@section('titulo', $comercio->nombre_comercio)

@section('contenido')
    <p><a href="{{ route('comercios.index') }}">&larr; Volver a comercios</a></p>

    <h1>{{ $comercio->nombre_comercio }}</h1>
    <p>Rubro: {{ $comercio->rubro }}</p>
    {{-- ?? pone un texto por defecto cuando el dato viene null --}}
    <p>Teléfono: {{ $comercio->telefono ?? 'Sin teléfono registrado' }}</p>

    {{-- Ejercicio 1: mensaje distinto según cuántas transacciones tenga --}}
    @if ($comercio->transacciones->count() === 0)
        <p>Este comercio es nuevo, aún no registra actividad.</p>
    @elseif ($comercio->transacciones->count() === 1)
        <p>Este comercio tiene su primera transacción registrada.</p>
    @else
        <p>Este comercio tiene un historial de
            {{ $comercio->transacciones->count() }} transacciones.</p>
    @endif

    <h2>Transacciones</h2>

    @forelse ($comercio->transacciones as $transaccion)
        <div class="transaccion">
            <strong>${{ $transaccion->monto }} {{ $transaccion->moneda }}</strong>
            — {{ $transaccion->cliente_nombre }}
            {{-- Los dos puntos en :estado mandan la variable, no el texto --}}
            <x-badge-estado :estado="$transaccion->estado" />
        </div>
    @empty
        <p>Este comercio aún no registra transacciones.</p>
    @endforelse
@endsection
