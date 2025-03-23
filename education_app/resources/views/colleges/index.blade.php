@extends('layouts.main')

@section('content')
    <h1>Colleges</h1>
    <a href="{{ route('colleges.create') }}" class="btn btn-primary">Add College</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colleges as $college)
                <tr>
                    <td>{{$college->name}}</td>
                    <td>{{$college->address}}</td>
                    <td>
                        <a href="{{route('colleges.edit', $college->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('colleges.destroy', $college->id)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection