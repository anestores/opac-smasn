<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = [];

        return view('home', compact('books'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');

        $books = Book::where('name', 'like', '%'.$search.'%')
            ->orWhere('author', 'like', '%'.$search.'%')
            ->orwhere('accession_number', 'like', '%'.$search.'%')
            ->paginate(15);

        return view('/home', compact('books'));
    }

}
