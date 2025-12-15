# 🥔 Proyecto Papa

Este es un sistema web desarrollado en **Laravel** que implementa un sistema de autenticación completo utilizando **Laravel Breeze** y **Laravel Socialite** para el inicio de sesión con Google (OAuth 2.0).

## 📋 Requisitos Previos

* PHP >= 8.1
* Composer
* Node.js & NPM
* Base de datos (MySQL, MariaDB o SQLite)

## 🚀 Instalación

1. **Clonar el repositorio:**

   ```bash
   git clone https://github.com/JoelynCapyrby777/ProyectoAuth.git
   cd proyecto-papa
   ```
2. **Instalar dependencias de PHP y Node:**

   ```bash
   composer install
   npm install
   ```
3. **Configurar el entorno:**
   Duplica el archivo de ejemplo y genera la llave de la aplicación:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Configurar Base de Datos:**
   Abre el archivo `.env`, configura tus credenciales de base de datos (`DB_DATABASE`, `DB_USERNAME`, etc.) y ejecuta las migraciones:

   ```bash
   php artisan migrate
   ```
5. **Compilar recursos frontend:**

   ```bash
   npm run build
   ```

---

## ⚙️ Configuración Obligatoria

Para que el proyecto funcione correctamente (especialmente el Login con Google), debes seguir estos pasos de configuración:

### 1. Configuración SSL (cacert.pem)

Es necesario configurar los certificados SSL locales para evitar errores de cURL al conectar con Google.

1. Sigue las instrucciones detalladas en este repositorio:
   👉 **[Instrucciones cacert.pem](https://github.com/FilipQL/cacert.pem)**
2. Básicamente, descarga el archivo `.pem`, colócalo en tu carpeta de PHP y edita tu `php.ini` apuntando `curl.cainfo` a la ubicación de ese archivo.

### 2. Google OAuth 2.0

Debes crear un proyecto en Google Cloud Console para obtener tus credenciales.

1. Ve a [Google Cloud Console](https://console.cloud.google.com/).
2. Crea un nuevo proyecto y configura la pantalla de consentimiento OAuth.
3. Crea credenciales de tipo **ID de cliente de OAuth** (Aplicación Web).
4. **IMPORTANTE:** En "URI de redireccionamiento autorizados", asegúrate de usar tu host personalizado.

   * **URI de redirección:** `http://ejemplo.com/auth/google/callback`
5. Copia el **Client ID** y **Client Secret** en tu archivo `.env`:

   ```ini
   GOOGLE_CLIENT_ID=tu-id-de-cliente
   GOOGLE_CLIENT_SECRET=tu-secreto-de-cliente
   GOOGLE_REDIRECT_URL=http://ejemplo.com/auth/google/callback
   ```

### 3. Configuración del Host Local

Para usar el dominio personalizado `ejemplo.com` en local:

1. Abre tu archivo de `hosts` como administrador:

   * **Windows:** `C:\Windows\System32\drivers\etc`
2. Agrega la siguiente línea al final:

   ```text
   127.0.0.1 ejemplo.com
   ```

---

## 🏁 Ejecución del Proyecto

Para levantar el servidor y que coincida con la configuración de Google OAuth y el Host, ejecuta el siguiente comando (puedes requerir permisos de administrador para el puerto 80):

```bash
php artisan serve --host proyectopapa.com --port=80
```
