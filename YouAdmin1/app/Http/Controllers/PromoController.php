<?php

namespace App\Http\Controllers;

use App\Promo;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PromoController extends Controller
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
      $promo = new Promo;
      $promo->framework = $request->framework;
      $promo->city = $request->city;
      $promo->country = $request->country;
      $promo->school_name = $request->school;
      $promo->start_date = $request->start_date;
      $promo->end_date = $request->end_date;

      $promo->save();
      return redirect('/promotions');

    }
}
