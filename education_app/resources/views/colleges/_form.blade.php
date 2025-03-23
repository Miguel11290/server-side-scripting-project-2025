@extends('layouts.main')

@section('content')
    <h1>{{isset($college) ? 'Edit College' : 'Add College'}}</h1>
    <form action="{{isset($college) ? route('colleges.update', $college->id) : route('colleges.store')}}" method="POST">
        @csrf
        @if(isset($college))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $college->name ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $college->address ?? '') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{isset($college) ? 'Update' : 'Add'}}</button>
    </form>
@endsction