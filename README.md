
HERACONNECTING
======

en mi servidor de prueba local, he creado un dominio local para poder probar la aplicacion, en este caso el dominio es heraconnecting.local

Al instalar verificar APP_URL en el archivo .env

```
APP_URL=http://heraconnecting.local
```
y en vite.config.js el server que ahora esta asi:

```
server: {
        host: 'heraconnecting.local', // Usa tu dominio personalizado
        hmr: {
            host: 'heraconnecting.local'
        },
    },
```
