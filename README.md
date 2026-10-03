# 🚀 Guías de Prácticas Laravel - TaskBoard: Pasarela de Pagos

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)

---

<p align="center">
  <img src="https://res.cloudinary.com/bcwlyire/image/upload/v1785118882/NUEVO-LOGO-UPED-A-COLOR-scaled_szoqws.jpg" alt="Logo UPED" width="300"/>
</p>

## 🏛️ Información Académica

- **Institución:** Universidad Pedagógica de El Salvador *Luis Alonso Aparicio*
- **Facultad:** Ingeniería
- **Asignatura:** Integración de Sistemas
- **Ciclo:** 02-2026
- **Docente:** Ing. Oscar Contreras
- **Proyecto Integrador:** TaskBoard - Pasarela de Pagos

---

## 📌 Descripción del Proyecto

Este repositorio contiene el material práctico, las guías paso a paso y la estructura inicial de desarrollo para el proyecto **TaskBoard**, una plataforma de **Pasarela de Pagos** desarrollada en el framework **Laravel 11**.

A través de estas guías de trabajo (Semana 5, Días 1 y 2), se abordan los conceptos fundamentales del desarrollo backend moderno:
1. **Guía N.° 1:** Instalación del entorno, comprensión de la estructura de carpetas de Laravel, el ciclo de vida de una petición HTTP y fundamentos del enrutamiento (`routes/web.php`).
2. **Guía N.° 2:** Rutas avanzadas (parámetros opcionales, restricciones de formato con expresiones regulares `where()`, rutas con nombre, grupos con prefijo) y la implementación del patrón MVC separando la lógica mediante **Controladores** generados con Artisan.

---

## 📁 Estructura del Proyecto

A continuación se detalla la estructura principal del repositorio y del proyecto Laravel `taskboard`:

```text
taskboard/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── ComercioController.php         # Controlador para gestión de comercios
│           ├── TransaccionController.php      # Controlador para gestión de transacciones
│           └── EventoTransaccionController.php# Controlador para historial y auditoría de eventos
├── config/                                    # Archivos de configuración general del sistema
├── database/                                  # Migraciones, factories y seeders para la base de datos
├── public/                                    # Punto de entrada de la aplicación (index.php) y assets
├── resources/
│   └── views/                                 # Vistas HTML / Plantillas Blade (ej. welcome.blade.php)
├── routes/
│   └── web.php                                # Definición de rutas web, closures, grupos y controladores
├── storage/                                   # Registros (logs), archivos cargados y caché de la app
├── vendor/                                    # Dependencias de PHP administradas por Composer
├── .env.example                               # Variables de entorno de ejemplo
├── composer.json                              # Configuración de Composer y paquetes
└── README.md                                  # Documentación principal del repositorio