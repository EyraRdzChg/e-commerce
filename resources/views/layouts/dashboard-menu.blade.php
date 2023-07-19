<div class="row">
    <div>
        <nav class="nave" >
            <ul class="menu-d">
                <li ><a href="/dashboard"><i class="bi bi-house"></i>Panel de Control</a></li>
                <li >
                    <a href="{{route("user.index")}}" role="button" aria-expanded="false">Usuarios </a>
                </li>
                <li>
                    <a href="#" role="button" aria-expanded="false">Catalogo</a>
                    <ul>
                        <li><a href="#">Productos</a></li>
                        <li><a href="{{route("category")}}">Categoria</a></li>
                        <li><a href="#">Propuestas</a></li>
                    </ul>
                </li>
                <li>
                    <a  href="#">Ventas</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9">
        <!-- Resto del contenido de la página -->
    </div>
</div>
