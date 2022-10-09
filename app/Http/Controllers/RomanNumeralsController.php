<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RomanNumeralConverter;

class RomanNumeralsController extends Controller
{
    public function index(Request $request)
    {
      return view('roman-numerals')->with([
        'result' => $request->session()->has('success') ? session('success') : null,
      ]);
    }

    public function store(Request $request)
    {
      $romanNumeralConverter = new RomanNumeralConverter;
      $result = $romanNumeralConverter->generate(intval($request->number));

      return redirect()->back()->with('success', $result)->withInput();
    }
}
