<div class="container form-general">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Books</h3>
                </div>
                <!-- /.box-header -->
                {{--form start--}}
                {!! Form::open(['url' => 'book','class'=>'form-horizontal','files'=>true]) !!}

                <div class="box-body">
                    <div class="form-group">
                        <label for="inputTitle" class="col-sm-2 control-label">Title</label>

                        <div class="col-sm-10">
                            {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Title']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAuthor" class="col-sm-2 control-label">Author</label>

                        <div class="col-sm-10">
                            {!! Form::text('author',null,['class'=>'form-control','placeholder'=>'Author']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputImage" class="col-sm-2 control-label">Image</label>

                        <div class="col-sm-10">
                            {!! Form::file('image',null,['class'=>'form-control','placeholder'=>'Image']) !!}
                        </div>
                    </div>


                </div>
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