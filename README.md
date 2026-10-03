# 💳 TaskBoard — Semana 7 (Vistas Dinámicas con Blade)

> Proyecto integrador de **Integración de Sistemas (CE-ISC019)** — se construye la interfaz de TaskBoard con el motor de plantillas Blade.

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-Templates-F7523F?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

---

## 📖 Descripción

En la **Semana 7**, TaskBoard deja de devolver JSON crudo y muestra la información en **vistas HTML dinámicas** usando el motor de plantillas **Blade** de Laravel. Se construye el listado de comercios y el detalle de cada comercio con sus transacciones, reutilizando un layout y un componente propios.

---

## ✨ Características

- ✅ Mostrar datos con `{{ }}` (escapado) y `{!! !!}` (sin escapar).
- ✅ Directivas de control: `@if`, `@foreach` y `@forelse`.
- ✅ Layout reutilizable con `@extends`, `@section` y `@yield`.
- ✅ Componente Blade propio: `<x-badge-estado>` para los estados de transacción.
- ✅ Vistas de listado (`index`) y detalle (`show`) de comercios.

---

## 🛠️ Tecnologías

| Herramienta | Uso |
|---|---|
| **Laravel 11.x** | Framework principal |
| **Blade** | Motor de plantillas (vistas) |
| **Eloquent ORM** | Datos mostrados en las vistas |
| **MySQL** | Base de datos |

---

## 📋 Requisitos

- PHP **8.2+**, Composer y Laravel instalados
- Proyecto de la Semana 6 funcionando (tablas y relaciones Eloquent listas)

---

## ⚙️ Instalación

```bash
git clone https://github.com/H3CT0R503/NOMBRE-DEL-REPO.git
cd NOMBRE-DEL-REPO
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

---

## 🕹️ Uso

Con el servidor corriendo (`php artisan serve`), visita:

| Ruta | Vista | Muestra |
|---|---|---|
| `/comercios` | `comercios/index.blade.php` | Listado de comercios afiliados |
| `/comercios/{comercio}` | `comercios/show.blade.php` | Detalle del comercio y sus transacciones |

---

## 📂 Estructura (vistas)

```text
resources/views/
├── layouts/
│   └── app.blade.php            # layout base reutilizable
├── components/
│   └── badge-estado.blade.php   # componente <x-badge-estado>
└── comercios/
    ├── index.blade.php          # listado
    └── show.blade.php           # detalle
```

---

## 🧠 Conceptos aplicados

- **Interpolación segura:** `{{ }}` escapa HTML; `{!! !!}` lo renderiza (usar con cuidado).
- **Control de flujo en la vista:** `@foreach` para listas y `@forelse` para listas vacías.
- **Layouts:** evitar repetir `<html>`, `<head>` y navegación en cada vista.
- **Componentes:** encapsular UI reutilizable (`<x-badge-estado :estado="...">`).

---

## 👤 Autor

**Hector Interiano**
📚 Integración de Sistemas · Ciclo 02-2026
🎓 UPED "Dr. Luis Alonso Aparicio" · Docente: Ing. Oscar Contreras

---

<p align="center">Hecho con 💙 y Laravel</p>
