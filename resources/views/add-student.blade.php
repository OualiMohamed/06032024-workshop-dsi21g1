@extends('layouts.app')

@section('contenu')
    <h1>Add Student</h1>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success')}}
        </div>
    @endif
    <form action="{{ url('save-student') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="ncin" class="form-label">NCIN</label>
            <input type="text" class="form-control" name="ncin"
                id="ncin" placeholder="Enter NCIN">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name"
                id="name" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control"  name="email"
                id="email" placeholder="Enter email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control"  name="phone"
                id="phone" placeholder="Enter phone">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="Address" rows="3" placeholder="Enter address"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ url('list-students') }}" class="btn btn-danger">Back</a>
        </div>
    </form>

@endsection