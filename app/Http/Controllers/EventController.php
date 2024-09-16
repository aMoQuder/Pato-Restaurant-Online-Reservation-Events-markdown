<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Model\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{

    public function all()
    {
        $events=event::all();
        return view('event.all',compact('events'));
    }
    public function create()
    {
        return view('event.create');
    }
    public function store(EventRequest $request)
    {
        $imageName = "";
        if ($request->hasFile("image")) {
            $image = $request->image;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path("Event/img/"), $imageName);
        }
        Event::create([
            "image" => $imageName,
            "title" => $request->title,
            'time' =>  $request->time,
            'date' => $request->date,
            "description" => $request->description,
        ]);
        return redirect()->route('events.create')->with("massege", "successfully adding new event");
    }
    /////////////////////Delete///////////////////////
    public function delete($id)
    {
        $event = Event::findOrFail($id);
        if (File::exists(public_path('Event/img/' . $event->image))) {
            File::delete(public_path('Event/img/' . $event->image));
        }
        $event->delete();
        return redirect()->back()->with("massege", "successfully addign new event");
    }
    /////////////////////  Edit///////////////////////
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view("event.edit", ['event' => $event]);
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
        $event = Event::findOrFail($old_id);
        if ($request->hasFile('image')) {
            if (File::exists(public_path('Event/img/' . $event->image))) {
                File::delete(public_path('Event/img/' . $event->image));
            }
            $image = $request->image;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path("Event/img/"), $imageName);
        } else {
            $imageName = $request->old_img;
        }

        $event->update([
            'image' => $imageName,
            'title' => $request->title,
            'time' =>  $request->time,
            'date' => $request->date,
            "description" =>  $old_description ,
        ]);
        return redirect()->back()->with("massege", "successfully adding new event");
    }
}
