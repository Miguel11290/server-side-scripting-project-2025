@extends('layouts.main')

@section('content')
    <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit College</strong>
              </div>           
              <div class="card-body">
                <form action="{{ route('colleges.update', $college->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $college->name) }}" required>
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $college->address) }}" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Update College</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection