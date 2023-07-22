<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>


@can('Jefe del Personal', 'Admin del Sistema')
    <li class="menu-header">Gestionar Personal</li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
            <i class="fas fa-users"></i>
            <span>Registrar Personal</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('personal.index') }}">Ver</a></li>
            <li><a class="nav-link" href="{{ route('personal.create') }}">Crear</a></li>
            {{-- <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li> --}}
        </ul>
    </li>
@endcan


<li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
        <i class="fas fa-columns"></i>
        <span>Gestionar Roles</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('role.index') }}">Ver</a></li>
        <li><a class="nav-link" href="{{ route('role.create') }}">Crear</a></li>
    </ul>
</li>

{{-- <li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
        <i class="fas fa-columns"></i>
        <span>Registrar Horario</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('horario.index') }}">Ver</a></li>
        <li><a class="nav-link" href="{{ route('horario.create') }}">Crear</a></li>
    </ul>
</li>

<li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
        <i class="fas fa-restroom"></i>
        <span>Registrar Asistencia</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('asistencia.index') }}">Ver</a></li>
        <li><a class="nav-link" href="{{ route('asistencia.create') }}">Crear</a></li>
    </ul>
</li> --}}

<li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
        <span>GESTIONAR COMANDA</span>

    </a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="/mesas">
                <i class=" fas fa-building"></i><span>Mesas</span>
            </a></li>
        <li><a class="nav-link" href="/clientes">
                <i class=" fas fa-building"></i><span>Clientes</span>
            </a></li>
        <li><a class="nav-link" href="/platos">
                <i class=" fas fa-building"></i><span>Platos</span>
            </a></li>
        <li><a class="nav-link" href="/categorias">
                <i class=" fas fa-building"></i><span>Categoria Plato</span>
            </a></li>
        <li><a class="nav-link" href="/comandas">
                <i class=" fas fa-building"></i><span>Cliente-Mesa</span>
            </a></li>
        <li><a class="nav-link" href="/productos">
                <i class=" fas fa-building"></i><span>Producto</span>
            </a></li>
        <li><a class="nav-link" href="/tipos">
                <i class=" fas fa-building"></i><span>Tipo Producto</span>
            </a></li>
        <li><a class="nav-link" href="/menus">
                <i class=" fas fa-building"></i><span>Menu</span>
            </a></li>
        <li><a class="nav-link" href="/tipomenus">
                <i class=" fas fa-building"></i><span>Tipo Menu</span>
            </a></li>
    </ul>

</li>

<li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
        <span>GESTIONAR RESERVA</span>

    </a>
    <ul class="dropdown-menu">
        <li><a href="/reservacions" class="dropdown-item has-icon">
                <i class="fa-solid fa-clipboard"></i>Reservación
            </a></li>
        <li><a class="nav-link" href="/mesas">
                <i class=" fas fa-building"></i><span>Mesas</span>
            </a></li>
        <li><a class="nav-link" href="/clientes">
                <i class=" fas fa-building"></i><span>Clientes</span>
            </a></li>

    </ul>

</li>

<li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
        <span>GESTIONAR ALMACEN</span>

    </a>
    <ul class="dropdown-menu">
        <li><a href="/proveedors" class="dropdown-item has-icon">
                <i class="fa-solid fa-clipboard"></i>Proveedor
            </a></li>

    </ul>

</li>
