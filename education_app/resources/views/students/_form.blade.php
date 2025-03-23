@extends('layouts.app')

@section('content')
    <h1>{{ isset($student) ? 'Edit Student' : 'Add New Student' }}</h1>
    <form action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}" method="POST">
        @csrf
        @if(isset($student))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="college_id" class="form-label">College</label>
            <select class="form-select" id="college_id" name="college_id" required>
                @foreach($colleges as $college)
                    <option value="{{ $college->id }}" {{ old('college_id', $student->college_id ?? '') == $college->id ? 'selected' : '' }}>{{ $college->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($student) ? 'Update' : 'Add' }}</button>
    </form>
@endsection