@extends('layouts.app')

@section('content')
<form action="" method="post" class="card overflow-hidden">
    <div class="mt-4 mt-spacing-md-10">
        <div class="form-group-item">
            <label for="group-name text-capitalize">name</label>
            <div class="d-flex align-items-center">
                <input id="group-name" type="text" name="name" class="form-control  py-spacing-4_5" placeholder="Enter name">
            </div>
        </div>
        <div class="form-group-item">
            <label for="description">description</label>
            <div class="d-flex align-items-center">
                <textarea id="description" name="description" class="form-control  py-spacing-4_5" placeholder="Enter answer"></textarea>
            </div>
        </div>
        <div class="d-sm-flex btn-row pt-3 pt-spacing-md-8 pb-spacing-md-5">
            <button type="submit" class="btn ms-sm-auto btn-primary px-4 py-spacing-3" data-bs-dismiss="modal" aria-label="Close">
                Save
            </button>
        </div>
    </div>
</form>
@endsection('content')
