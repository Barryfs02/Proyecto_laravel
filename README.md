Sistema de Ventas en Laravel

Descripción del proyecto
Este es un sistema de ventas web desarrollado con el framework PHP Laravel, diseñado para gestionar de manera eficiente el proceso de compra y venta de productos. El sistema permite a los usuarios (administradores y clientes) realizar diversas tareas, desde la gestión de inventario y pedidos hasta el seguimiento de ventas de manera local.

Funcionalidades
Gestión de productos y categorías.
Registro y gestión de clientes.
Procesamiento de pedidos y ventas.
Reportes de ventas detallados (por producto, por cliente, por periodo).
Control de inventario en tiempo real.
Autenticación de usuarios con diferentes roles (administrador y cliente).

Requisitos
Antes de instalar y ejecutar este proyecto, asegúrate de tener instalados los siguientes componentes en tu entorno de desarrollo:

Servidor web:Apache
PHP: Versión 8.1 o superior.
Composer: Gestor de dependencias de PHP.
Base de datos: MySQL .
Configuración y ejecución
Sigue estos pasos para configurar el proyecto en tu máquina local:

1.  Clonar el repositorio:
    
    git clone [URL de tu repositorio]

2.  Instalar dependencias de Composer:
    
    composer install
    

3.  **Configurar el archivo (.env):
       Copia el archivo env.explample y renómbralo a (.env).
        
        cp .env.example .env
    
       Genera la clave de aplicación de Laravel:
        
        php artisan key:generate
    
       Configura los datos de tu base de datos en el archivo (.env):
        
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=[nombre_de_tu_base_de_datos]
        DB_USERNAME=[tu_usuario_de_base_de_datos]
        DB_PASSWORD=[tu_contraseña_de_base_de_datos]
    

4.  Ejecutar las migraciones y seeders:
    
    php artisan migrate --seed
    

5.  Instalar dependencias de NPM:
   
    npm install


6.  Compilar los recursos de frontend:
    
    npm run build


7.  Iniciar el servidor local de Laravel:
    
    php artisan serve


8.  **Acceder al proyecto:**
    *   Abre tu navegador y visita la siguiente dirección: `http://127.0.0.1:8000`.
