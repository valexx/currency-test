<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Currency::query()->orderBy('numeric_code')->get();
        return view('currency', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Currency $currency)
    {
        $status = (int) $request->get('status');
        $currency->update(['status' => $status]);

        return response()->json(['status' => 'ok']);
    }
}
