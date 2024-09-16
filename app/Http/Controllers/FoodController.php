<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Model\Food;
use App\Model\TypeFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FoodController extends Controller
{
    public function index()
    {
        $TypeFoods=TypeFood::all();
        $foods=Food::all();
        return view('menue',compact('foods','TypeFoods'));    }
    public function all()
    {   $TypeFoods=TypeFood::all();
        $foods=Food::all();
        return view('food.all',compact('foods','TypeFoods'));
    }
    public function create()
    {
        return view('food.create');
    }

    public function store(FoodRequest $request)
    {
        $imageName = "";
        if ($request->hasFile("image")) {
            $image = $request->image;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path("food/img/"), $imageName);
        }


        Food::create([
            "image" => $imageName,
            "description" => $request->description,
            "price" => $request->price,
            "name" => $request->name,
            "type_id" => $request->type_id,
        ]);

        return redirect()->route('createfood')->with("massege", "successfully adding new food");
    }

    /////////////////////Delete///////////////////////
    public function delete($id)
    {
        $food = Food::findOrFail($id);
        if (File::exists(public_path('food/img/' . $food->image))) {
            File::delete(public_path('food/img/' . $food->image));
        }
        $food->delete();
        return redirect()->back()->with("delete", "The Food Was Deleted successfully");
    }



    /////////////////////  Edit///////////////////////
    public function edit($id)
    {
        $food = Food::findOrFail($id);
        return view("food.edit", ['food' => $food]);
    }



    ///////////////////// Save Edit///////////////////////


    public function save(Request $request)
    {
        $imageName = "";
        $old_id = $request->old_id;


        if ($request->description == "") {
            $old_description = $request->old_description;
        } else {
            $old_description = $request->description;
        }


        $food = Food::findOrFail($old_id);

        if ($request->hasFile('image')) {
            if (File::exists(public_path('food/img/' . $food->image))) {
                File::delete(public_path('food/img/' . $food->image));
            }
            $image = $request->image;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path("food/img/"), $imageName);
        } else {
            $imageName = $request->old_image;
        }

        $food->update([
            "image" => $imageName,
            "description" => $old_description,
            "price" => $request->price,
            "name" => $request->name,
            "type_id" => $request->type_id,
        ]);
        return redirect()->route('allfood')->with("massege", "The Food Was updated successfully");
    }
}
