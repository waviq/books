<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Response;


class BookController extends Controller
{
    /*
     * Who can access for this method/route/url
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:crud_book',['except'=>['create','store']]);
    }

    /*
     * Page index of books
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('Book.index', compact('books'));
    }

    /*
     * Form Create Books
     */
    public function create()
    {
        return view('Book.createBook');
    }

    /*
     * Save Books
     */
    public function store()
    {
        return $this->saveBook();
    }

    /*
       Edit title books
    */
    public function postEditTitle(Request $request)
    {
        return $this->editTitleBook($request);
    }
    /*
      Edit author books
    */
    public function postEditAuthor(Request $request)
    {
        return $this->editAuthorBook($request);
    }

    public function destroy($id){
        $book = Book::findOrFail($id);
        $book->delete();

        alert()->success('Deleted');
        return redirect(url(action('BookController@index')));
    }


    private function saveBook()
    {
        $image = Input::file('image');
        $nameRandom = Str::random(5);

        if ($image == null) {
            $findFileName = 'default.png';
        } else {
            $findFileName = $nameRandom . '-' . $image->getClientOriginalName();
        }
        $filename = $findFileName;

        if ($image != null) {
            $pathSmall = public_path('assets/img/books/small/' . $filename);
            $pathLarge = public_path('assets/img/books/large/' . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($pathSmall);
            Image::make($image->getRealPath())->resize(500, 500)->save($pathLarge);
        }
        $book = new Book();
        $book->user_id = Auth::id();
        $book->title = Input::get('title');
        $book->author = Input::get('author');
        $book->photo_small = $findFileName;
        $book->photo_large = $findFileName;
        $book->save();
        alert()->success('Saved');
        return redirect(url(action('BookController@index')));
    }

    private function editTitleBook(Request $request)
    {
        $id = $request->pk;
        $newValue = $request->value;

        $book = Book::whereId($id)->first();
        $book->title = $newValue;

        if ($book->save()) {
            return Response::json(array('status' => 1));
        } else {
            return Response::json(array('status' => 0));
        }
    }

    private function editAuthorBook(Request $request)
    {
        $id = $request->pk;
        $newValue = $request->value;

        $book = Book::whereId($id)->first();
        $book->author = $newValue;

        if ($book->save()) {
            return Response::json(array('status' => 1));
        } else {
            return Response::json(array('status' => 0));
        }
    }
}
