{{-- Ejercicio 2: etiqueta según si el comercio tiene transacciones o no --}}
@props(['totalTransacciones'])

@if ($totalTransacciones === 0)
    <span class="badge gris">Sin actividad</span>
@else
    <span class="badge verde">Activo</span>
@endif
