<div class="container form-general">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Create User</h3>
                </div>
                {{--form start--}}
                @if(isset($user))
                    {!! Form::model($user,['method' => 'PATCH', 'action'=>['UserController@update', $user->id]]) !!}
                @else
                    {!! Form::open(['url' => 'user','class'=>'form-horizontal']) !!}
                @endif

                <div class="box-body">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Full Name</label>

                        <div class="col-sm-10">
                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Full Name']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputUsername" class="col-sm-2 control-label">Username</label>

                        <div class="col-sm-10">
                            {!! Form::text('username',null,['class'=>'form-control','placeholder'=>'Username']) !!}
                        </div>
                    </div>
                    @if(!isset($user))
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="re password" class="col-sm-2 control-label">Re Password</label>

                            <div class="col-sm-10">
                                {!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Re Password']) !!}
                            </div>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="inputRoles" class="col-sm-2 control-label">Role</label>

                        <div class="col-sm-10">
                            @if(isset($user))
                                {!! Form::select('role[]', $role,$user->roles->lists('id')->all(), ['class'=>'form-control','multiple','placeholder' => '--select category--']) !!}
                            @else
                                {!! Form::select('role[]', $role,null, ['class'=>'form-control','multiple','placeholder' => '--select category--']) !!}
                            @endif
                        </div>
                    </div>
                </div>
                @include('errors.alertValidation')
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div>
                <!-- /.box-footer -->

                {!! Form::close() !!}
                {{--form close--}}

            </div>
        </div>
    </div>
</div>