# Sitio Web Grupo Industrial BACA

## Descripción
Sitio web corporativo bilingüe (Español/Inglés) para Grupo Industrial BACA, empresa especializada en servicios de construcción, mantenimiento industrial y soldadura.

## Características Implementadas

### ✅ Funcionalidades Actuales
- **Sitio bilingüe**: Versiones en español (`index.html`) e inglés (`index-en.html`)
- **Diseño responsivo**: Adaptado para desktop, tablet y móvil
- **Navegación suave**: Scroll suave entre secciones
- **Mapa interactivo**: Google Maps integrado con ubicación de la empresa
- **Formulario de contacto**: Preparado para envío directo (requiere configuración PHP)
- **Animaciones**: Efectos visuales y transiciones suaves
- **SEO optimizado**: Meta tags y estructura semántica

### 🎨 Diseño
- **Colores corporativos**: Azul (#007bff), naranja (#ff6b35), grises
- **Tipografía**: Roboto (Google Fonts)
- **Iconos**: Font Awesome
- **Logo**: SVG vectorial incluido

### 📱 Responsive Design
- **Desktop**: Diseño completo con todas las características
- **Tablet** (768px): Navegación adaptada, contenido reorganizado
- **Móvil** (480px): Diseño optimizado para pantallas pequeñas
- **Mapa**: Altura adaptativa (400px desktop, 300px tablet, 250px móvil)

## Estructura de Archivos

```
├── index.html          # Página principal (Español)
├── index-en.html       # Página principal (Inglés)
├── styles.css          # Estilos CSS principales
├── script.js           # JavaScript para interactividad
├── logo.svg            # Logo de la empresa
├── contact.php         # Manejador de formulario (requiere PHP)
└── README.md           # Esta documentación
```

## Configuración para Servidor de Producción

### Requisitos del Servidor
- **Servidor web**: Apache/Nginx
- **PHP**: Versión 7.4 o superior (para formulario de contacto)
- **SSL**: Certificado HTTPS recomendado

### Configuración PHP para Formulario de Contacto

1. **Verificar PHP instalado**:
   ```bash
   php --version
   ```

2. **Configurar envío de correos**:
   - Editar `contact.php` línea 20-21:
   ```php
   $to = "contacto@grupoindustrialbaca.com"; // Cambiar por email real
   $from = "noreply@grupoindustrialbaca.com"; // Cambiar por dominio real
   ```

3. **Configurar servidor SMTP** (recomendado):
   - Instalar PHPMailer o configurar `php.ini`:
   ```ini
   [mail function]
   SMTP = smtp.tu-proveedor.com
   smtp_port = 587
   sendmail_from = noreply@grupoindustrialbaca.com
   ```

### Configuración del Mapa de Google

El mapa está configurado con:
- **Ubicación**: Retorno del Águila Coronada 19181, Baja Maq El Águila, Tijuana, B.C.
- **Modo**: Embed de Google Maps
- **Características**: Zoom, navegación, vista satelital

Para personalizar:
1. Ir a [Google Maps](https://maps.google.com)
2. Buscar la ubicación deseada
3. Hacer clic en "Compartir" > "Incorporar un mapa"
4. Copiar el código y reemplazar en ambos archivos HTML

### Despliegue

1. **Subir archivos** al servidor web
2. **Configurar dominio** y DNS
3. **Instalar certificado SSL**
4. **Probar formulario** de contacto
5. **Verificar mapa** y funcionalidades

### Mantenimiento

- **Actualizar contenido**: Editar archivos HTML
- **Modificar estilos**: Editar `styles.css`
- **Cambiar funcionalidades**: Editar `script.js`
- **Revisar formulario**: Verificar `contact.php` y logs del servidor

## Soporte Técnico

Para modificaciones o soporte técnico, contactar al desarrollador con:
- Acceso FTP/cPanel del servidor
- Credenciales de email corporativo
- Detalles específicos de la modificación requerida

## Notas Importantes

⚠️ **El formulario de contacto requiere un servidor con PHP habilitado para funcionar completamente.**

⚠️ **Cambiar las direcciones de email en `contact.php` antes del despliegue.**

⚠️ **Verificar que el servidor tenga configurado el envío de correos.**