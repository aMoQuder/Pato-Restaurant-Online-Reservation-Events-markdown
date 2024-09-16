<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookTableRequest;
use App\Model\BookTable;
use Illuminate\Http\Request;

class BookTableController extends Controller
{
    public function store(BookTableRequest $request)
    {
        $book = BookTable::all();
        foreach ($book as $item) {
            if ($item->Num_peaple == $request->Num_peaple&&$item->book_id == $request->book_id) {
                return redirect()->back()->with("massegeError", "you booked this table  please
                  wait manger of restuarant");
            }
        }
        $bookid=$request->book_id;
        BookTable::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'nafigation' => 1,
            'Num_peaple' => $request->Num_peaple,
            'date' => $request->date,
            'time' => $request->time,
            'book_id' => $bookid,

        ]);
        return redirect()->back()->with("massege", "you are booking your table so  we look for you ");
    }

    public function show($id)
    {

        $bookTab = BookTable::FindOrfail($id);
        if ($bookTab->nafigation ==3) {
            return view('bookTable.show', ['bookTable' => $bookTab]);
        }
        $bookTab->nafigation = 2;
        $bookTab->save();
        return view('bookTable.show', ['bookTable' => $bookTab]);
    }
    public function looking($id)
    {

        $bookTab = BookTable::FindOrfail($id);
        $bookTab->nafigation = 3;
        $bookTab->save();

        return redirect()->route('allBook');
    }
    public function delet($id)
    {
        $bookTab = BookTable::FindOrfail($id);
        $bookTab->delete();
        return redirect()->route('allBook')->with("delete", "success one Book Table deleted");
    }
    public function all()
    {

        $bookTables = BookTable::all();
        return view('bookTable.all', ['bookTables' => $bookTables]);
    }
    public function index()
    {
        return view('reservation');
    }
}

