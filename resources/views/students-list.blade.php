@extends('layouts.app')

@section('contenu')
    <h1>Students List</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>NCIN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection