
# Hazas de la Suerte

Aplicación web desarrollada con Laravel para gestionar el tradicional sorteo de las Hazas de Suerte, una práctica histórica que se celebra cada cuatro años en los municipios gaditanos de Barbate y Vejer de la Frontera.

## 📜 ¿Qué son las Hazas de Suerte?

Las Hazas de Suerte son terrenos de labranza comunales que se sortean entre los vecinos empadronados, una tradición que data del siglo XIII y que busca garantizar el uso equitativo de la tierra entre la comunidad. Cada cuatro años, se realiza un sorteo público donde se adjudican estas parcelas a los vecinos que cumplen ciertos requisitos, como estar inscritos en un padrón específico.

## 🎨 Diseño y Accesibilidad

El diseño de esta aplicación ha sido cuidadosamente pensado para ser **totalmente accesible** y usable por cualquier persona, incluyendo aquellas con diversidad funcional. Se ha adoptado un enfoque **minimalista** y limpio, usando una paleta de colores **azules y tierras**, evocando el entorno natural donde se celebra el sorteo: el **cielo y el mar de la costa gaditana**, junto con la **tierra de las playas y campos de labranza**. Esta combinación crea una experiencia visual calmada, sencilla y coherente con el espíritu de la tradición.

## 🚀 Características del proyecto

- Gestión de participantes y padrones históricos.
- Registro y seguimiento de sorteos realizados.
- Administración de parcelas y asignaciones.
- Panel de control para administradores.
- Interfaz intuitiva y responsive.
- Estilo accesible y respetuoso con estándares WCAG.

## 🛠️ Tecnologías utilizadas

- **Framework**: Laravel
- **Base de datos**: MySQL
- **Frontend**: Blade, Tailwind CSS
- **Herramientas**: Composer, Vite, Git

## 🛠️ Estado del proyecto
Este proyecto aún se encuentra en desarrollo activo. Actualmente se ha implementado una base de datos con tres tablas principales con datos de prueba para testear la usabilidad.

En futuras versiones se incluirán:

    -Nuevas tablas para completar el modelo de datos.

    -Funcionalidades adicionales para la gestión del sorteo.

    -Mejoras en la seguridad y validación.

    -Más test de usabilidad y cobertura de casos reales.

Cualquier sugerencia o contribución es bienvenida mientras se sigue construyendo el sistema completo.

## 🧾 Datos de ejemplo (CSV)

En la carpeta `database/sample-data/` se incluyen archivos `.csv` con datos ficticios para pruebas de usabilidad:

- `padron_habitantes_registro.csv` – Registros del padrón de los habitantes del pueblo.
- `padron_colonos_registros.csv` – Información sobre el padrón de los colonos (aquellos que pueden arrendar las tierras).
- `hazas_registros.csv` – Las hazas que existen actualmente.

Puedes usarlos para importar datos durante el desarrollo o para realizar pruebas funcionales.

## ⚙️ Requisitos previos

- PHP >= 8.1
- Composer
- MySQL
- Node.js y npm

## 🧪 Instalación y ejecución local

1. Clona el repositorio:

   ```bash
   git clone git@github.com:Maria-dev-web/HazasSuerte.git
   cd HazasSuerte
   ```

2. Instala las dependencias de PHP:

   ```bash
   composer install
   ```

3. Copia el archivo de entorno y configura tus variables:

   ```bash
   cp .env.example .env
   ```

   Luego, edita `.env` para establecer tus credenciales de base de datos y otras configuraciones necesarias.

4. Genera la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

5. Ejecuta las migraciones para crear las tablas en la base de datos:

   ```bash
   php artisan migrate
   ```

6. Instala las dependencias de Node.js:

   ```bash
   npm install
   ```

7. Compila los assets del frontend:

   ```bash
   npm run dev
   ```

8. Inicia el servidor de desarrollo:

   ```bash
   php artisan serve
   ```

   La aplicación estará disponible en `http://localhost:8000`.

## 📄 Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.