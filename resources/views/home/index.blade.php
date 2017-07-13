@extends('layouts.main')

@include('layouts.completeLayoutSection')

@section('content')
<div class="container">
    <h1>Welcome {{Auth::user()->name}}</h1><br />

    <h3>Rules</h3><br /><br />
    <h5>Super Admin :</h5>
    <ol>
        <li>CRUD User</li>
        <li>CRUD Books</li>
    </ol>

    <h5>Admin :</h5>
    <ol>
        <li>CRUD Books</li>
    </ol>
    <h5>User :</h5>
    <ol>
        <li>Just Create Book</li>
    </ol>
</div>
@endsection