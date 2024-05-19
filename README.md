# *CRUD para gestión de documentos*
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![Google Cloud](https://img.shields.io/badge/GoogleCloud-%234285F4.svg?style=for-the-badge&logo=google-cloud&logoColor=white) ![Visual Studio Code](https://img.shields.io/badge/Visual%20Studio%20Code-0078d7.svg?style=for-the-badge&logo=visual-studio-code&logoColor=white) <img src="/src/eloquent.jpg" height="28">

<br>

## Guía de deploy de la aplicación

Este proyecto es una aplicación **PHP** que utiliza **Composer** para la gestión de dependencias y una base de datos SQL alojada en **google cloud**. A continuación, se detallan los pasos necesarios para realizar el despliegue local en un servidor php.

<br>

## Instalación de PHP

1. **Descargar e instalar PHP**

   - Visita la página de descargas de PHP: [Descargar PHP](https://www.php.net/downloads.php)
   - Sigue las instrucciones específicas para tu sistema operativo.

2. **Agregar PHP al PATH**

   Si la instalación no agregó PHP automáticamente al PATH, debes hacerlo manualmente. Aquí tienes una guía para hacerlo:

   - ***En Windows***:
     - Abre el Panel de control.
     - Entra a Sistema y seguridad ➜ Sistema.
     - Haz clic en "Configuración avanzada del sistema".
     - En la pestaña "Avanzado", haz clic en "Variables de entorno".
     - En "Variables del sistema", encuentra la variable Path y selecciónala.
     - Haz clic en "Editar".
     - Agrega una nueva entrada con el directorio de instalación de PHP, por ejemplo, C:\php **(esto puede variar según la ubicación de la instalación de PHP)**.

   - ***En macOS/Linux***:
     - Abre una terminal.
     - Edita el archivo **~/.bashrc** (o **~/.bash_profile** o **~/.zshrc** dependiendo del shell que estes usando):

        ```bash
        nano ~/.bashrc
        ```

     - Agrega esta línea al final del archivo:

        ```bash
        export PATH="/usr/local/php/bin:$PATH"

        ```

     - Ejecuta source **~/.bashrc** para aplicar los cambios.

<br>

## Instalación de Composer

1. **Descargar e instalar Composer**

   - Visita la página de descarga de Composer: [Descargar Composer](https://getcomposer.org/download/)
   - Sigue las instrucciones específicas para tu sistema operativo.

2. **Agregar Composer al PATH**

   - Si la instalación no agregó Composer automáticamente al PATH, debes hacerlo manualmente. Aquí tienes una guía para hacerlo:
     - [Agregar Composer al PATH en Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)
     - [Agregar Composer al PATH en macOS/Linux](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

<br>

## Obtener archivos de la aplicación

- Entra a la carpeta donde alojaras los archivos de la aplicación.
- Abre una terminal y clona el repositorio de GitHub:

   ```bash
   git clone https://github.com/SrMudblood/prueba-tecnica-innclod.git
   cd prueba-tecnica-innclod
   ```

- Si utilizas Vissual Studio Code puedes ejecutar el siguiente comando para abrir el proyecto:

   ```bash
   code .
   ```

<br>

## Realizar deploy

Dentro de la carpeta del **proyecto**, realiza los siguientes pasos para realizar el despliegue local de la aplicación:

- Instala las dependencias:

   ```bash
   composer install
   ```

- Crea un servidor local de PHP:

   ```bash
   php -S localhost:8000
   ```

   Puedes cambiar el puerto 8000 a cualquier otro que desees que tengas disponible.

Y ahora puedes acceder a la aplicación en la dirección **<http://localhost:8000/>** en tu navegador web de preferencia y ver la aplicación en acción.


<br>
