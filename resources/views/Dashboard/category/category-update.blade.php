@include('layouts.head-index')
@include('layouts.header-index')

<div>
    <div >
        @include('layouts.dashboard-menu')
    </div>
    <div>
        <form method="POST" action="">
            @csrf
            <div class="form-row">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="{{old('name')}}" required>
            </div>
            <div class="form-row">
                <label>Status</label>
                <select class="form-select" name="status" required>
                    <option value="" selected>Select...</option>
                    <option {{ old('status') == 'available' ? 'selected' : ''}} value="available" >Available</option>
                    <option {{ old('status') == 'unavailable' ? 'selected' : ''}} value="unavailable" >Unavailable</option>
                </select>

            </div>

            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Create category</button>
            </div>

        </form>
    </div>

</div>

@include('layouts.footer')
