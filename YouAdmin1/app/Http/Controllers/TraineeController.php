<?php

namespace App\Http\Controllers;

use App\Trainee;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function store(Request $request)
    {
      $trainee = new Trainee;
      $trainee->framework = $request->framework;
      $trainee->city = $request->city;
      $trainee->country = $request->country;
      $trainee->school_name = $request->school;
      $trainee->start_date = $request->start_date;
      $trainee->end_date = $request->end_date;

      $trainee->save();
      return redirect('/apprenants');

    }
}
