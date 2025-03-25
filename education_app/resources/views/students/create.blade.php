@extends('layouts.main')

@section('content')
    <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Student</strong>
              </div>           
              <div class="card-body">
                @include('students._form', [
                  'action' => route('students.store'),
                  'buttonText' => 'Add Student',
                  'colleges' => $colleges
                ])
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection