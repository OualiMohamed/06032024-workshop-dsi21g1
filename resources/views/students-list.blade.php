@extends('layouts.app')

@section('contenu')
    <h1>Students List</h1>
    <div class="mt-4">
        <a href="{{ url('add-student') }}" class="btn btn-primary"><i class="bi bi-plus-square"></i> Add Student</a>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>NCIN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->ncin }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <i class="bi bi-pencil-square text-success"></i>
                        <i class="bi bi-trash text-danger"></i> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection