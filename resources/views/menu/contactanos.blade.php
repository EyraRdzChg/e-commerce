@include('layouts.head-index')
@include('layouts.header-index')

<div>
    <span>Contactanos</span>
    <p>Si tienes alguna duda o pregunta, ¡Haznosla saber!</p>
    <form action="" method="post">
        <div>
            <input type="text" name="" id="" placeholder="Nombre">
            <input type="text" name="" id="" placeholder="Correo electronico">
            <input type="text" name="" id="" placeholder="Numero de telefono">
            <input type="text" name="descripcion" multiline="true" placeholder="Mensaje">

        </div>
        <button>Enviar</button>
    </form>
</div>

{{-- Para mapa de ubicacion --}}
{{-- <div>

</div> --}}

@include('layouts.footer')
