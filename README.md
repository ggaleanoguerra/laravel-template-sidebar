# 🎨 Laravel Modern Sidebar Template

> **Sistema de Dashboard Moderno 2025** - Un template completo con diseño sidebar responsivo construido sobre Laravel 11 + Breeze

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 11" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
  <img src="https://img.shields.io/badge/Alpine.js-8BC34A?style=for-the-badge&logo=alpine.js&logoColor=white" alt="Alpine.js" />
  <img src="https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite" />
</p>

## 📋 Descripción

Este proyecto es una **transformación completa** del layout tradicional de Laravel Breeze en un **sistema de dashboard moderno con sidebar** diseñado para aplicaciones web de 2025. 

### ✨ Características Principales

- **🎯 Sidebar Responsivo**: Navegación lateral que se adapta perfectamente a desktop y móvil
- **🌙 Modo Oscuro/Claro**: Soporte completo para temas con transiciones suaves
- **📱 Mobile-First**: Diseño optimizado para dispositivos móviles con drawer deslizante
- **🎨 Diseño Moderno**: Colores, tipografía y espaciado siguiendo tendencias 2025
- **⚡ Rendimiento**: Transiciones fluidas y animaciones optimizadas
- **🔧 Componentes Mejorados**: Todos los componentes de Breeze rediseñados

## 🏗️ Arquitectura del Layout

### Layout Principal (`app.blade.php`)
```
┌─ Mobile Overlay (z-40)
├─ Mobile Sidebar (z-50, sliding drawer)
├─ Desktop Sidebar (fixed, w-64)
└─ Main Content Area
   ├─ Top Navigation Bar (sticky, backdrop-blur)
   └─ Page Content (responsive padding)
```

### Componentes Modernizados
- **Sidebar**: Navegación jerárquica con iconos Heroicons
- **Dropdown**: Menús mejorados con bordes redondeados
- **Botones**: Diseño actualizado con mejor contraste
- **Inputs**: Campos de formulario con mejor UX
- **Dashboard**: Cards estadísticas y layout de contenido moderno

## 🚀 Funcionalidades

### 🎯 Navegación Inteligente
- **Desktop**: Sidebar fijo de 256px de ancho
- **Mobile**: Hamburger menu que despliega sidebar deslizante
- **Estados Activos**: Indicadores visuales para la página actual
- **Transiciones**: Animaciones suaves en todas las interacciones

### 🎨 Sistema de Diseño
- **Tipografía**: Fuente Inter para mejor legibilidad
- **Colores**: Paleta moderna con grays optimizados
- **Espaciado**: Sistema de spacing consistente
- **Sombras**: Depth system con sombras sutiles

### 📊 Dashboard Moderno
- **Cards Estadísticas**: Métricas visuales con iconos
- **Layout Responsivo**: Grid que se adapta al viewport
- **Componentes Interactivos**: Botones de acción rápida
- **Actividad Reciente**: Timeline de eventos

## 🛠️ Instalación

### Prerequisitos
- PHP 8.2+
- Composer
- Node.js 18+
- NPM o Yarn

### Pasos de Instalación

1. **Clonar e instalar dependencias**
   ```bash
   git clone <repository-url>
   cd layout-template
   composer install
   npm install
   ```

2. **Configurar entorno**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Configurar base de datos**
   ```bash
   # Editar .env con tu configuración de BD
   php artisan migrate
   ```

4. **Compilar assets**
   ```bash
   npm run build
   # o para desarrollo:
   npm run dev
   ```

5. **Iniciar servidor**
   ```bash
   php artisan serve
   ```

## 🎨 Personalización

### Colores y Temas
El sistema usa variables CSS personalizadas definidas en `tailwind.config.js`:

```javascript
colors: {
  gray: {
    50: '#f9fafb',   // Backgrounds claros
    900: '#111827',  // Texto oscuro
    950: '#030712',  // Background modo oscuro
  }
}
```

### Componentes Sidebar
Personaliza la navegación editando `resources/views/layouts/sidebar.blade.php`:

- **Agregar enlaces**: Duplicar estructura existente
- **Cambiar iconos**: Usar Heroicons SVG
- **Modificar estilos**: Clases Tailwind para estados activos

### Layout Responsivo
Breakpoints configurados:
- **Mobile**: < 1024px (sidebar deslizante)
- **Desktop**: ≥ 1024px (sidebar fijo)

## 📁 Estructura del Proyecto

```
resources/views/
├── layouts/
│   ├── app.blade.php      # Layout principal con sidebar
│   ├── sidebar.blade.php  # Componente de navegación
│   └── guest.blade.php    # Layout para autenticación
├── dashboard.blade.php    # Dashboard moderno
├── auth/
│   └── login.blade.php    # Login rediseñado
└── components/            # Componentes Breeze mejorados
```

## 🎯 Uso y Navegación

### Para Usuarios
1. **Login**: Interfaz moderna con validación mejorada
2. **Dashboard**: Vista general con métricas y acciones rápidas
3. **Perfil**: Gestión de cuenta con formularios mejorados
4. **Responsive**: Funciona perfectamente en cualquier dispositivo

### Para Desarrolladores
1. **Extender Sidebar**: Agregar nuevas secciones en `sidebar.blade.php`
2. **Nuevas Páginas**: Usar `<x-app-layout>` con slot `header`
3. **Componentes**: Reutilizar componentes rediseñados
4. **Temas**: Personalizar variables CSS y colores

## 🔧 Tecnologías Utilizadas

- **Backend**: Laravel 11 con Breeze
- **Frontend**: Tailwind CSS + Alpine.js
- **Build Tool**: Vite
- **Iconografía**: Heroicons
- **Tipografía**: Inter Font Family
- **Base de Datos**: SQLite (configurable)

## 📱 Características Responsivas

### Mobile (< 1024px)
- Sidebar oculto por defecto
- Botón hamburger en top bar
- Overlay oscuro al abrir sidebar
- Drawer deslizante desde la izquierda
- Touch-friendly interactions

### Desktop (≥ 1024px)
- Sidebar siempre visible
- Área de contenido con padding izquierdo
- Hover states mejorados
- Navegación con teclado optimizada

## 🎉 Próximos Pasos

Este template está listo para:
- ✅ Agregar más secciones al sidebar
- ✅ Implementar notificaciones en tiempo real
- ✅ Añadir más componentes de dashboard
- ✅ Integrar sistemas de permisos
- ✅ Expandir con módulos específicos

## 📄 Licencia

Este proyecto mantiene la licencia open-source de Laravel.

---

**✨ Sistema de Dashboard Moderno 2025** - Construido con ❤️ para desarrolladores que buscan interfaces modernas y funcionales.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
