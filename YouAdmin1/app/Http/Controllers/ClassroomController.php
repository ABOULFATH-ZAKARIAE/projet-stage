<?php

namespace App\Http\Controllers;

use App\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Promo;
class ClassroomController extends Controller
{
          /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = Auth::user();
      $classroom = new Classroom;
      $classroom->name = $request->name;
      $classroom->classroom_number = $request->classroom_number;
      $classroom->user_id = $user->id;
      $classroom->promo_id = $request->promo_id;

      $classroom->save();
      return redirect('/classes');

    }

            /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $promos = Promo::all();


      return view('classroom.create', ['promos' => $promos]);

    }
}


