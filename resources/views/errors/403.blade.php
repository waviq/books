@extends('layouts.main')
@include('layouts.completeLayoutSection')
@section('content')

    <div class="container text-center">
        <h1>401 <small>Unauthorized</small></h1>
        <div>
            Sorry, you can't access this page.
        </div>
        <div>
            <a href="{{ url(action('HomeController@index')) }}">Go to home page</a>
        </div>
    </div>

@endsection