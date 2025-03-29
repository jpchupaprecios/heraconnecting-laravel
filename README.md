# HERACONNECTING

Sistema desarrollado en Laravel 11 con Vite como gestor de assets.

---

## 📍 Requisitos previos

Antes de comenzar, asegúrate de tener instalado:

- PHP >= 8.2
- Composer
- Node.js y NPM (preferiblemente la última versión LTS)
- MySQL o MariaDB
- Un entorno local configurado (Ejemplo: Laravel Valet, XAMPP, Docker o similar)

---

## ⚙️ Configuración de entorno local

Para este proyecto se utiliza un dominio personalizado local:  
**heraconnecting.local**

### 1️⃣ Configurar el dominio local

Si no sabes cómo configurar un dominio local, aquí un ejemplo usando el archivo `hosts`:

Agrega esta línea al archivo `hosts` de tu sistema:

127.0.0.1 heraconnecting.local


(En Windows: `C:\Windows\System32\drivers\etc\hosts`  
En Linux/MacOS: `/etc/hosts`)

> 💡 Luego configura tu servidor local (Apache, Nginx o Valet) para que responda a `heraconnecting.local`

---

## 🛠 Instalación paso a paso

### 1️⃣ Clonar el repositorio

```bash
git clone [URL_DEL_REPO]
cd heraconnecting

composer install
npm install
```

4️⃣ Configurar variables de entorno
Copia el archivo .env de ejemplo:

crea este .env de ejemplo
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:6hqdXotVYed4J42op6RJ4MJ3TW2HBKNweVM+wY9OV34=
APP_DEBUG=true
APP_URL=http://heraconnecting.local

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=heraconnecting
DB_USERNAME=wapify
DB_PASSWORD=q1w2e3r4T%_2

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
# CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

```

#### 💡 Cambia DB_USERNAME y DB_PASSWORD según tu configuración local de MySQL.

### 5️⃣ Generar la clave de la aplicación

```bash
php artisan key:generate
```

### 6️⃣ Ejecutar las migraciones
    
```bash
php artisan migrate
```

### ⚠️ Esto creará las tablas necesarias en tu base de datos.


###
###
## 🔥 Configuración de Vite
Asegúrate que en vite.config.js esté configurado el dominio local:

```js
server: {
    host: 'heraconnecting.local',
    hmr: {
        host: 'heraconnecting.local'
    },
}
```

## 🟣 Ejecutar el proyecto
Servidor de Laravel (backend)

```bash
php artisan serve --host=heraconnecting.local --port=8000
```

o si usas Valet:

```bash
valet link
valet secure
```


Servidor de Vite (frontend)
En otra terminal:

```bash
npm run dev
```


## 💡 Notas útiles
- Si Vite muestra error al iniciar, verifica que APP_URL y vite.config.js tengan bien puesto tu dominio local.

- Si Laravel no encuentra APP_KEY, asegúrate de haber ejecutado php artisan key:generate.

- Si las migraciones fallan, verifica que la base de datos exista y tus credenciales sean correctas.
