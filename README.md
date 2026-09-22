# Inventario

- Registrar productos con nombre y cantidad
- Consultar el listado guardado en la base de datos
- Mostrar de forma automática si cada producto está disponible o sin existencia
- Validar los datos al guardar con mensajes de éxito o error


- PHP 8 o superior (con extensión PDO MySQL)
- PDO (conexión a la base de datos)
- MySQL
- HTML 5
- CSS 3
- Laragon en Windows (incluye PHP, MySQL y phpMyAdmin)


Sí. Para que el proyecto funcione deben estar activos estos servicios 

- Apache (o Nginx): servidor web que interpreta y sirve los archivos PHP
- MySQL: base de datos donde se guardan los productos
- phpMyAdmin (opcional): interfaz web para crear la base e importar el SQL


- PHP 8 o superior con extensión PDO MySQL
- MySQL
- Navegador web
- En Windows: Laragon (recomendado)

1. Instalar Laragon (o PHP 8 + MySQL por separado)
2. Encender los servicios con Start All en Laragon
3. Colocar el proyecto en la carpeta `www` de Laragon (ejemplo: `C:\laragon\www\inventario`)
4. Revisar las credenciales en `config/conexion.php` (por defecto usuario `root` y contraseña vacía)
5. Crear la base de datos e importar el SQL con estos comandos:


6. Ejecutar el proyecto con uno de estos comandos:

Servidor de PHP (desde la carpeta del proyecto):

php -S localhost:8000

Luego abrir en el navegador:

http://localhost:8000
