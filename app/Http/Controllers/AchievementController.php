<?php

namespace App\Http\Controllers;
use App\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
   public function index(){

    $achievements=Achievement::orderBy('id')->get();
    //dd($achievements);
    return view('home',compact('achievements'));
   }
}
