@extends('layouts.main')
@include('layouts.completeLayoutSection')

@section('content')
    <div class="container general">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">User List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
                        <table class="table table-bordered">
                            <tr>
                                <th class="numberTable">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($users as $key => $user)

                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{!!Html::linkAction('UserController@edit','Edit', [$user->id],['class'=>'btn btn-warning'])!!}</td>
                                    <td>
                                    {!! Form::open(array('action'=>array('UserController@destroy', $user->id), 'method'=>'delete')) !!}
                                    <!-- Button Submit-->
                                        {!! Form::submit('Delete', ['class' =>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            {{$users->render()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection