{{--
    EJEMPLO DE USO DE ÍCONOS MODULARES

    Este archivo muestra diferentes formas de usar los íconos modulares
    en tu aplicación Laravel. Puedes copiar estos ejemplos y adaptarlos
    según tus necesidades.
--}}

{{-- Ejemplo 1: Sidebar Navigation --}}
<nav class="sidebar-nav">
    <ul>
        <li>
            <a href="/dashboard" class="nav-link">
                <x-icons.dashboard class="h-5 w-5" />
                Dashboard
            </a>
        </li>
        <li>
            <a href="/users" class="nav-link">
                <x-icons.users class="h-5 w-5" />
                Gestión de Usuarios
            </a>
        </li>
        <li>
            <a href="/analytics" class="nav-link">
                <x-icons.analytics class="h-5 w-5" />
                Analytics
            </a>
        </li>
    </ul>
</nav>

{{-- Ejemplo 2: Botones de Acción --}}
<div class="action-buttons">
    <button class="btn btn-primary">
        <x-icons.plus class="h-4 w-4 mr-2" />
        Crear Nuevo
    </button>

    <button class="btn btn-secondary">
        <x-icons.search class="h-4 w-4 mr-2" />
        Buscar
    </button>

    <button class="btn btn-danger">
        <x-icons.logout class="h-4 w-4 mr-2" />
        Cerrar Sesión
    </button>
</div>

{{-- Ejemplo 3: Cards con Íconos --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="card">
        <div class="card-header">
            <x-icons.users class="h-6 w-6 text-blue-500" />
            <h3>Usuarios</h3>
        </div>
        <div class="card-body">
            <p>1,234 usuarios registrados</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <x-icons.analytics class="h-6 w-6 text-green-500" />
            <h3>Analytics</h3>
        </div>
        <div class="card-body">
            <p>+15% este mes</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <x-icons.reports class="h-6 w-6 text-purple-500" />
            <h3>Reportes</h3>
        </div>
        <div class="card-body">
            <p>12 reportes generados</p>
        </div>
    </div>
</div>

{{-- Ejemplo 4: Lista de Notificaciones --}}
<div class="notifications-list">
    <div class="notification-item">
        <x-icons.mail class="h-5 w-5 text-blue-500" />
        <div class="notification-content">
            <p>Nuevo mensaje recibido</p>
            <span class="timestamp">Hace 5 minutos</span>
        </div>
    </div>

    <div class="notification-item">
        <x-icons.calendar class="h-5 w-5 text-green-500" />
        <div class="notification-content">
            <p>Recordatorio de reunión</p>
            <span class="timestamp">En 30 minutos</span>
        </div>
    </div>

    <div class="notification-item">
        <x-icons.users class="h-5 w-5 text-orange-500" />
        <div class="notification-content">
            <p>Nuevo usuario registrado</p>
            <span class="timestamp">Hace 1 hora</span>
        </div>
    </div>
</div>

{{-- Ejemplo 5: Breadcrumbs --}}
<nav class="breadcrumbs">
    <a href="/dashboard" class="breadcrumb-item">
        <x-icons.home class="h-4 w-4" />
        Inicio
    </a>
    <span class="separator">/</span>
    <a href="/users" class="breadcrumb-item">
        <x-icons.users class="h-4 w-4" />
        Usuarios
    </a>
    <span class="separator">/</span>
    <span class="breadcrumb-current">
        <x-icons.profile class="h-4 w-4" />
        Perfil
    </span>
</nav>

{{-- Ejemplo 6: Dropdown Menu --}}
<div class="dropdown" x-data="{ open: false }">
    <button @click="open = !open" class="dropdown-trigger">
        <x-icons.settings class="h-5 w-5" />
        Configuración
    </button>

    <div x-show="open" class="dropdown-menu">
        <a href="/profile" class="dropdown-item">
            <x-icons.profile class="h-4 w-4" />
            Mi Perfil
        </a>
        <a href="/settings" class="dropdown-item">
            <x-icons.settings class="h-4 w-4" />
            Configuración
        </a>
        <hr class="dropdown-divider">
        <a href="/logout" class="dropdown-item text-red-600">
            <x-icons.logout class="h-4 w-4" />
            Cerrar Sesión
        </a>
    </div>
</div>

{{-- Ejemplo 7: Status Indicators --}}
<div class="status-list">
    <div class="status-item status-success">
        <x-icons.analytics class="h-5 w-5 text-green-500" />
        <span>Sistema operativo</span>
    </div>

    <div class="status-item status-warning">
        <x-icons.notification class="h-5 w-5 text-yellow-500" />
        <span>Mantenimiento programado</span>
    </div>

    <div class="status-item status-info">
        <x-icons.mail class="h-5 w-5 text-blue-500" />
        <span>Nuevos mensajes</span>
    </div>
</div>

{{-- Ejemplo 8: Form Fields con Íconos --}}
<form class="form">
    <div class="form-group">
        <label class="form-label">
            <x-icons.search class="h-4 w-4" />
            Buscar usuarios
        </label>
        <input type="text" class="form-input" placeholder="Escriba aquí...">
    </div>

    <div class="form-group">
        <label class="form-label">
            <x-icons.mail class="h-4 w-4" />
            Correo electrónico
        </label>
        <input type="email" class="form-input" placeholder="correo@ejemplo.com">
    </div>

    <div class="form-group">
        <label class="form-label">
            <x-icons.calendar class="h-4 w-4" />
            Fecha de nacimiento
        </label>
        <input type="date" class="form-input">
    </div>
</form>

{{-- Ejemplo 9: Toolbar/Actions Bar --}}
<div class="toolbar">
    <div class="toolbar-section">
        <button class="toolbar-btn">
            <x-icons.plus class="h-4 w-4" />
            Nuevo
        </button>
        <button class="toolbar-btn">
            <x-icons.search class="h-4 w-4" />
            Buscar
        </button>
    </div>

    <div class="toolbar-section">
        <button class="toolbar-btn">
            <x-icons.settings class="h-4 w-4" />
            Configurar
        </button>
        <button class="toolbar-btn">
            <x-icons.reports class="h-4 w-4" />
            Exportar
        </button>
    </div>
</div>

{{--
    NOTAS ADICIONALES:

    1. Todos los íconos heredan el color del texto padre con 'currentColor'
    2. Puedes sobrescribir las clases por defecto pasando el atributo 'class'
    3. Los íconos son totalmente escalables y responsivos
    4. Se puede usar en cualquier componente Blade de la aplicación
    5. Fácil de mantener: cambios en un solo lugar se reflejan en toda la app
--}}
