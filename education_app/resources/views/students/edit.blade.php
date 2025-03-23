@extends('layouts.main')

@section('content')
    <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Student</strong>
              </div>           
              <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name) }}" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email) }}" required>
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $student->phone) }}" required>
                  </div>
                  <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', $student->dob) }}" required>
                  </div>
                  <div class="mb-3">
                    <label for="college_id" class="form-label">College</label>
                    <select class="form-select" id="college_id" name="college_id" required>
                      @foreach($colleges as $college)
                        <option value="{{ $college->id }}" {{ old('college_id', $student->college_id) == $college->id ? 'selected' : '' }}>{{ $college->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Update Student</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection