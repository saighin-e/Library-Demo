<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class DataBaseCRUDController extends Controller
{
    /**
     * @param Request $request
     *
     * @return View
     */
    public function prepareData(Request $request): View
    {
        $id = $request->query('id');
        $name = $request->query('name');

        $compactData = [$id, $name];

//        $this->getData();

        return view('index', ['compactData' => $compactData]);
    }

    /**
     * Testing DB connection
     */
    public function getData(): void
    {
        $borrowers = DB::table('borrowers')
            ->join('passCard', 'borrowers.id', '=', 'passCard.user_id')
            ->select('borrowers.*', 'passCard.user_id')
            ->get();

//        \Log::error($borrowers);

        $authors = DB::table('authors')
            ->join('books', 'authors.books_list', '=', 'books.id')
            ->select('authors.*', 'books.user_id')
            ->get();

//        \Log::error($authors);
    }
}
