@include('layouts.head-index')
@include('layouts.header-index')

<div>
    <div >
        @include('layouts.dashboard-menu')
    </div>
    <div>
        <div>
            <div>
                <a href="{{route('user.create')}}">Crear nuevo usuario</a>
                <form action="" method="get">
                    <input type="text" placeholder="Nombre">
                    <button>Buscar</button>
                </form>

            </div>
            <div>    {{-- Tabla de usuarios--}}
                <div class="encabezado"> {{-- Encabezado --}}
                    <p>
                        Nombre
                    </p>
                </div>
                <div class="encabezado">
                    <p>
                        Rol
                    </p>
                </div>
                <div>
                    <p>Ver informacion</p>
                </div>
                <div class="encabezado">
                    <p>Modificar</p>
                </div>
                <div class="encabezado">
                    <p>Eliminar</p>
                </div>
                <div class="celda"> {{-- Encabezado --}}
                    <p>
                        Nombre1
                    </p>
                </div>
                <div class="celda">
                    <p>
                        Rol
                    </p>
                </div>
                {{-- <div class="celda">
                    <a href="{{route("user.show")}}">
                        Ver información
                    </a>
                </div>
                <div class="celda">
                    <a href="{{route("user.update")}}">
                        Modificar
                    </a>
                </div>
                <div class="celda">
                    <a href="#">
                        Eliminar
                    </a>
                </div> --}}
            </div>

        </div>
    </div>

</div>

@include('layouts.footer')
