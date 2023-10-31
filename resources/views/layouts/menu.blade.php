<ul class="sidebar-nav">
    <li class="sidebar-item {{ Request::is('home') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('home') }}">
            <i class="align-middle" data-feather="sliders"></i>
            <span class="align-middle">Inicio</span>
        </a>
    </li>
    @if(Auth::user()->profile_id == 3)
    <li class="sidebar-item {{ Request::is('users*') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('users.index') }}">
            <i class="align-middle" data-feather="users"></i>
            <span class="align-middle">Usuarios</span>
        </a>
    </li>
    <li class="sidebar-item {{ Request::is('questions*') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('questions.index') }}">
            <i class="align-middle" data-feather="info"></i>
            <span class="align-middle">Indicadores y preguntas</span>
        </a>
    </li>
    @endif
    <li class="sidebar-item {{ Request::is('ratings*') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('ratings.index') }}">
            <i class="align-middle" data-feather="clipboard"></i>
            <span class="align-middle">Calificaciones</span>
        </a>
    </li>
    <!-- <li class="sidebar-item">
        <a data-bs-target="#pages_4" data-bs-toggle="collapse" class="sidebar-link collapsed">
            <i class="align-middle" data-feather="database"></i> <span class="align-middle">Reportes</span>
        </a>
        <ul id="pages_4" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
            <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Reporte 1</a>
            </li>
        </ul>
    </li> -->
</ul>