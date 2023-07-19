@include('layouts.head-index')
@include('layouts.header-index')

<div>
    <div >
        @include('layouts.dashboard-menu')
    </div>
    <div>
        <form action="{{route("user.store")}}" method="post">
        @csrf

            <div>
                <div>
                    <p>Nombre</p>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}" required>
                </div>
                <div>
                    <p>Email</p>
                    <input class="form-control" type="email" name="email" value="{{old('email')}}" required>
                </div>
                <div>
                    <p>Password</p>
                    <input class="form-control" type="password" name="password" value="{{old('password')}}" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" id="roles[]" value="1">
                    <label class="form-check-label" for="roles[]">Vendedor
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" id="roles[]" value="3">
                    <label class="form-check-label" for="roles[]">Gerente
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" id="roles[]" value="4">
                    <label class="form-check-label" for="roles[]">Contador
                    </label>
                </div>
            </div>
            <button>Crear usuario</button>


        </form>
    </div>

</div>

@include('layouts.footer')
