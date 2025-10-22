Sistema de Ventas - Laravel 11

Sistema de Ventas es una aplicación web desarrollada con Laravel 11, diseñada para gestionar los productos, categorías, clientes.  
Permite realizar ventas, administrar inventario, registrar proveedores y controlar usuarios desde una interfaz intuitiva y segura de manera local.

 Tecnologías utilizadas

PHP 8.2 o superior
Laravel 11
Composer  
MySQL  
Node.js  
Bootstrap 5
Vite (para la compilación de assets)    
SweetAlert (alertas interactivas)  

Requisitos 

Instalar:

[XAMPP](https://www.apachefriends.org/es/index.html) 
  (con **Apache** y **MySQL** activos)  
[Composer](https://getcomposer.org/download/)  
[Node.js y NPM](https://nodejs.org/)  
[Visual Studio Code](https://code.visualstudio.com/) (opcional, recomendado)

Extenciones de VSCode
PHP Intelephense  
Laravel Snippets  
Laravel Blade Snippets  
 
Instalación y configuración

Clonar el repositorio
```bash
git clone https://github.com/tu-usuario/sistema-ventas.git
cd sistema-ventas
```
Instalar dependencias
```bash
composer install
npm install
```
Configurar el entorno

Copia el archivo de ejemplo y renómbralo:
```bash
cp .env.example .env
```
Edita el archivo .env con los datos de tu entorno local:
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:KxJuyci2dnIb2o4KEBrfclFBRqpl2J5YZoT2hqGGN8Q=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=ventas



 
 DB_USERNAME=root
 DB_PASSWORD=
```
Generar la clave de aplicación
```bash
php artisan key:generate
```
Ejecutar migraciones
```
php artisan migrate
```
Levantar el servidor local
```bash
php artisan serve
```
Luego abre en el navegador:
```b
 http://localhost:8000
```

 Descripción del sistema

El sistema está compuesto por diferentes módulos que permiten administrar la información principal de una empresa:

Módulo de Login

Acceso seguro para usuarios registrados. Solo el administrador puede crear nuevas cuentas.
<img width="610" height="532" alt="login" src="https://github.com/user-attachments/assets/13c7ac45-f8d8-45b1-9b64-f109dd137eb8" />


 Dashboard principal

Panel de control con acceso rápido a todos los módulos y estadísticas generales del sistema.
<img width="1332" height="564" alt="image" src="https://github.com/user-attachments/assets/437c8d5f-1794-4218-85cc-04282bd781b7" />


 Categorías

Permite crear, editar, listar y eliminar categorías de productos.
<img width="1273" height="488" alt="categoria" src="https://github.com/user-attachments/assets/23f509b4-b2d7-4213-899d-4d404a7c8333" />
<img width="581" height="550" alt="agregar cat" src="https://github.com/user-attachments/assets/cb817ac5-42dd-4fb1-85b0-c0d5217221a9" />
<img width="685" height="452" alt="eith cat" src="https://github.com/user-attachments/assets/e4bcf6c9-02a7-495f-ae61-46d5435d40e4" />
<img width="655" height="433" alt="elim cat" src="https://github.com/user-attachments/assets/3e49f731-1ad4-4d85-963d-3705691b7fd8" />


Productos

Administración de productos asociados a categorías y proveedores, con control de stock.
<img width="1299" height="459" alt="Producto" src="https://github.com/user-attachments/assets/9e892741-59cb-4973-ac6a-78d3c83c7658" />


Usuarios

Administración de usuarios del sistema.

<img width="1332" height="564" alt="usuario" src="https://github.com/user-attachments/assets/d159fcb8-bf5e-44b2-9691-31c487c07f62" />



 Funcionalidades destacadas

Sistema de login y registro de usuarios
CRUD completo en módulos principales
Interfaz responsive con Bootstrap 5
Validación de datos en formularios
Protección de rutas para usuarios autenticados
Botones con íconos para acciones rápidas
Alertas dinámicas con SweetAlert
Generación de reportes en PDF



Autor

Estudiante: Ronal Acho Acarapi.
Proyecto de Laravel(Sistemas Ventas)de Diseño y programacion Web III del Instituto Superior Pablo Zarate Willca



Licencia

Este proyecto se distribuye bajo la licencia MIT.
Puedes usarlo, modificarlo y compartirlo libremente, siempre mencionando su autoría.

> El framework Laravel es un software de código abierto licenciado bajo la MIT License.





Recomendaciones 

Mantén actualizado Composer y Node.js

Revisa los permisos de las carpetas storage/ y bootstrap/cache/

Para limpiar cachés de Laravel:


php artisan optimize:clear
