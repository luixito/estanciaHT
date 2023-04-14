
<body>

<div class="conteiner-fluid" style="background: #383d3e">
    <nav class="navbar navbar-expand-lg ms-5" >
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="navbar-nav ms-5">
                <li class="nav-item dropdown text-light">
                    <a class="nav-link dropdown-toggle text-light mx-2" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Dar de Alta
                    </a>
                    <ul class="dropdown-menu mx-2" style="background: #383d3e">
                        <li><a class="dropdown-item text-light" href="{{ route('vistaPermisos') }}">Ver Permisos</a></li>
                        <li><a class="dropdown-item text-light" href="{{ route('subidaPermisos') }}">Subir Permiso</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown text-light">
                    <a class="nav-link dropdown-toggle text-light mx-2" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Dar de Alta
                    </a>
                    <ul class="dropdown-menu mx-2" style="background: #383d3e">
                        <li><a class="dropdown-item text-light" href="{{ route('vistaPermisos') }}">Trabajador</a></li>
                        <li><a class="dropdown-item text-light" href="#">Becario</a></li>
                        <li><a class="dropdown-item text-light" href="#">Practicante</a></li>
                    </ul>
                </li>
                <a class="nav-link text-light mx-2" href="{{ route('vistaPermisos') }}">Datos Bancarios</a>
                <a class="nav-link text-light mx-2" href="{{ route('vistaPermisos') }}">Personal</a>
            </div>
        </div>
    </nav>
</div>
</body>


