@include('layouts.head-index')
@include('layouts.header-index')

<div>
    <div >
        @include('layouts.dashboard-menu')
    </div>
    <div>
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
                <input class="form-check-input" type="checkbox" name="seller_since" id="seller_since" value="{{now()}}">
                <label class="form-check-label" for="seller_since">Vendedor
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="manager_since" id="manager_since" value="{{now()}}">
                <label class="form-check-label" for="manager_since">Gerente
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="accountant_since" id="accountant_since" value="{{now()}}">
                <label class="form-check-label" for="accountant_since">Contador
                </label>
            </div>
        </div>
    </div>

@include('layouts.footer')
