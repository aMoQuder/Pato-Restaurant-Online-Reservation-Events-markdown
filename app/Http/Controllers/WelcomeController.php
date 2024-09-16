<?php

namespace App\Http\Controllers;

use App\Model\blog;
use App\Model\Event;
use App\Model\Food;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {   $foods=Food::inRandomOrder()->take(6)->get();
        $blogs=blog::inRandomOrder()->take(3)->get();
        // $events=Event::inRandomOrder()->take(3)->get();
        $events=Event::all();
        $firstSet = $foods->slice(0, 3);
        $secondSet = $foods->slice(3, 6);
        $count=1;
        return view('welcome',compact('firstSet','secondSet','blogs','events','count'));
    }
}
