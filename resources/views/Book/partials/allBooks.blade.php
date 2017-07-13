<div class="container general">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Book List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
                    <table class="table table-bordered">
                        <tr>
                            <th class="numberTable">#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Cover</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($books as $key => $book)

                            <tr>
                                <td>{{$key+1}}</td>
                                <td class="title" data-pk="{{$book->id}}">{{$book->title}}</td>
                                <td class="author" data-pk="{{$book->id}}">{{$book->author}}</td>
                                <td>
                                    <img class="img-rounded" src="{{asset('assets/img/books/small/'.$book->photo_small)}}" width="100" height="100" alt="Cover" />
                                </td>
                                <td>
                                {!! Form::open(array('action'=>array('BookController@destroy', $book->id), 'method'=>'delete')) !!}
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
                        {{$books->render()}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>