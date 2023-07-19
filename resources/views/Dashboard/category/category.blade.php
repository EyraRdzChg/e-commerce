@include('layouts.head-index')
@include('layouts.header-index')

<div>
    <div >
        @include('layouts.dashboard-menu')
    </div>
    <div>
        <div>
            <div>
                <a href="{{route("category-create")}}">Crear nuevo usuario</a>
                <form action="" method="get">
                    <input type="text" placeholder="Nombre">
                    <button>Buscar</button>
                </form>

            </div>
            <div>    {{-- Tabla de categoria--}}
                <div class="encabezado"> {{-- Encabezado --}}
                    <p>
                        Nombre
                    </p>
                </div>
                <div class="encabezado">
                    <p>
                        Estatus
                    </p>
                </div>
                <div class="encabezado">
                    <p>
                         Modificar
                    </p>
                </div>
                <div>
                    <p>Ver informacion</p>
                </div>
                <div class="encabezado">
                    <a href="#">
                        Eliminar
                    </a>
                </div>
                <div class="celda"> {{-- Celda --}}
                    <p>
                        Nombre1
                    </p>
                </div>
                <div class="celda">
                    <p>
                        Disponible
                    </p>
                </div>
                <div class="celda">
                    <a href="{{route("category-update")}}">
                        Modificar
                    </a>
                </div>
                <div class="celda">
                    <a href="{{route("category-show")}}">
                        Ver información
                    </a>
                </div>

                <div class="celda">
                    <a href="#">
                        Eliminar
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>

@include('layouts.footer')
