<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salon;

class SalonController extends Controller
{

    public function index()
    {
        $salons = Salon::all();
        return view('salon.index', compact('salons' ));
    }

    public function create()
    {
        return view('salon.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $salon = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9+\-\(\)\s]*$/',
            'email' => 'required|email',
            'week' => 'required|string',
            'start_time' => 'required|time',
            'end_time' => 'required|time',
        ]);

        Salon::create($salon);
        return redirect()->route('salon.index')->with('success', 'Salon created successfully');

    }

    public function show($id)
    {
        $salons = Salon::findOrFail($id);
        return view('salon.show', compact('salons'));
    }

    public function edit($id)
    {
        $salons = Salon::findOrFail($id);
        return view('salon.edit', compact('salons'));
    }

    public function update(Request $request, $id)
    {
        $salon = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9+\-\(\)\s]*$/',
            'email' => 'required|email',
            'week' => 'required|string',
            'start_time' => 'required|time',
            'end_time' => 'required|time',
        ]);

        $salons = Salon::findOrFail($id);
        $salons->update($salon);
        return redirect('/salon')->with('success', 'Salon updated successfully');
    }

    public function destroy($id)
    {
        $salons = Salon::findOrFail($id);
        $salons->delete();
        return redirect('/salon')->with('success', 'Salon deleted successfully');
    }

}
